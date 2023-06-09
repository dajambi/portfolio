<!DOCTYPE html>
<?php include '_partials/spy.php'; ?>
<html lang="en" dir="ltr" prefix="og: http://ogp.me/ns#">
<!--[if IE]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<![endif]-->

<head>
    <?php include '_partials/loading.php'; ?>
    <?php include '_partials/meta-links.php'; ?>

    <meta name="description"
        content="About me - 🤘I am Digital Product (UI/UX/IxD) designer with a passion for functional design and with one rule in mind - Design is everything.">
    <meta name="keywords"
        content="ux designer,ux design,ux, user interface design, ui design, ux research,ui ix designer, interaction designer, user experience, mobile app design">
    <title>About me - David Jambor - Digital product (UI/UX/IxD) designer 🤘</title>

</head>

<?php include '_partials/tag-manager.php'; ?>


<body class="custom_cursor">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5C8Z76X" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include '_partials/loading_overlay.php'; ?>

    <div class="cursor cursor--small"></div>
    <canvas class="cursor cursor--canvas" resize></canvas>

    <header class="home about">
        <div class="ellipse"></div>
        <div class="container">
            <div class="logo">
                <a href="https://www.davidjambor.cz"><img src="./img/logo.svg"
                        alt="Digital product (UI/UX/Ix) designer"></a>
            </div>

            <div class="welcome--sub">
                <a href="/" class="link">Home</a>
                <span>About me</span>
            </div>


            <?php include '_partials/menu-icon.php'; ?>
            <?php include '_partials/navigation.php'; ?>

            <div id="header_text--about">
                <h1><span class="highlight_blue">Hello,</span> <br>beautiful people, pleasure to see you here</h1>
                <p>My name is David and I'm a Senior product designer currently living in Czechia. During the last ten
                    years I've worked as the Graphic, Web designer, UX/UI and Product designer for startups, corporates and also as
                    the freelancer for my own clients.</p>
                <div class="ab_stats">
                    <ul>
                        <li>10+ <span>Years in design</span></li>
                        <li>200+ <span>Projects</span></li>
                        <li>30+ <span>Own clients</span></li>
                        <li>5+ <span>Years in remote</span></li>
                    </ul>
                </div>
                <!-- <div class="ghost__button2">
                    <a href="https://www.davidjambor.cz/assets/david_jambor_cv.pdf" target="_blank"
                        rel="noopener noreferrer" class="link">Download CV</a>
                </div> -->
            </div>


            <div id="face--about"></div>

            <div id="social_text">Follow me</div>
            <div id="line"></div>
            <div id="social_icons">
                <ul>
                    <li><a rel="nofollow" target="_blank" href="https://www.behance.net/jambi" class="link">
                            <svg width="14px" height="9px" viewBox="0 0 14 9" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g class="icon" id="Artboard" transform="translate(-175.000000, -102.000000)">
                                        <path
                                            d="M180.437487,106.054699 C180.937486,106.195324 181.316391,106.449229 181.574203,106.816416 C181.832015,107.183603 181.960921,107.63282 181.960921,108.164069 C181.960921,108.960942 181.656234,109.570316 181.046861,109.99219 C180.531237,110.382814 179.859363,110.578126 179.03124,110.578126 L175,110.578126 L175,102.257833 L178.914053,102.257833 C179.726551,102.257833 180.35155,102.398458 180.789049,102.679707 C181.304672,103.007832 181.562484,103.562518 181.562484,104.343766 C181.562484,105.125014 181.187485,105.695325 180.437487,106.054699 Z M176.828121,103.687517 L176.828121,105.632825 L178.679679,105.632825 C179.023428,105.632825 179.292959,105.550794 179.488271,105.386732 C179.683582,105.22267 179.781239,104.968764 179.781239,104.625015 C179.781239,104.000017 179.367177,103.687517 178.539054,103.687517 L176.828121,103.687517 Z M178.773429,109.171879 C179.679676,109.171879 180.1328,108.804693 180.1328,108.070319 C180.1328,107.273446 179.695301,106.87501 178.820303,106.87501 L176.828121,106.87501 L176.828121,109.171879 L178.773429,109.171879 Z M183.812479,103.523455 L183.812479,102.703145 L187.187471,102.703145 L187.187471,103.523455 L183.812479,103.523455 Z M188.499968,107.648445 L188.47653,107.953132 L184.140603,107.953132 C184.140603,108.453131 184.269509,108.835943 184.527321,109.101567 C184.785133,109.367191 185.148413,109.500004 185.617162,109.500004 C185.898412,109.500004 186.167942,109.429691 186.425754,109.289067 C186.683566,109.148442 186.851534,108.95313 186.929659,108.70313 L188.382781,108.70313 C187.945282,110.046877 187.007784,110.718751 185.570287,110.718751 C184.63279,110.718751 183.886698,110.429689 183.332011,109.851565 C182.777325,109.273441 182.499982,108.515631 182.499982,107.578133 C182.499982,106.984385 182.628888,106.445323 182.8867,105.96095 C183.144512,105.476576 183.507792,105.093764 183.976541,104.812515 C184.44529,104.531265 184.976539,104.390641 185.570287,104.390641 C186.476535,104.390641 187.203096,104.710953 187.74997,105.351576 C188.249968,105.96095 188.499968,106.726573 188.499968,107.648445 Z M184.140603,106.921885 L186.835909,106.921885 C186.804659,106.515636 186.67966,106.19923 186.46091,105.972668 C186.242161,105.746106 185.933568,105.632825 185.535131,105.632825 C185.136695,105.632825 184.812477,105.750013 184.562477,105.984387 C184.312478,106.218761 184.171853,106.531261 184.140603,106.921885 Z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </a></li>

                    <li><a rel="nofollow" target="_blank" href="https://dribbble.com/jambi" class="link">
                            <svg width="14px" height="15px" viewBox="0 0 12 13" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g class="icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-328.000000, -32.000000)">
                                        <path
                                            d="M333.999986,32.6875246 C335.046858,32.6875246 336.015606,32.9492428 336.906229,33.472679 C337.796852,33.9961151 338.503881,34.7031448 339.027317,35.5937677 C339.550754,36.4843905 339.812472,37.4531381 339.812472,38.5000107 C339.812472,39.5468834 339.550754,40.5156309 339.027317,41.4062538 C338.503881,42.2968767 337.796852,43.0039064 336.906229,43.5273425 C336.015606,44.0507786 335.046858,44.3124969 333.999986,44.3124969 C332.953113,44.3124969 331.984366,44.0507786 331.093743,43.5273425 C330.20312,43.0039064 329.49609,42.2968767 328.972654,41.4062538 C328.449218,40.5156309 328.1875,39.5468834 328.1875,38.5000107 C328.1875,37.4531381 328.449218,36.4843905 328.972654,35.5937677 C329.49609,34.7031448 330.20312,33.9961151 331.093743,33.472679 C331.984366,32.9492428 332.953113,32.6875246 333.999986,32.6875246 Z M337.843727,35.3593932 C337.671852,35.5937677 337.429665,35.8437672 337.117166,36.1093914 C336.523417,36.6093901 335.843731,37.0156394 335.078108,37.3281385 C335.218733,37.6406377 335.359357,37.9687619 335.499982,38.3125112 C336.203105,38.2187614 336.968729,38.210949 337.796852,38.2890737 C338.234351,38.3359486 338.624975,38.3906359 338.968724,38.4531358 C338.953099,37.8750121 338.851537,37.3242322 338.664037,36.800796 C338.476538,36.2773599 338.203101,35.7968923 337.843727,35.3593932 Z M337.281228,34.7968946 C336.671854,34.250021 335.976543,33.8789279 335.195295,33.683616 C334.414047,33.488304 333.624987,33.4843977 332.828113,33.6718972 C333.499987,34.5625201 334.117173,35.5312677 334.679672,36.5781403 C335.42967,36.3125161 336.078106,35.9531417 336.624979,35.5000179 C336.921854,35.2500184 337.140603,35.0156439 337.281228,34.7968946 Z M331.890616,34.0234589 C331.187492,34.3515831 330.593744,34.820332 330.10937,35.4297055 C329.624996,36.0390791 329.304685,36.7265773 329.148435,37.4922006 C329.570309,37.4922006 330.070307,37.4687632 330.648435,37.4218883 C331.726554,37.3281385 332.749989,37.1484513 333.718736,36.8828271 C333.156238,35.8672046 332.546864,34.9140818 331.890616,34.0234589 Z M329.031248,38.5000107 C329.031248,39.1250094 329.144528,39.7226642 329.37109,40.2929752 C329.597653,40.8632862 329.914058,41.375004 330.320307,41.8281278 C330.742181,41.0937547 331.320305,40.4296935 332.054678,39.835945 C332.851551,39.1796966 333.679674,38.7343852 334.539047,38.5000107 C334.429672,38.2187614 334.29686,37.9375121 334.14061,37.6562627 C333.093738,37.9687619 331.960928,38.1796989 330.742181,38.2890737 C330.085933,38.3359486 329.515622,38.3593861 329.031248,38.3593861 L329.031248,38.5000107 Z M330.953118,42.4140639 C331.671866,42.9921876 332.480458,43.3320306 333.378893,43.4335927 C334.277329,43.5351549 335.132795,43.4140616 335.945294,43.0703123 C335.742169,41.8671903 335.390607,40.6171931 334.890609,39.3203213 C333.937486,39.6328204 333.093738,40.1015693 332.359365,40.7265679 C331.703116,41.2734415 331.234367,41.8359402 330.953118,42.4140639 Z M336.765604,42.6250009 C337.328103,42.2500018 337.796852,41.7734405 338.171851,41.1953168 C338.54685,40.6171931 338.789037,39.9843821 338.898412,39.2968838 C338.617162,39.2031341 338.273413,39.1328217 337.867164,39.0859468 C337.148416,38.976572 336.460917,38.976572 335.804669,39.0859468 C336.257793,40.3359437 336.578105,41.5156287 336.765604,42.6250009 Z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </a></li>

                    <li><a rel="nofollow" target="_blank" href="https://www.linkedin.com/in/david-jambor/" class="link">
                            <svg width="12px" height="12px" viewBox="0 0 12 12" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g class="icon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-322.000000, -100.000000)">
                                        <path
                                            d="M324.678571,112 L322.1875,112 L322.1875,103.991071 L324.678571,103.991071 L324.678571,112 Z M323.446429,102.892857 C323.053571,102.892857 322.714286,102.75 322.428571,102.464286 C322.142857,102.178571 322,101.839286 322,101.446429 C322,101.053571 322.142857,100.714286 322.428571,100.428571 C322.714286,100.142857 323.053571,100 323.446429,100 C323.839286,100 324.178571,100.142857 324.464286,100.428571 C324.75,100.714286 324.892857,101.053571 324.892857,101.446429 C324.892857,101.839286 324.75,102.178571 324.464286,102.464286 C324.178571,102.75 323.839286,102.892857 323.446429,102.892857 Z M334,112 L331.508929,112 L331.508929,108.089286 C331.508929,107.446429 331.455357,106.982143 331.348214,106.696429 C331.151786,106.214286 330.767857,105.973214 330.196429,105.973214 C329.625,105.973214 329.223214,106.1875 328.991071,106.616071 C328.8125,106.9375 328.723214,107.410714 328.723214,108.035714 L328.723214,112 L326.258929,112 L326.258929,103.991071 L328.642857,103.991071 L328.642857,105.089286 L328.669643,105.089286 C328.848214,104.732143 329.133928,104.4375 329.526786,104.205357 C329.955357,103.919643 330.455357,103.776786 331.026786,103.776786 C332.1875,103.776786 333,104.142857 333.464286,104.875 C333.821428,105.464286 334,106.375 334,107.607143 L334,112 Z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </a></li>
                </ul>
            </div>
            <div id="step__decoration"></div>

        </div>
    </header>

    <main>
        <section id="about__journey">
            <div class="about--wrapper">
                <div class="journey">
                    <div class="steps--left">
                        <div class="cont_sticky">
                            <h1>Steps that takes me to product design</h1>
                            <div>3 min read</div>
                            <div><img srcset="img/steps--big@1x.png 1x, img/steps--big@2x.png 2x" width="459px"
                                    height="435px" alt="Design journey steps"></div>
                        </div>
                    </div>
                    <div class="steps--right">
                        <p>Design is something I have always loved and been passionate about. One and a half decades ago, I was lucky enough to install Photoshop and design my first website, which consisted of one paragraph and three buttons 👏. This marked the beginning of my design journey.</p>

                        <p>As a teenager, I designed and coded a <a data-img="img/about/bside.png" data-fx="12">gaming portal</a> for myself and my gaming companions. My passion for design led me to my first clients, which gave me the <a data-img="img/about/freedom.gif" data-fx="12">freedom.</a> to pursue it further. </p>

                        <p> While in university, I realized how I could combine design with business and project management, and so, I started a new journey as a freelancer. Over the course of five years, I designed over a 
                             <a data-img="img/about/webs.jpg"
                                data-fx="12">websites</a>, dozens of logos, <a data-img="img/about/posters.jpg"
                                data-fx="12">posters</a>, <a data-img="img/about/billboards.jpg"
                                data-fx="12">billboards</a>
                            , car wraps, book covers, email campaigns, and business cards.
                            Whenever a client requested something I didn't know how to do, I did my best to learn and deliver it. Almost everything I learned, I learned on the go and mostly by myself. It was a great adventure with many mistakes, but I learned a lot from it.
                            This experience I used when my mother started her business. I helped her to design a
                            customer experience, not just a marketing web. This was something I really liked because it
                            wasn't temporary and it had high value. Therefore after college, I jump into UX and started
                            designing apps and information systems, which I studied by the way. It all came together.
                        </p>

                        <p>I've been fortunate to design complex SaaS applications for IT Experts in SolarWinds. As a
                            member of the MSP design team. The majority of the time I worked on a multi-tenant
                            Helpdesk system with great teams from Poland, Edinburgh, Ottawa and a founder from Austin. I
                            ship projects like Task list, Task timer, Ticket automation, Knowledge base system,
                            new dashboards system known aka Workspaces and designed the majority of widgets. I designed
                            also
                            some experimental features we developed during the hackathons. Also, I've been working on
                            MSP
                            Backup as the second designer where I helped design the new recovery and reporting system.
                            Meanwhile, I collaborated on a new design system with other designers where I specified
                            components, behaviors and guidelines for Tables, Color picker, Timer, Favicons, Cards,
                            Motion, Empty states, Email templates and more.
                        </p>
                        <p>After that, I joined the great Czech travel startup Kiwi.com where I lead the design of the
                            internal Helpdesk application. I helped to transform the support experience from absolute
                            chaos during the Covid pandemic in 2020 to proactive and reliable service. I constantly
                            delivered work for more than six product managers and designed features that handle the
                            initial booking process, multi-language chat between support team and customer.
                            Together with tribe leads, I came up with new vision so now we are striving to develop a
                            single platform that will digitize all internal processes and services.

                        </p>
                        <p>Working independently I've been lucky to collaborate with great companies and individuals. I
                            worked with one of the biggest czech company Gordic.cz, who delivers the IT system,
                            on their new web and I also designed a Gordic support portal that fits their new web
                            ecosystem.
                            I designed and developed a well-known climbing portal in the Czech republic — emontana.cz
                            with a reach of
                            over 10k visitors per month. For ntsup.cz I redesigned the branding and offline campaigns
                            that
                            were promoted all over the Czechia.
                        </p>
                        <p>Today, I spend almost all my free time building my own startup for online mentoring
                            mentedy.cz. It is rewarding, terrifying, and exhausting - usually everything at once. But
                            it's an invaluable experience when you have to design everything, care about product
                            management, think
                            about human resources, finances, negotiate with potential investors.</p>
                    </div>
                </div>

            </div>

            </div>
        </section>

        <section id="about__principles">
            <div class="principles__graphic">
                <div class="about--wrapper">
                    <h1>
                        <span class="highlight_blue">My</span> missions <br>& principles ↘
                    </h1>
                    <div class="expectations">
                        <div class="expec--left">
                            <h2>Two bold missions</h2>
                        </div>
                        <div class="expec--right">
                            <p><sup>1</sup> It all starts with the people and their skills — this is a mantra of
                                my startup
                                <a href="https://mentedy.com" target="_blank"
                                    class="link odkaz anim-middleout">Mentedy.com.</a>
                                that helps companies to manage skills and help employees grow through → internal and
                                external mentoring.
                            </p>
                            <p><sup>2</sup> Designing and transforming Sales analytics into simple and actionable stories in 
                            <a href="https://www.outreach.io/" target="_blank" class="link odkaz anim-middleout">Outreach.io</a></p>
                        </div>
                    </div>
                    <div class="expectations">
                        <div class="expec--left">
                            <h2>My five principles</h2>
                        </div>
                        <div class="expec--right">
                            <ul class="accordion">
                                <li>
                                    <a><span><sup>1</sup></span>Design is everything</a>
                                    <p>Design is everything - and it is true. Design goes beyond nice pixels and aesthetics. It's about how every element of a product or service works together to create a seamless and enjoyable experience for the customer. From service to support, sales to marketing, every touchpoint must be carefully crafted to ensure a cohesive and engaging user journey. In today's highly competitive market, good design is no longer optional. It's what sets apart successful products and services and drives long-term success. However, good design is not just about the big picture.</p>
                                    
                                    <p>It's also about the details - the little things that may go unnoticed but can make a significant difference in the overall experience. Without attention to detail, even the best-designed product or service may fall short of its potential. Therefore, it's crucial to give design and customer experience a central place in your company's structure if you want to create a standout product that resonates with your customers.</p>
                                </li>
                                <li>
                                    <a><span><sup>2</sup></span> There is no substitute of hard work</a>
                                    <p>Everything I've achieved in sport, school, job or life was thanks to hard work,
                                        endurance and a positive approach and it didn't happen over the night. I like a
                                        famous quote from Arnold Schwarzenegger „If you don't find the time, if you
                                        don't do the work, you don't get the results." — this streams through my veins
                                        and I believe
                                        that it is reflected in my work.</p>
                                </li>
                                <li>
                                    <a><span><sup>3</sup></span>Never stop evolving</a>
                                    <p>The feedback is the best thing you can get even though it is hard to accept it
                                        sometimes. But it is the only way how to move forward. Basically it is a simple
                                        formula — pain + reflection + open mind = progress. The same way works the
                                        design process and the same way I use this principle for my personal
                                        development.</p>
                                </li>
                                <li>
                                    <a><span><sup>4</sup></span>Honesty and open communication</a>
                                    <p>I really do respect people and I believe in open communication culture. I did a
                                        few mistakes in the past when I was quiet and followed the crowd, but I will not
                                        repeat it. So now when I don't like something I say it, when I see space for
                                        improvements I say it even if you will be the highest-paid person in the room.
                                    </p>
                                </li>
                                <li>
                                    <a><span><sup>5</sup></span>It has to be diverse and fun</a>
                                    <p>I love working in a startup mode. The mode where people are doing their best, where everyone goes far beyond their own responsibilities, and when you can grab the beer and enjoy a nice moment with the team. I am enjoying very diverse projects. The projects where I can collaborate or handle the research, design, validation, motion, or help with the design system and principles. Thanks to my side project I also found a passion in front-end, product/project management, and go-to-market activities.</p>
                                </li>
                                <ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about__expectations">
            <div class="about--wrapper">
                <div class="skills">
                    <h1>What I can help you with <br> + what you can expect</h1>
                    <ul>
                        <li>
                            <figure class="work__image">
                                <img src="img/user_research.svg" alt="Research">
                            </figure>
                            <figcaption class="work__info">
                                <p>Research</p>
                            </figcaption>
                        </li>

                        <li>
                            <figure class="work__image">
                                <img srcset="img/ux/ui.svg" alt="UX / UI">
                            </figure>
                            <figcaption class="work__info">
                                <p>UX / UI</p>
                            </figcaption>
                        </li>

                        <li>
                            <figure class="work__image">
                                <img src="img/motion.svg" alt="Motion">
                            </figure>
                            <figcaption class="work__info">
                                <p>Motion</p>
                            </figcaption>
                        </li>

                        <li>
                            <figure class="work__image">
                                <img src="img/prototyping.svg" alt="Prototyping">
                            </figure>
                            <figcaption class="work__info">
                                <p>Prototyping <br>& validation</p>
                            </figcaption>
                        </li>

                        <li>
                            <figure class="work__image">
                                <img src="img/landing_page.svg" alt="Landing pages">
                            </figure>
                            <figcaption class="work__info">
                                <p>Product & <br> landing pages</p>
                            </figcaption>
                        </li>

                        <li>
                            <figure class="work__image">
                                <img src="img/design_system.svg" alt="Design system">
                            </figure>
                            <figcaption class="work__info">
                                <p>Design <br> system</p>
                            </figcaption>
                        </li>

                        <li>
                            <figure class="work__image">
                                <img src="img/concept.svg" alt="Vision concepts">
                            </figure>
                            <figcaption class="work__info">
                                <p>Vision <br> concepts</p>
                            </figcaption>
                        </li>

                    </ul>
                </div>

                <div class="expectations">
                    <div class="expec--left">
                        <h2>Awareness of technology<br> and its limitation</h2>
                    </div>
                    <div class="expec--right">
                        <p>Back-end and Front-end are not strange words for me. I used to code the websites. Also, I
                            have fundamental knowledge about relational databases and data warehouses & security
                            problems. Now I am building my own web app (running on .Net / Angular) where I am helping
                            with Front-end too. Therefore you can expect that <strong>the design will respect the
                                current technical possibilities.</strong></p>
                    </div>
                </div>

                <div class="expectations">
                    <div class="expec--left">
                        <h2>Business thinking</h2>
                    </div>
                    <div class="expec--right">
                        <p>It is OK to start building digital products or services without a financial plan. But if you
                            don't care about the sustainable business model and recurring cashflow then your <a
                                data-img="img/about/out_money.gif" data-fx="12">runway </a> will
                            end up very quickly 🔥. I know it from my own experience. <strong>Therefore you can expect
                                that I will be designing with the value proposition, business model and your <span
                                    class="abbr" data-tooltip="Pirate metrics">AAARRR </span>in mind.</strong>
                        </p>
                    </div>
                </div>

                <div class="expectations">
                    <div class="expec--left">
                        <h2>Dealing with complexity</h2>
                    </div>
                    <div class="expec--right">
                        <p>Since the beginning, I've designed solutions for quite complex use cases and for data-heavy
                            applications. It happened to me many times that I've been in not-easy situations where I had
                            to deal with changes in the design team, in the project, or in the business. With these
                            experiences in mind, I believe that <strong>I can quickly understand the situation and
                                respectively react to help to overcome any obstacle.</strong></p>
                    </div>
                </div>

                <div class="expectations">
                    <div class="expec--left">
                        <h2>Solid design process</h2>
                    </div>
                    <div class="expec--right">
                        <p>Sometimes a situation requires jumping in the solution space and deliver, but most of the
                            time is good to spend 80 % of the time with discovery. Find your why, research the need of
                            your target audience, test the prototype, and see how successfully the hypothesizes were.
                            Yes, this process might take a longer time, but in the long term, it is much cheaper, less
                            risky and it will move us towards the goal.</p>
                    </div>
                </div>
            </div>

            </div>
        </section>

        <section id="about__opinions">
            <div class="opinions__graphic">
                <div class="about--wrapper">
                    <h1>Work <span class="highlight_blue">attitude</span><br> & references</h1>
                    <p class="opinions__intro">
                        I feel fortunate to have transformed my passion for digital product design and development into a fulfilling career that positively impacts people's lives. For me, it's more than just a job; it's a personal interest and hobby that drives me to strive for excellence in every project I undertake. My dedication&nbsp;<span class="blues">+</span>&nbsp;commitment to achieving exceptional outcomes stem from my passion for the craft, rather than a sense of obligation. I believe that my genuine enthusiasm and unwavering focus on delivering quality results are what have earned me recognition and appreciation from my peers and clients alike.
                    </p>
                    <div id="design_for">I designed <br> <span>for</span></div>
                    <div class="about-logos">
                        <a href="https://www.outreach.io/" target="_blank"><img src="./img/references/outreach.svg"
                                alt="Outreach.io" loading="lazy"></a>
                        <a href="https://www.kiwi.com/" target="_blank"><img src="./img/references/kiwi.svg"
                                alt="kiwi.com" loading="lazy"></a>
                        <a href="https://www.solarwinds.com/" target="_blank"><img src="./img/references/solarwinds.svg"
                                alt="solarwinds" loading="lazy"></a>
                        <a href="https://www.gordic.cz/" target="_blank"><img src="./img/references/gordic_new.svg"
                                alt="gordic" loading="lazy"></a>
                        <a href="https://www.ntsup.eu/" target="_blank"><img src="./img/references/ntsup.svg"
                                alt="ntsup" loading="lazy"></a>
                        <a href="https://www.ntsup.eu/" target="_blank"><img src="./img/references/smartest.svg"
                                alt="smartest" loading="lazy"></a>
                        <a href="https://www.emontana.cz/" target="_blank"><img src="./img/references/emontana.svg"
                                alt="emontana" loading="lazy"></a>
                        <a href="http://www.techsophia.cz/" target="_blank"><img src="./img/references/techsophia.png"
                                alt="Techsophia" width="128px" loading="lazy"></a>
                    </div>
                </div>
                <?php include '_partials/testimonials.php'; ?>
            </div>
        </section>


        <!-- <section id="about__writings">
            <div class="about--wrapper">
                <h1>Writings + <br> other thoughts.</h1>
                <div id="articles">
                    <article>
                        <div class="article__topic">Building the startup · story NO—1</div>
                        <h3>From zero to hero</h3>
                        <p>Life is a journey of and sooner or later you as a designer will look for other life challenge.
                            What can be more challenging then trying to build your own startup? I got this chance and I
                            will tell you what this is like.</p>
                        <div class="article__detail">12 Dec 2020 · 10 min read</div>
                    </article>
                    <article>
                        <div class="article__topic">Building the startup · story NO—2</div>
                        <h3>The mistake that cost $600k</h3>
                        <p>Do you know that feeling when you want to do something, but you keep repeating to yourself,
                            that this is not the right time? That you will do it once you are ready? Do it now you lazy
                            pussy!</p>
                        <div class="article__detail">12 Dec 2020 · 10 min read</div>
                    </article>
                    <article>
                        <div class="article__topic">Building the startup · story NO—3</div>
                        <h3>Ouu shit, what now?</h3>
                        <p>Changing the business directions is hard, costly and risky decision. But as the designer you
                            have so huge power in your hand so you can get your first customer within a months without
                            any budget.</p>
                        <div class="article__detail">12 Dec 2020 · 10 min read</div>
                    </article>
                </div>
            </div>
        </section> -->

        <section id="about__hobbies">
            <div class="about--wrapper">
                <h1>Where do I get <br> my energy <br> and inspiration?</h1>
                <div class="hobbies__detail">
                    <article>
                        <figure class="ar--first">
                            <img srcset="img/mt_blanc.png 1x" alt="Mont Blanc" width="400px" height="430px"
                                loading="lazy">
                            <h2>Adventures & Traveling</h2>
                        </figure>
                        <figcaption>
                            <p>Mont Blanc · 2018</p>
                        </figcaption>
                        <p>The adventures, adrenalin sports, and traveling are the activities that help me enjoy my l
                            life and where I get the energy from. I am happy when I can spend time in nature, feel sea
                            salt in my hair, and watch the sunset falling behind ocean horizons. The best moments of my
                            life haven't happened in front of the monitor. It happened when I went beyond the comfort
                            zone, conquer the mountains, and enjoy a well-deserved view together with my adventure
                            companion. I found out that people regret things that they didn't do, not things that
                            they've done. I think it is true - therefore I like saying yes to new challenges.</p>
                    </article>
                    <article>
                        <figure class="ar--first ar--second">
                            <img srcset="img/bike.png 1x" alt="Motorbike trip" width="400px" height="430px"
                                loading="lazy">
                            <h2>Family & Friends</h2>
                        </figure>
                        <figcaption>
                            <p>One of many trips · 2016</p>
                        </figcaption>
                        <p>Life without family, supportive friends, and great colleagues would be too sad. In the
                            past, I spent a lot of time alone, because I wanted to finish work for my clients or
                            deliver new features sooner. Now I realize how important work-life balance is. I say NO to
                            side projects unless it is something special and I prefer spending my time with my family,
                            friends or by learning something new. It is always worth it. That free time has a much
                            bigger value to me now.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="about__prefooter">
            <div class="about--wrapper">
                <h4>What next?</h4>
                <a href="/work">See my work<span> </span></a>
                <a href="/contact">Let's get in touch<span> </span></a>
            </div>
        </section>
    </main>

    <?php include '_partials/footer.php'; ?>
    <?php include '_partials/footer-links.php'; ?>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/hoverEffect.js"></script>
</body>

</html>