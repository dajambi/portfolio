<?php session_start(); ?>
<!DOCTYPE html>
<?php include('_partials/spy.php') ?>
<html lang="en" dir="ltr" prefix="og: http://ogp.me/ns#">
<!--[if IE]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<![endif]-->

<head>
    <?php include('_partials/loading.php') ?>
    <?php include('_partials/meta-links.php') ?>

    <meta name="description"
        content="🤘I am Digital Product (UI/UX/IxD) designer with a passion for function design and with one rule in mind - Design is everything.">
    <meta name="keywords"
        content="ux designer,ux design,ux, user interface design, ui design, ux research,ui ix designer, interaction designer, user experience, mobile app design">
    <title>David Jambor - Portfolio - Digital product (UI/UX/IxD) designer 🤘</title>

</head>

<?php include('_partials/tag-manager.php') ?>

<body class="custom_cursor">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5C8Z76X" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include('_partials/loading_overlay.php') ?>

    <div class="cursor cursor--small"></div>
    <canvas class="cursor cursor--canvas" resize></canvas>

    <header class="home">
        <div class="container">
            <div class="logo">
                <a href="https://www.davidjambor.cz"><img src="./img/logo.svg"
                        alt="Digital product (UI/UX/Ix) designer"></a>
            </div>

            <div class="welcome">Welcome</div>


            <?php include('_partials/menu-icon.php')?>
            <?php include('_partials/navigation.php')?>

            <div id="face">
                <div id="abstract"></div>
            </div>

            <div id="header_text">
                <h1>I transfer ideas into real <span class="highlight_blue">digital products.</span></h1>
                <p>Hello, I’m David, <strong>product designer</strong> with a passion for function
                    design and with one rule in mind - <strong>Design is&nbsp;everything.</strong> Currently designing
                    Sales analytics and reporting features at Outreach.io and building my startup Mentedy.com</p>

                <div id="clients">
                    <div id="design_for">I designed <br> <span>for</span></div>
                    <div id="logos">
                        <img src="./img/references/outreach.svg" alt="Outreach.io" loading="lazy">
                        <img src="./img/references/kiwi.svg" alt="kiwi.com" loading="lazy">
                        <img src="./img/references/solarwinds.svg" alt="solarwinds" loading="lazy" class="SolLogo">
                        <img src="./img/references/gordic_new.svg" alt="gordic" loading="lazy">
                        <img src="./img/references/ntsup.svg" alt="ntsup" loading="lazy">
                        <img src="./img/references/emontana.svg" alt="emontana" loading="lazy">
                    </div>
                </div>
            </div>

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

            <div id="see">See more</div>
            <div id="line--scroll"></div>
        </div>
    </header>

    <main id="home">
        <div id="black">
            <section id="container__work--black">
                <div id="project-text">
                    <h1>Chosen <span class="highlight_blue">project</span></h1>
                    <p>Since 2012 I’ve had privileges and opportunities to design for entrepreneurs, startups, and for SaaS
                        companies with a global reach. By using data, design frameworks and by applying design
                        principles I'm able to rapidly deliver an impactful solution, not just pixels, for web or
                        mobile app. The goal is to solve the business problem, met users' needs, satisfy KPIs, and hit
                        the market niche. Do you like this approach? <span>
                            <a href="#hs-chat-open"
                                class="link odkaz anim-middleout">Let’s&nbsp;design&nbsp;next big thing&nbsp;together.</a>
                    </p>
                </div>

                <div class="work__effect work__job1">
                    <div class="work">
                        <a href="/helpdesk">
                            <figure class="work__image">
                                <img srcset="img/work/kiwi_helpdesk@1x.png 1x, img/work/kiwi_helpdesk@2x.png 2x"
                                    alt="Customer support platform" >
                                <div class="work__overlay">
                                    <div class="overlay__text">
                                        <span class="link odkaz">View case study</span>
                                    </div>
                                    <div class="overlay__meta">
                                        <h4>Product design</h4>
                                        <div>CloudApp · B2C · 2021
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <figcaption class="work__info">
                                <img src="./img/references/kiwi.svg" width="60" alt="Kiwi.com">
                                <h3>Designing customer support platform during travel crisis</h3>
                                <p>See how we've designed and built the in-house language-agnostic helpdesk platform in a few weeks and how it has helped Kiwi.com survive the travel crisis.</p>
                            </figcaption>
                        </a>
                    </div>
                </div>

                <div class="work__effect work__job2">
                    <div class="work">
                        <a href="/backup-reporting">
                            <figure class="work__image">
                                <img srcset="img/work/backup_reporting@1x.png 1x, img/work/backup_reporting@2x.png 2x"
                                    alt="Backup reporting" >
                                <div class="work__overlay">
                                    <div class="overlay__text">
                                        <span class="link odkaz">View case study</span>
                                    </div>
                                    <div class="overlay__meta">
                                        <h4>Product design</h4>
                                        <div>CloudApp · B2B · 2019
                                            <span class="protected"><img src="./img/lock.svg" alt="Lock icon">Password
                                                required</span>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <figcaption class="work__info">
                                <img src="./img/references/solarwinds.svg" width="80" alt="Solarwinds">
                                <h3>Reporting for Backup cloud platform</h3>
                                <p>Sending a backup report of hundreds of devices to each of your customers every week
                                    can be a huge time-consuming pain. See how the redesign of the reporting flow saves
                                    many hours every week.</p>
                            </figcaption>
                        </a>
                    </div>
                </div>

                <!-- <div class="work__effect work__job2">
                    <div class="work">
                        <a href="#">
                            <figure class="work__image">
                                <img srcset="img/work/mentedy@1x.png 1x, img/work/mentedy@2x.png 2x" alt="Mentedy" >
                                <div class="work__overlay">
                                    <div class="overlay__text">
                                        <img src="./img/magnifier.svg" alt="See more">
                                        Case study coming soon
                                    </div>
                                </div>
                            </figure>
                            <figcaption class="work__info">
                                <img src="./img/work/mentedy_logo.svg" alt="Mentedy">
                                <h3>Knowledge sharing platform</h3>
                                <p>I Designed and managed the development of a Knowledge sharing platform that connects
                                    Mentors and Mentees. Mentedy is Place where people can find the knowledge of all
                                    kind and share it between one’s who needs help or wants to personally grow.</p>
                            </figcaption>
                        </a>
                    </div>
                </div> -->

                <div class="work__effect work__job3">
                    <div class="work">
                        <a href="/knowledge-base">
                            <figure class="work__image">
                                <img srcset="img/work/knowledge@1x.png 1x, img/work/knowledge@2x.png 2x"
                                    alt="Knowledge">

                                <div class="work__overlay">
                                    <div class="overlay__text">
                                        <span class="link odkaz">View case study</span>
                                    </div>
                                    <div class="overlay__meta">
                                        <h4>UX/UI, Prototyping</h4>
                                        <div>CloudApp · B2B  · 2018
                                            <span class="protected">Password required</span>
                                        </div>
                                    </div>
                                </div>

                            </figure>
                            <figcaption class="work__info">
                                <img src="./img/references/solarwinds.svg" width="80" alt="Solarwinds" >
                                <h3>Knowledge Base management</h3>
                                <p>Giving MSP’s an ability to effectively create and manage company knowledge base
                                    between technicians which makes it it easy to solve the issues and also allows users
                                    to avoid long wait times.</p>
                            </figcaption>
                        </a>
                    </div>
                </div>
            </section>
        </div>

        <div id="white">
            <section id="container__work--white">

                <div class="work__effect work__job4">
                    <div class="work">
                        <a href="/task-management">
                            <figure class="work__image">
                                <img srcset="img/work/task@1x.png 1x, img/work/task@2x.png 2x" alt="Task management" >
                                
                                <div class="work__overlay">
                                        <div class="overlay__text">
                                            <span class="link odkaz">View case study</span>
                                        </div>
                                        <div class="overlay__meta">
                                            <h4>UX/UI, Prototyping</h4>
                                            <div>CloudApp · B2B · 2017
                                                <span class="protected">Password required</span>
                                            </div>
                                        </div>
                                </div>

                            </figure>
                            <figcaption class="work__info">
                                <img src="./img/references/solarwinds.svg" width="80" alt="Solarwinds" >
                                <h3>Tasks management</h3>
                                <p>Even the best IT technicians have a hard time with keeping up with the work that
                                    needs to be done. Hence I designed a task management feature so that the technicians
                                    can see where things stand at any time with all the details.</p>
                            </figcaption>
                        </a>
                    </div>
                </div>





                <div class="work__effect work__job5">
                    <div class="work">
                        <a href="/gordic-redesign">
                            <figure class="work__image">
                                <img srcset="img/work/gordic_main@1x.png 1x, img/work/gordic_main@2x.png 2x"
                                    alt="Gordic company portal">
                               
                                    <div class="work__overlay">
                                        <div class="overlay__text">
                                            <span class="link odkaz">View case study</span>
                                        </div>
                                        <div class="overlay__meta">
                                            <h4>Web design, Prototyping</h4>
                                            <div>Web · B2B, B2G · 2018
                                            </div>
                                        </div>
                                    </div>
                            </figure>
                            <figcaption class="work__info">
                                <img src="./img/references/gordic_new.svg" width="80" alt="Gordic">
                                <h3>Company website redesign</h3>
                                <p>I had the opportunity to work on the redesign of GORDIC main website, create scalable
                                    architecture, responsive wireframes, and interactions for more than hundreds of
                                    subpages.
                                </p>
                            </figcaption>
                        </a>
                    </div>
                </div>

                <div class="work__effect work__job6">
                    <div class="work">
                        <a href="/gordic-support">
                            <figure class="work__image">
                                <img srcset="img/work/gordic_support@1x.png 1x, img/work/gordic_support@2x.png 2x"
                                    alt="Gordic support">
                                        <div class="work__overlay">
                                            <div class="overlay__text">
                                                <span class="link odkaz">View case study</span>
                                            </div>
                                            <div class="overlay__meta">
                                                <h4>Web design, Visual & interaction design</h4>
                                                <div>Web · B2B, B2G
                                                </div>
                                            </div>
                                        </div>
                            </figure>
                            <figcaption class="work__info">
                                <img src="./img/references/gordic_new.svg" width="80" alt="Gordic">
                                <h3>Learning & Support portal</h3>
                                <p>I designed portal where GORDIC company shares personalized news, events, important
                                    legal updates and best industry practices in order to help their customers to do the
                                    right things right.</p>
                            </figcaption>
                        </a>
                    </div>
                </div>


                <div class="work__job7">
                    <div id="ld_other"">
						<a href=" #">
                        <ul>
                            <li><img srcset="img/work/floating_1@1x.png 1x, img/work/floating_1@2x.png 2x" width="200px"
                                    height="150px" alt="Raketak" loading="lazy"></li>

                            <li><img srcset="img/work/floating_2@1x.png 1x, img/work/floating_2@2x.png 2x" width="150px"
                                    height="112px" alt="Wedding" loading="lazy"></li>

                            <li><img srcset="img/work/floating_3@1x.png 1x, img/work/floating_3@2x.png 2x" width="188px"
                                    height="151px" alt="Matemág" loading="lazy"></li>

                            <li><img srcset="img/work/floating_4@1x.png 1x, img/work/floating_4@2x.png 2x" width="190px"
                                    height="150px" alt="Joinery" loading="lazy"></li>

                            <li><img srcset="img/work/floating_5@1x.png 1x, img/work/floating_5@2x.png 2x" width="160px"
                                    height="120px" alt="Welding" loading="lazy"></li>

                            <li><img srcset="img/work/floating_6@1x.png 1x, img/work/floating_6@2x.png 2x" width="188px"
                                    height="151px" alt="BeYogurt" loading="lazy"></li>

                            <li><img srcset="img/work/floating_7@1x.png 1x, img/work/floating_7@2x.png 2x" width="300px"
                                    height="221px" alt="ElNido" loading="lazy"></li>
                        </ul>
                        <div class="see__more">
                            <a href="https://www.behance.net/jambi" class="link odkaz anim-middleout">See more on
                                Behance</a>
                        </div>
                        </a>
                    </div>
                </div>

            </section>
        </div>

        <section class="ld__about">
            <div class="container--about">
                <div class="about__text">
                    <h1><span class="highlight_blue">Hi,</span> I'm David</h1>
                    <p>I'm a passionate digital product designer currently living in Brno in Czechia. During the last ten years, I’ve worked as a Graphic, Web designer, Web developer, UX/UI, and Product designer for startups, corporates and also as the freelancer for my own clients where I’ve gained valuable experiences in different fields such as marketing, front-end development, project ownership, and building products from scratch. I want to get things done in a quick manner, but I still place emphasis on quality. Traveling, friends, adrenalin sport and adventures are the hobbies where I'm getting energy and inspiration from.</p>
                    <div class="buttons__container">
                        <div class="wrap__ghost">
                            <a href="/about" class="link ghost__button">More about me</a>
                        </div>
                    </div>
                </div>
                <div class="about__photo">
                    <img srcset="img/david_jambor_about@1x.png 1x, img/david_jambor_about@2x.png 2x" width="407px"
                        height="447px" alt="David Jambor" loading="lazy">
                </div>
            </div>

            <?php include('_partials/testimonials.php') ?>
        </section>

        <section class="ld__process">
            <div class="container--process">
                <h1>How I <span class="highlight_blue--light">design products.</span></h1>
                <div class="wrapper__process">
                    <ul class="slider slider-nav">
                        <li class="active link" data-slide="1">01. Research</li>
                        <li class="link" data-slide="2">02. Design</li>
                        <li class="link" data-slide="3">03. Test</li>
                        <li class="link" data-slide="4">04. Implement</li>
                        <li>Repeat</li>
                    </ul>
                    <div class="process__content">
                        <div>
                            <!-- <img src="./img/research_icon@1x.png" alt="Research icon"> -->
                            <h2>01. Research</h2>
                            <p>
                                Designing without data is as driving without brakes, you can handle it, but it is a
                                risk. Because of that, the most important thing is to know as much as possible about the
                                problem/task and user need. Let’s gather at least quantitative data from available
                                analytics or ideally plan the qualitative research, which would be even better.
                            </p>
                            <p>
                                Thus I will dig deep to discover what really your customers are looking for and together
                                we will decide what the next steps are. More quantitative and qualitative data achieves
                                better problem understanding for everyone and allows me to choose the right decisions in
                                the design process.
                            </p>
                        </div>
                        <div>
                            <!-- <img src="./img/research_icon@1x.png" alt="Research icon"> -->
                            <h2>02. Design</h2>
                            <p>
                                We have to sit together and come up with a plan for the feature or product. It means
                                that Product Manager, Architect, and Dev lead and I needs to be on the same page. What
                                will be my role? I will transfer the information from the research, create a design
                                brief and start design sketches which I will quickly transfer to high-fidelity prototype
                                or to design increment within weeks, not months.
                            </p>
                            <p>
                                The result? Together we can see interactive prototype which is supposed to deliver real
                                value to our customer and we will be ready for user testing to get user's insight.
                            </p>
                        </div>
                        <div>
                            <!-- <img src="./img/research_icon@1x.png" alt="Research icon"> -->
                            <h2>03. Test</h2>
                            <p>
                                Even the best solution needs to be tested to make sure that it will really bring value
                                to your customers. I will prepare the test plan and scenarios and set up analytics for
                                testing and either I or your researchers will conduct the testing. I will attend the
                                user sessions and rapidly iterate on design based on feedback. After that, we will sit
                                together and we will decide what If we need to change anything else or if we are all
                                right with the design which we have.
                            </p>
                        </div>
                        <div>
                            <!-- <img src="./img/research_icon@1x.png" alt="Research icon"> -->
                            <h2>04. Implement</h2>
                            <p>
                                I will provide the design guidelines for the Front-end team and all other design sources
                                to make sure they have everything they need. I will also keep an eye on design during
                                the implementation and care about the quality and communicate the required changes. What
                                next? Even the best products need to evolve. Let’s identify a new market niche and
                                repeat this process again.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include('_partials/footer.php')?>
    <?php include('_partials/footer-links.php')?>
</body>

</html>