/**
 * demo.js
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2018, Codrops
 * http://www.codrops.com
 */
{
    const mapNumber = (X,A,B,C,D) => (X-A)*(D-C)/(B-A)+C;
    // from http://www.quirksmode.org/js/events_properties.html#position
	const getMousePos = (e) => {
        let posx = 0;
        let posy = 0;
		if (!e) e = window.event;
		if (e.pageX || e.pageY) {
            posx = e.pageX;
			posy = e.pageY;
		}
		else if (e.clientX || e.clientY) 	{
			posx = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
			posy = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
		}
        return { x : posx, y : posy }
    }
    // Generate a random float.
    const getRandomFloat = (min, max) => (Math.random() * (max - min) + min).toFixed(2);

    class HoverImgFx12 {
        constructor(el) {
            this.DOM = {el: el};
            this.DOM.reveal = document.createElement('div');
            this.DOM.reveal.className = 'hover-reveal'; 
            this.totalDecos = 7;
            let inner = '';
            for (let i = 0; i <= this.totalDecos-1; ++i) {
                inner += '<div class="hover-reveal__deco"></div>';
            }
            inner += `<div class="hover-reveal__inner"><div class="hover-reveal__img" style="background-image:url(${this.DOM.el.dataset.img})"></div></div>`
            this.DOM.reveal.innerHTML = inner;
            this.DOM.el.appendChild(this.DOM.reveal);
            this.DOM.revealDecos = [...this.DOM.reveal.querySelectorAll('.hover-reveal__deco')];
            this.DOM.revealDecos.forEach((deco, pos) => {
                TweenMax.set(deco, {
                    width: pos === this.totalDecos-1 ? '100%' : `${getRandomFloat(40,100)}%`,
                    height: pos === this.totalDecos-1 ? '100%' : `${getRandomFloat(5,30)}%`,
                    x: pos === this.totalDecos-1 ? '0%' : `${getRandomFloat(-100,100)}%`,
                    y: pos === this.totalDecos-1 ? '0%' : `${getRandomFloat(-300,300)}%`,
                    scaleX: 0
                });
            });
            this.DOM.revealInner = this.DOM.reveal.querySelector('.hover-reveal__inner');
            this.DOM.revealInner.style.overflow = 'hidden';
            this.DOM.revealImg = this.DOM.revealInner.querySelector('.hover-reveal__img');

            this.initEvents();
        }
        initEvents() {
            this.positionElement = (ev) => {
                const mousePos = getMousePos(ev);
                const docScrolls = {
                    left : document.body.scrollLeft + document.documentElement.scrollLeft, 
                    top : document.body.scrollTop + document.documentElement.scrollTop
                };
                this.DOM.reveal.style.top = `${mousePos.y+20-docScrolls.top}px`;
                this.DOM.reveal.style.left = `${mousePos.x+20-docScrolls.left}px`;
            };
            this.mouseenterFn = (ev) => {
                this.positionElement(ev);
                this.showImage();
            };
            this.mousemoveFn = ev => requestAnimationFrame(() => {
                this.positionElement(ev);
            });
            this.mouseleaveFn = () => {
                this.hideImage();
            };
            
            this.DOM.el.addEventListener('mouseenter', this.mouseenterFn);
            this.DOM.el.addEventListener('mousemove', this.mousemoveFn);
            this.DOM.el.addEventListener('mouseleave', this.mouseleaveFn);
        }
        showImage() {
            TweenMax.killTweensOf(this.DOM.revealInner);
            TweenMax.killTweensOf(this.DOM.revealImg);
            TweenMax.killTweensOf(this.DOM.revealDecos);

            this.tl = new TimelineMax({
                onStart: () => {
                    this.DOM.reveal.style.opacity = 1;
                    TweenMax.set(this.DOM.el, {zIndex: 1000});
                }
            })
            .add('begin')
            .set(this.DOM.revealInner, {x: '100%', opacity: 0})
            .set(this.DOM.revealDecos, {transformOrigin: '100% 50%'})
            .staggerTo(this.DOM.revealDecos, 0.3, {
                ease: Expo.easeInOut,
                scaleX: 1
            }, 0.06, 'begin')
            .staggerTo(this.DOM.revealDecos, getRandomFloat(0.3,0.6), {
                ease: Expo.easeOut,
                startAt: {transformOrigin: '0% 50%'},
                scaleX: 0,
                x: '-=5%'
            }, 0.04, 'begin+=0.3')
            .add(new TweenMax(this.DOM.revealInner, 0.3, {
                ease: Expo.easeOut,
                startAt: {x: '100%'},
                x: '0%',
                opacity: 1
            }), 'begin+=0.3')
            .add(new TweenMax(this.DOM.revealImg, 0.3, {
                ease: Expo.easeOut,
                startAt: {x: '-100%'},
                x: '0%'
            }), 'begin+=0.3');
        }
        hideImage() {
            TweenMax.killTweensOf(this.DOM.revealInner);
            TweenMax.killTweensOf(this.DOM.revealImg);
            TweenMax.killTweensOf(this.DOM.revealDecos);

            this.tl = new TimelineMax({
                onStart: () => {
                    TweenMax.set(this.DOM.el, {zIndex: 999});
                },
                onComplete: () => {
                    TweenMax.set(this.DOM.el, {zIndex: ''});
                    TweenMax.set(this.DOM.reveal, {opacity: 0});
                }
            })
            .add('begin')
            .add(new TweenMax(this.DOM.revealInner, 0.1, {
                ease: Sine.easeOut,
                x: '-100%'
            }), 'begin')
            .add(new TweenMax(this.DOM.revealImg, 0.1, {
                ease: Sine.easeOut,
                x: '100%'
            }), 'begin')
        }
    }


 

    [...document.querySelectorAll('[data-fx="12"] > a, a[data-fx="12"]')].forEach(link => new HoverImgFx12(link));
}
