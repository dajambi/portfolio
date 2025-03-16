
// set the starting position of the cursor outside of the screen
let clientX = -100;
let clientY = -100;
const innerCursor = document.querySelector(".cursor--small");

const initCursor = () => {
  // add listener to track the current mouse position
  document.addEventListener("mousemove", e => {
    clientX = e.clientX;
    clientY = e.clientY;
  });

  // transform the innerCursor to the current mouse position
  // use requestAnimationFrame() for smooth performance
  const render = () => {
    innerCursor.style.transform = `translate(${clientX}px, ${clientY}px)`;
    // if you are already using TweenMax in your project, you might as well
    // use TweenMax.set() instead
    // TweenMax.set(innerCursor, {
    //   x: clientX,
    //   y: clientY
    // });

    requestAnimationFrame(render);
  };
  requestAnimationFrame(render);
};

initCursor();

// cursor - start
let lastX = 0;
let lastY = 0;
let isStuck = false;
let showCursor = false;
let group, stuckX, stuckY, fillOuterCursor;

const initCanvas = () => {
  const canvas = document.querySelector(".cursor--canvas");
  const shapeBounds = {
    width: 66,
    height: 66
  };
  paper.setup(canvas);
  const strokeColor = "rgba(0, 217, 255, 0.8)";
  const strokeWidth = 1;
  const segments = 8;
  const radius = 15;

  // we'll need these later for the noisy circle
  const noiseScale = 150; // speed
  const noiseRange = 5; // range of distortion
  let isNoisy = false; // state

  // the base shape for the noisy circle
  const polygon = new paper.Path.RegularPolygon(
    new paper.Point(0, 0),
    segments,
    radius
  );
  polygon.strokeColor = strokeColor;
  polygon.strokeWidth = strokeWidth;
  polygon.smooth();
  group = new paper.Group([polygon]);
  group.applyMatrix = false;

  const noiseObjects = polygon.segments.map(() => new SimplexNoise());
  let bigCoordinates = [];

  // function for linear interpolation of values
  const lerp = (a, b, n) => {
    return (1 - n) * a + n * b;
  };

  // function to map a value from one range to another range
  const map = (value, in_min, in_max, out_min, out_max) => {
    return (
      ((value - in_min) * (out_max - out_min)) / (in_max - in_min) + out_min
    );
  };

  // the draw loop of Paper.js 
  // (60fps with requestAnimationFrame under the hood)
  // the draw loop of Paper.js
  // (60fps with requestAnimationFrame under the hood)
  paper.view.onFrame = event => {
    // using linear interpolation, the circle will move 0.2 (20%)
    // of the distance between its current position and the mouse
    // coordinates per Frame
    if (!isStuck) {
      // move circle around normally
      lastX = lerp(lastX, clientX, 0.2);
      lastY = lerp(lastY, clientY, 0.2);
      group.position = new paper.Point(lastX, lastY);
    } else if (isStuck) {
      // fixed position on a nav item
      lastX = lerp(lastX, stuckX, 0.2);
      lastY = lerp(lastY, stuckY, 0.2);
      group.position = new paper.Point(lastX, lastY);
    }

    if (isStuck && polygon.bounds.width < shapeBounds.width) {
      // scale up the shape 
      polygon.scale(1.08);
    } else if (!isStuck && polygon.bounds.width > 30) {
      // remove noise
      if (isNoisy) {
        polygon.segments.forEach((segment, i) => {
          segment.point.set(bigCoordinates[i][0], bigCoordinates[i][1]);
        });
        isNoisy = false;
        bigCoordinates = [];
      }
      // scale down the shape
      const scaleDown = 0.92;
      polygon.scale(scaleDown);
    }

    // while stuck and big, apply simplex noise
    if (isStuck && polygon.bounds.width >= shapeBounds.width) {
      isNoisy = true;
      // first get coordinates of large circle
      if (bigCoordinates.length === 0) {
        polygon.segments.forEach((segment, i) => {
          bigCoordinates[i] = [segment.point.x, segment.point.y];
        });
      }

      // loop over all points of the polygon
      polygon.segments.forEach((segment, i) => {

        // get new noise value
        // we divide event.count by noiseScale to get a very smooth value
        const noiseX = noiseObjects[i].noise2D(event.count / noiseScale, 0);
        const noiseY = noiseObjects[i].noise2D(event.count / noiseScale, 1);

        // map the noise value to our defined range
        const distortionX = map(noiseX, -1, 1, -noiseRange, noiseRange);
        const distortionY = map(noiseY, -1, 1, -noiseRange, noiseRange);

        // apply distortion to coordinates
        const newX = bigCoordinates[i][0] + distortionX;
        const newY = bigCoordinates[i][1] + distortionY;

        // set new (noisy) coodrindate of point
        segment.point.set(newX, newY);
      });

    }
    polygon.smooth();
  };
}

initCanvas();

const initHovers = () => {

  // find the center of the link element and set stuckX and stuckY
  // these are needed to set the position of the noisy circle
  const handleMouseEnter = e => {
    const navItem = e.currentTarget;
    const navItemBox = navItem.getBoundingClientRect();
    stuckX = Math.round(navItemBox.left + navItemBox.width / 2);
    stuckY = Math.round(navItemBox.top + navItemBox.height / 2);
    isStuck = true;
  };

  // reset isStuck on mouseLeave
  const handleMouseLeave = () => {
    isStuck = false;
  };

  // add event listeners to all items
  const linkItems = document.querySelectorAll(".link");
  linkItems.forEach(item => {
    item.addEventListener("mouseenter", handleMouseEnter);
    item.addEventListener("mouseleave", handleMouseLeave);
  });
};

initHovers();

//movement-efect- starts
/**
 * 
 * Copyright 2016, Codrops
 * http://www.codrops.com
 */
; (function (window) {

  'use strict';

  // Helper vars and functions.
  function extend(a, b) {
    for (var key in b) {
      if (b.hasOwnProperty(key)) {
        a[key] = b[key];
      }
    }
    return a;
  }

  // from http://www.quirksmode.org/js/events_properties.html#position
  function getMousePos(e) {
    var posx = 0, posy = 0;
    if (!e) var e = window.event;
    if (e.pageX || e.pageY) {
      posx = e.pageX;
      posy = e.pageY;
    }
    else if (e.clientX || e.clientY) {
      posx = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
      posy = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
    }
    return { x: posx, y: posy }
  }

	/**
	 * TiltFx obj.
	 */
  function TiltFx(el, options) {
    this.DOM = {};
    this.DOM.el = el;
    this.options = extend({}, this.options);
    extend(this.options, options);
    this._init();
  }

  TiltFx.prototype.options = {
    movement: {
      imgWrapper: {
        translation: { x: 15, y: 15, z: 0 },
        rotation: { x: 0, y: -15, z: 0 },
        reverseAnimation: {
          duration: 1200,
          easing: 'easeOutElastic',
          elasticity: 800
        }
      },
      caption: {
        rotation: { x: 0, y: -5, z: 0 },
        reverseAnimation: {
          duration: 1500,
          easing: 'easeOutElastic',
          elasticity: 800
        }
      }

    }
  };

	/**
	 * Init.
	 */
  TiltFx.prototype._init = function () {
    this.DOM.animatable = {};
    this.DOM.animatable.imgWrapper = this.DOM.el.querySelector('.work');
    this.DOM.animatable.caption = this.DOM.el.querySelector('.work__info');
    this._initEvents();
  };

	/**
	 * Init/Bind events.
	 */
  TiltFx.prototype._initEvents = function () {
    var self = this;

    this.mouseenterFn = function () {
      for (var key in self.DOM.animatable) {
        anime.remove(self.DOM.animatable[key]);
      }
    };

    this.mousemoveFn = function (ev) {
      requestAnimationFrame(function () { self._layout(ev); });
    };

    this.mouseleaveFn = function (ev) {
      requestAnimationFrame(function () {
        for (var key in self.DOM.animatable) {
          if (self.options.movement[key] == undefined) { continue; }
          anime({
            targets: self.DOM.animatable[key],
            duration: self.options.movement[key].reverseAnimation != undefined ? self.options.movement[key].reverseAnimation.duration || 0 : 1,
            easing: self.options.movement[key].reverseAnimation != undefined ? self.options.movement[key].reverseAnimation.easing || 'linear' : 'linear',
            elasticity: self.options.movement[key].reverseAnimation != undefined ? self.options.movement[key].reverseAnimation.elasticity || null : null,
            scaleX: 1,
            scaleY: 1,
            scaleZ: 1,
            translateX: 0,
            translateY: 0,
            translateZ: 0,
            rotateX: 0,
            rotateY: 0,
            rotateZ: 0
          });
        }
      });
    };

    this.DOM.el.addEventListener('mousemove', this.mousemoveFn);
    this.DOM.el.addEventListener('mouseleave', this.mouseleaveFn);
    this.DOM.el.addEventListener('mouseenter', this.mouseenterFn);
  };

  TiltFx.prototype._layout = function (ev) {
    // Mouse position relative to the document.
    var mousepos = getMousePos(ev),
      // Document scrolls.
      docScrolls = { left: document.body.scrollLeft + document.documentElement.scrollLeft, top: document.body.scrollTop + document.documentElement.scrollTop },
      bounds = this.DOM.el.getBoundingClientRect(),
      // Mouse position relative to the main element (this.DOM.el).
      relmousepos = { x: mousepos.x - bounds.left - docScrolls.left, y: mousepos.y - bounds.top - docScrolls.top };

    // Movement settings for the animatable elements.
    for (var key in this.DOM.animatable) {
      if (this.DOM.animatable[key] == undefined || this.options.movement[key] == undefined) {
        continue;
      }
      var t = this.options.movement[key] != undefined ? this.options.movement[key].translation || { x: 0, y: 0, z: 0 } : { x: 0, y: 0, z: 0 },
        r = this.options.movement[key] != undefined ? this.options.movement[key].rotation || { x: 0, y: 0, z: 0 } : { x: 0, y: 0, z: 0 },
        setRange = function (obj) {
          for (var k in obj) {
            if (obj[k] == undefined) {
              obj[k] = [0, 0];
            }
            else if (typeof obj[k] === 'number') {
              obj[k] = [-1 * obj[k], obj[k]];
            }
          }
        };

      setRange(t);
      setRange(r);

      var transforms = {
        translation: {
          x: (t.x[1] - t.x[0]) / bounds.width * relmousepos.x + t.x[0],
          y: (t.y[1] - t.y[0]) / bounds.height * relmousepos.y + t.y[0],
          z: (t.z[1] - t.z[0]) / bounds.height * relmousepos.y + t.z[0],
        },
        rotation: {
          x: (r.x[1] - r.x[0]) / bounds.height * relmousepos.y + r.x[0],
          y: (r.y[1] - r.y[0]) / bounds.width * relmousepos.x + r.y[0],
          z: (r.z[1] - r.z[0]) / bounds.width * relmousepos.x + r.z[0]
        }
      };

      this.DOM.animatable[key].style.WebkitTransform = this.DOM.animatable[key].style.transform = 'translateX(' + transforms.translation.x + 'px) translateY(' + transforms.translation.y + 'px) translateZ(' + transforms.translation.z + 'px) rotateX(' + transforms.rotation.x + 'deg) rotateY(' + transforms.rotation.y + 'deg) rotateZ(' + transforms.rotation.z + 'deg)';
    }
  };

  window.TiltFx = TiltFx;


  // originally in HTML
  (function () {
    var tiltSettings = [
      {},
      {
        movement: {
          imgWrapper: {
            translation: { x: 10, y: 10, z: 30 },
            rotation: { x: 0, y: -10, z: 0 },
            reverseAnimation: { duration: 200, easing: 'easeOutQuad' }
          },
          caption: {
            rotation: { x: 0, y: 0, z: 2 },
            reverseAnimation: { duration: 200, easing: 'easeOutQuad' }
          }
        }
      },
      {
        movement: {
          imgWrapper: {
            translation: { x: 10, y: 10, z: 30 },
            rotation: { x: 0, y: -10, z: 0 },
            reverseAnimation: { duration: 900, easing: 'easeOutCubic' }
          },
          caption: {
            rotation: { x: 0, y: 0, z: 2 },
            reverseAnimation: { duration: 1200, easing: 'easeOutExpo' }
          }
        }
      },
      {
        movement: {
          imgWrapper: {
            translation: { x: 10, y: 10, z: 30 },
            rotation: { x: 0, y: -10, z: 0 },
            reverseAnimation: { duration: 50, easing: 'easeOutQuad' }
          },
          caption: {
            rotation: { x: 0, y: 0, z: 2 },
            reverseAnimation: { duration: 200, easing: 'easeOutQuad' }
          }
        }
      },
      {
        movement: {
          imgWrapper: {
            translation: { x: 10, y: 10, z: 30 },
            rotation: { x: 0, y: -10, z: 0 },
            reverseAnimation: { duration: 1200, easing: 'easeOutExpo' }
          },
          caption: {
            rotation: { x: 0, y: 0, z: 2 },
            reverseAnimation: { duration: 900, easing: 'easeOutExpo' }
          },
        }
      },
      {
        movement: {
          caption: {
            translation: { x: 10, y: 10, z: 30 },
            rotation: { x: 0, y: -10, z: 0 },
            reverseAnimation: { duration: 1500, easing: 'easeOutElastic', elasticity: 700 }
          }
        }
      },
      {
        movement: {
          imgWrapper: {
            translation: { x: 5, y: 5, z: 0 },
            reverseAnimation: { duration: 800, easing: 'easeOutQuart' }
          },
          caption: {
            rotation: { x: 0, y: 0, z: 2 },
            reverseAnimation: { duration: 1000, easing: 'easeOutQuart' }
          }
        }
      },
      {
        movement: {
          caption: {
            rotation: { x: 0, y: 0, z: 2 },
            reverseAnimation: { duration: 1000, easing: 'easeOutExpo' }
          }
        }
      }];

    function init() {
      var idx = 0;
      [].slice.call(document.querySelectorAll('.work__effect')).forEach(function (el, pos) {
        idx = pos % 2 === 0 ? idx + 1 : idx;
        new TiltFx(el, tiltSettings[idx - 1]);
      });
    };

    init();

  })();
})(window);


//slick
$(document).ready(function () {

  $('.testimonials').slick({
  swipe: true,
  autoplay: false,
  autoplaySpeed: 5000,
  infinite: false,
  mobileFirst: true,
  prevArrow: '.arrow--left',
  nextArrow: '.arrow--right',
  responsive: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4.1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

  $('.process__content').slick({
    swipe: true,
    infinite: false,
    arrows: false,
    mobileFirst: false,
    responsive: true,
    slidesToShow: 1,
    dots: false,
    responsive: [
      {
        breakpoint: 650,
        settings: {
        slidesToShow: 1,
         arrows: true
        }
      }
    ]
  });


  $('.case_slideshow').slick({
    swipe: true,
    infinite: false,
    mobileFirst: false,
    responsive: true,
    prevArrow: '.arrow--left',
    nextArrow: '.arrow--right',
    slidesToShow: 3,
    dots: true,
    responsive: [
      {
        breakpoint: 1440,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 1100,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

  
  $('#beta-features').slick({
    swipe: true,
    swipeToSlide: true,
    lazyLoad: 'progressive',
    autoplay: false,
    autoplaySpeed: 5000,
    infinite: false,
    mobileFirst: false,
    prevArrow: '.barrow--left',
    nextArrow: '.barrow--right',
    responsive: true,
    variableWidth: true, 
    slidesToScroll: 3,
    slidesToShow: 4.5,  
    speed: 600,
    cssEase: 'ease',
    easing: 'swing',
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3.5,
          slidesToScroll: 3
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2.5,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1.5,
          slidesToScroll: 1
        }
      }
    ]
  });
  


  //slide navigation
  $('li[data-slide]').click(function (e) {
    e.preventDefault();
    var slideno = $(this).data('slide');
    $('.process__content').slick('slickGoTo', slideno - 1);
  });

  $('li[data-slide=2]').click(function () {
    $('li[data-slide=2]').addClass('active');
    $('li[data-slide=1]').removeClass('active');
    $('li[data-slide=3]').removeClass('active');
    $('li[data-slide=4]').removeClass('active');
  });

  $('li[data-slide=1]').click(function () {
    $('li[data-slide=1]').addClass('active');
    $('li[data-slide=2]').removeClass('active');
    $('li[data-slide=3]').removeClass('active');
    $('li[data-slide=4]').removeClass('active');
  });

  $('li[data-slide=3]').click(function () {
    $('li[data-slide=3]').addClass('active');
    $('li[data-slide=2]').removeClass('active');
    $('li[data-slide=1]').removeClass('active');
    $('li[data-slide=4]').removeClass('active');
  });

  $('li[data-slide=4]').click(function () {
    $('li[data-slide=4]').addClass('active');
    $('li[data-slide=2]').removeClass('active');
    $('li[data-slide=1]').removeClass('active');
    $('li[data-slide=3]').removeClass('active');
  });
});


$('#navigation').on('click', function() {
  this.classList.toggle('active');
})



$('#navigation').on ('click', (function () {
  if ($('.nav__overlay').is(':visible')) {
    $('.nav__overlay').fadeOut(600);
    $('.ellipse').css('display', 'flex');
    $('#nt').text('Menu');
    $('#navigation').removeClass('esc');
    $('body').removeClass('lock-scroll');
  }
  else {
    $('.nav__overlay').fadeIn(600);
    $('#nt').text('Close');
    $('#navigation').addClass('esc');
    $('.ellipse').css('display', 'none');
    $('body').addClass('lock-scroll');
  }
}
));

//closing menu on esc
window.addEventListener('keydown', (event) => {
  if (event.code === 'Escape') {
    if ($('.nav__overlay').is(':visible')) {
      $('body').removeClass('lock-scroll');
      $('.nav__overlay').fadeOut(600);
      $('.ellipse').css('display', 'flex');
      $('#nt').text('Menu');
      $('nav a').removeClass('esc');
      $('#navigation').removeClass('active');
    }
  }
});

//opening menu on M
window.addEventListener('keydown', (event) => {
  if (event.code === 'KeyM') {
    if ($('.nav__overlay').is(':visible')) {

    }
    else {      
    $('.nav__overlay').fadeIn(600);
    $('#nt').text('Close');
    $('nav a').addClass('change');
    $('.ellipse').css('display', 'none');
    $('#navigation').addClass('esc');
    $('#navigation').addClass('active');
    $('body').addClass('lock-scroll');
  } 
}
});


//tabing removing outline on click
$('[tabindex]').focus(function () {
  $(this).css('outline', 'none');
});
$('[tabindex]').keyup(function (event) {
  if (event.keyCode == 9) {
    $(this).css('outline', '');
  }
});


// copy to clipboard
function copyToClipboard() {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val('David Jambor Kárníkova 1170 Nové Město na Moravě 592 31 Czech Republic IČO: 60675080 Data box: 56hfqnx').select();
  document.execCommand("copy");
  $temp.remove();
  $('#bill_copy').text('Copied!').fadeIn();

    setTimeout(function(){ 
      if ($('#bill_copy').text()==='Copied!') {
        $('#bill_copy').fadeIn().text('Copy to clipboard');
      }
    }, 3000); 
}


//progress bar
var PageScrollIndicator = PageScrollIndicator || {};

PageScrollIndicator.createProgressBar = function(progressBarLocation, contentToTrack) {
  
  // Create the container div
  var $progressContElement = $("<div id='progress-cont'></div>");

  // Create the progress bar itself
  var $progressBarElement = $("<div id='progress-bar'></div>");
  $progressBarElement.css("width", "0%");

  $progressContElement.append($progressBarElement);
  
  var $locationObject = $(progressBarLocation);
  $locationObject.prepend($progressContElement);

  // Event handler that updates the width of the progress bar based
  // on how far the contentToTrack elemt has been scrolled
  $(window).scroll(function(e){
    var pageHeight = $(window).height();
    var $container = $(contentToTrack);

    // Adjusted height
    var adjustedHeight = $container.innerHeight() - pageHeight;
    var progress = (($(window).scrollTop() / adjustedHeight) * 100);
    $progressBarElement.css("width", progress + "%");
  });
}

PageScrollIndicator.createProgressBar(".rf", "body");

//touchdevice detection

function isTouchDevice() {
  var prefixes = ' -webkit- -moz- -o- -ms- '.split(' ');
  var mq = function mq(query) {
      return window.matchMedia(query).matches;
  };
  if ('ontouchstart' in window || window.DocumentTouch && document instanceof DocumentTouch) {
      return true;
  }
  var query = ['(', prefixes.join('touch-enabled),('), 'heartz', ')'].join('');
  return mq(query);
}

if (isTouchDevice()) {
  $('body').addClass('touch-device');
}


//about-testimonials size reductions
var opinionsSize = $("#about__opinions").height();
var testimonialsSize = $(".testimonials").height();
var newSize = (opinionsSize - (testimonialsSize / 2.5 ));

$("#about__opinions").css("height", newSize + "px");


//accordion
  // $('.accordion > li:eq(0) a').addClass('active').next().slideDown();

  $('.accordion a').click(function(j) {
      var dropDown = $(this).closest('li').find('p');

      $(this).closest('.accordion').find('p').not(dropDown).slideUp();

      if ($(this).hasClass('active')) {
          $(this).removeClass('active');
      } else {
          $(this).closest('.accordion').find('a.active').removeClass('active');
          $(this).addClass('active');
      }
      dropDown.stop(false, true).slideToggle();
  });


  $(document).ready(function() {
    function isDuckDuckGoBrowser() {
        return navigator.userAgent.includes('Ddg/');
    }

    if (isDuckDuckGoBrowser()) {
        $('#surprise').show();
    }
});