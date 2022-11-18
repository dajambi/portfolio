<?php 
include('password_protection.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr"  prefix="og: http://ogp.me/ns#">
<!--[if IE]>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->

<head>
    <?php include('_partials/loading.php') ?>
    <!-- metalinks here -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, viewport-fit=cover">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="index, follow, snippet, archive">
    <meta name="theme-color" content="#0D0D19">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="msapplication-navbutton-color" content="#0D0D19">
    <meta name="apple-mobile-web-app-status-bar-style" content="#0D0D19">
    <meta name="MobileOptimized" content="550">

    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="David Jambor - Portfolio Digital - product (UI/UX/Ix) designer">
    <meta property="og:url" content="https://www.davidjambor.cz">
    <meta property="og:site_name" content="David Jambor - Portfolio Digital - product (UI/UX/Ix) designer">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.davidjambor.cz/assets/david-jambor-social.png">
    <meta property="og:description"
        content="I am Digital Product (UI/UX/Ix) designer with a passion for function design and with one rule in mind - Design is everything.">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@davejambor">
    <meta property="twitter:description"
        content="I am Digital Product (UI/UX/Ix) designer with a passion for function design and with one rule in mind - Design is everything.">
    <meta property="twitter:title" content="David Jambor - Portfolio Digital - product (UI/UX/Ix) designer">
    <meta property="twitter:image" content="https://www.davidjambor.cz/assets/david-jambor-social.png">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="./img/favicons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./img/favicons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./img/favicons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./img/favicons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/img/favicons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/img/favicons/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="/img/favicons/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/img/favicons/favicon-16x16.png" sizes="16x16" />
    <link rel="manifest" href="/manifest.json">

    <meta name="description"
        content="🤘 I am Digital Product (UI/UX/Ix) designer with a passion for function design and with one rule in mind - Design is everything.">
    <meta name="keywords"
        content="ux designer,ux design,ux, user interface design, ui design, ux research,ui ix designer, interaction designer, user experience, mobile app design">
    <title>Knowledge base</title>
</head>
<script>
(function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-5C8Z76X');
</script>

<body class="custom_cursor">
    <?php include('_partials/tag-manager.php') ?>
    <?php include('_partials/loading_overlay.php') ?>

    <div class="cursor cursor--small"></div>
    <canvas class="cursor cursor--canvas" resize></canvas>
    <header class="task-management rf">
        <div class="container">
            <div class="logo">
                <a href="https://www.davidjambor.cz"><img src="./img/logo.svg"
                        alt="Digital product (UI/UX/Ix) designer"></a>
            </div>

            <div class="welcome--sub">
                <a href="work.php" class="link">My work</a>
                <span>Knowledge base</span>
            </div>


            <?php include('_partials/menu-icon.php')?>
            <?php include('_partials/navigation.php')?>

            <div id="rf__header">
                <img src="./img/references/solarwinds.svg" width="80" alt="">
                <h1>Complete knowledge management, fewer questions for IT team.</h1>
                <p>Giving MSPs the ability to set up one central place for the IT knowledge base. This makes easy to
                    find answers, tips, and other important info when solving ticket. See how we done it.</p>
                <ul id="case__info">
                    <li>
                        <svg width="32" height="46" viewBox="0 0 32 32" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <image xlink:href="img/watch.svg" />
                        </svg>Timeline <br> 7 weeks
                    </li>

                    <li>
                        <svg width="34" height="46" viewBox="0 0 34 32" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <image xlink:href="img/user_sessions.svg" />
                        </svg>5 user <br> sessions
                    </li>

                    <li>
                        <svg width="41" height="46" viewBox="0 0 41 46" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <image xlink:href="img/landing_page.svg" />
                        </svg>User <br> interface
                    </li>

                    <li>
                        <svg width="41" height="46" viewBox="0 0 41 34" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <image xlink:href="img/browser.svg" />
                        </svg>3 created <br> prototypes
                    </li>
                </ul>
            </div>

        </div>
    </header>

    <main>
        <div class="rf_solution">
            <div class="wrapper_content ">
                <section class="rf_content">
                    <div class="section_name"><span>1 / 4</span> Solution</div>
                    <div>
                        <video class="elevation1" width="100%" video="100%" style="width:100%, height:100%" playsinline
                            controls poster="img/case-study/knowledge/main@1x.png" style="border-radius: 0px;">
                            <source src="img/case-study/knowledge/knowledge_min.mp4" type="video/mp4">
                            <source src="img/case-study/knowledge/knowledge_min.webm" type="video/webm">
                        </video>
                        <div class="rf_info">
                            <div>
                                <span>Roles & Responsibilities</span>
                                <ul>
                                    <li>UX, UI, Prototyping </li>
                                    <li>Scope refinement</li>
                                    <li>Validation together with Researchers</li>
                                    <li>Hand-off / Design QA</li>
                                </ul>
                            </div>

                            <div>
                                <span>Tools</span>
                                <ul>
                                    <li>Sketch</li>
                                    <li>InVision</li>
                                </ul>
                            </div>

                            <div>
                                <span>Platform</span>
                                <ul>
                                    <li>Cloud app</li>
                                </ul>
                            </div>

                            <div>
                                <span>Market</span>
                                <ul>
                                    <li>B2B market</li>
                                    <li>SMB market</li>
                                    <li>Managed services market</li>
                                </ul>
                            </div>
                        </div>
                        <div class="rf_paragraph">
                            <h2>Outcome</h2>
                            <p>
                                I've come up with the design for a customizable and flexible system where IT technicians
                                can manage heterogeneous information. Everything from configuration, manuals, expires,
                                procedures, secrets, and passwords. Each knowledge article can be linked with others for
                                quick navigation back and forth. It can be shown as the individual page in the knowledge
                                library, as the widget on the dashboard, or as the extra information in the ticket.
                            </p>
                        </div>
                        <div class="rf_paragraph">
                            <h2>Impact</h2>
                            <p>
                                Having a reliable knowledge base is important for the efficiency and quality of the work
                                of every IT technician. This is usually managed via an external tool or in the notes. By
                                building this feature the MSP Managers becomes more competitive on the market. Knowledge
                                base becomes one of the main unique selling proposition. It had a positive impact not
                                only on user adoption but also on retention. MSP companies could have these articles
                                also visible on the customer portal. This helped them establish Self-service and
                                decrease the number of simple issues.
                            </p>

                            <div class="solutionAward">
                                <li class="card">
                                    <span class="cardType">Customer review</span>
                                    <p>
                                        “It's great that multiple people can collaborate on tickets and you have the
                                        ability to communicate directly while your customers can follow progress made
                                        from the opening to closing of the ticket.”</p>
                                    <div class="person">
                                        <img height="30" width="30"
                                            srcset="img/references/chris@1x.png 1x, img/references/chris@2x.png  2x"
                                            alt="Chris H.">
                                        <div class="position">
                                            <div>Chris H.</div></span>
                                            <div>
                                                <span>Security Analyst · Source: Capterra</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="card">
                                    <span class="cardType">Customer review</span>
                                    <p>
                                        “What MSP Manager really gets to do is help us stay organized and prioritize
                                        tickets very quickly. I don’t want my team to worry about managing tickets.”</p>
                                    <div class="person">
                                        <img height="30" width="30"
                                            srcset="img/references/bart@1x.png 1x, img/references/bart@2x.png  2x"
                                            alt="BART ZUB">
                                        <div class="position">
                                            <div>BART ZUB</div></span>
                                            <div>
                                                <span>President · Digimite technologies · Source: n-able.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
        <article>
            <div class="wrapper_content">
                <section class="rf_content">
                    <div class="section_name"><span>2 / 4</span> Introduction</div>

                    <div class="rf_paragraph">
                        <pre><span>01</span> Industry Background</pre>
                        <h2>What is it and <span class="highlight_blue--light">who is it for?</span></h2>
                        <p>
                            The MSP Manager is the ticketing solution for IT technicians. There you find all the
                            information about the devices, what is the issue, and what you should do. Once you start
                            working you can track your time, provide the notes, and then generate the invoice for your
                            customer. You can do much more there, but this simple overview is ok for this case study.
                        </p>
                    </div>

                    <div class="rf_paragraph">
                        <pre><span>02</span> Challenge</pre>
                        <h2><span class="highlight_blue--light">How to always</span> know the right information?</h2>
                        <p>
                            OH, where is my installation manual? When it comes to IT management you simply cannot have
                            everything in your head. Why should you? There is a lot of issues, devices, security
                            incidents, people are leaving the company and with them also their knowledge. But what if
                            you could have the knowledge library that will be always handy when you start working on the
                            ticket?</p>

                        <b>High-level goals</b>
                        <ul>
                            <li>The design needs to be scalable (Template, standalone page, widget, import legacy stuff)
                            </li>
                            <li>Knowledge needs to be linked together for quick navigation</li>
                            <li>Create a customizable and flexible system</li>
                        </ul>

                        <p>
                            I've joined this project almost in the end because the senior designer, who was leading this
                            project, left the company. I've supposed to do only Design QA, surprisingly it wasn't like
                            that. It is nightmare when you need to redesign a project that is already in development and
                            you know very little about actual user needs or
                            <span class="abbr" data-tooltip="Job to be done">JTBD</span>. Also the project manager left
                            the company. He was the one, who had the vision and after that, the project got even more
                            complicated.
                        </p>
                    </div>

                    <div class="rf_paragraph">
                        <pre><span>03</span> Research</pre>
                        <h2><span class="highlight_blue--light">How</span> do technicians work?</h2>
                        <p>
                            I've used the data from the research team and I've conducted interviews with the internal IT
                            technicians who were based in the same office. They usually do the multitasking and
                            relentlessly work their way through the ticket queue. They have two or more monitors in
                            order to be more efficient. They are communicating with their customers over email or phone.
                            Some of them are trying to organize and prioritize their work via Posti-ts or via a digital
                            task list. It is used repetitively or it is also shared with colleagues.
                        </p>
                        <p>
                            What is the motivation? They are performance-driven. More solved tasks with high customer
                            satisfaction in the long term mean a chance to get a promotion. So they can meet their
                            aspiration and become the Technician manager. Their targets are billable time per week,
                            number of closed tickets, avg time to resolution, <span class="abbr"
                                data-tooltip="Customer satisfaction score">CSAT</span>.
                        </p>
                    </div>
                </section>


                <section class="rf_content">
                    <div class="section_name"><span>3 / 4</span> Development</div>

                    <div class="rf_paragraph">
                        <pre><span>04</span> Architecture design</pre>
                        <h2>One widget to rules them&nbsp;all.</h2>
                        <p>
                            From the beginning, there was a plan that we build the template system for the Knowledge
                            base. Same way as we did for the Task management. But when I joined the project, new
                            requirements appeared. The team wanted to build the template system and on top of that,
                            every knowledge should be visible in the three variations. As the standalone page, as the
                            widget on the dashboard, and in the ticket. Does it sound like a crazy idea for the first
                            release? yes, it was.
                        </p>
                        <p>On the other hand, it meant that we will build just one widget, that will be responsive, but
                            reusable in many places of the app and it will provide still the same experience.</p>

                        <figure class="bluebg">
                            <img srcset="img/case-study/knowledge/structure@1x.png 1x, img/case-study/knowledge/structure@2x.png 2x"
                                alt="Feature Information architecture">
                            <figcaption>Feature Information architecture <a
                                    href="img/case-study/knowledge/structure@2x.png" data-fancybox="gallery"
                                    class="link">See detail</a></figcaption>
                            </figcaption>
                        </figure>

                    </div>



                    <div class="rf_paragraph">
                        <h2>Building the template</h2>
                        <p>
                            I've heard many times that customers want flexibility when it comes to managing IT
                            information. Because of that, we were building customizable dashboards and this knowledge
                            management project followed the same principle.
                            The user could create the new section with a custom layout and use all field types like
                            dropdowns, radio, date picker, etc and reshuffle it with drag&drop interaction. Moreover,
                            you could also define the roles for who the template will be visible or not.

                        </p>
                    </div>
                </section>
            </div>

            <div class="rf_bp_prototypeflow">
                <figure>
                    <img srcset="img/case-study/knowledge/template@1x.png 1x,
                            img/case-study/knowledge/template@2x.png 2x" alt="Building knowledge template">
                </figure>
            </div>



            <div class="wrapper_content">
                <section class="rf_content">

                    <div class="rf_paragraph">
                        <h2>Knowledge article</h2>
                        <p>
                            Based on the template structure the user could create the knowledge article. To help users
                            organize it even more we provided the tagging and defining whether the article will be
                            visible for IT technicians or also for the customers and which one.
                            Every article could be linked with another one. So you were able to jump between the
                            knowledge back and forth and find the information you needed.
                            Every article could be assigned with a specific device type. For example, once you opened
                            the ticket you could see the all assigned article for this device or device type.
                        </p>
                    </div>
                </section>
            </div>

            <div class="rf_bp_prototypeflow">
                <figure>
                    <img srcset="img/case-study/knowledge/article@1x.png 1x,
                            img/case-study/knowledge/article@2x.png 2x" alt="Knowledge article">
                </figure>
            </div>


            <div class="wrapper_content">
                <section class="rf_content">

                    <div class="rf_paragraph">
                        <h2>Ticket views</h2>
                        <p>
                            Imagine that you were assigned to the ticket, you checked the description and now you have
                            no idea how to solve this issue. Luckily for you, someone before crated the article where is
                            everything explained. So you can open the right sidebar with the assigned article Quite
                            handy right?
                            Or you could search another article via search if you needed. I wanted also to provide
                            suggestions based on the ticket type and link devices, but this wasn't feasible at that
                            time.
                        </p>
                    </div>
                </section>
            </div>


            <div class="rf_bp_prototypeflow">
                <figure>
                    <img srcset="img/case-study/knowledge/ticket@1x.png 1x,
                            img/case-study/knowledge/ticket@2x.png 2x"
                        alt="Ticket with the detail of the knowledge article">
                </figure>
            </div>

            <div class="wrapper_content">
                <section class="rf_content">

                    <div class="rf_paragraph">
                        <h2>Knowledge widget</h2>
                        <p>
                            A knowledge widget was used in the dashboard. It wasn't just the place where were visualized
                            the aggregated information. It was a workspace where you could compose your application as
                            you wanted. In other words, you could have one or more widgets in one place that were
                            interacting with each other based on the actions. I will describe this in another case
                            study.
                        </p>
                        <p>
                            Do you want to link the knowledge with each other? Just drag and drop it to the knowledge
                            you want to link it with. You could see one of the linked knowledge in one widget. It was
                            open as the new tab. It is the same pattern as in the browser, it gives you the ability to
                            have more articles opened and check them once you need them.
                        </p>
                        <p>
                            IT technicians usually had two or more wide monitors to see much information in one moment.
                            To leverage this fact I've designed a quick linkage that could be done via drag& drop.
                        </p>
                    </div>
                </section>
            </div>

















            <div class="rf_slideshow">
                <ul class="case_slideshow">
                    <li>
                        <div>
                            <figure>
                                <img srcset="img/case-study/knowledge/slideshow/1a@1x.png 1x, img/case-study/knowledge/slideshow/1a@2x.png 2x"
                                    alt="Task template list">
                                <figcaption>01 Task template list
                                    <a href="img/case-study/knowledge/slideshow/1a@2x.png" data-fancybox="gallery"
                                        class="link"> See detail</a>
                                </figcaption>
                            </figure>
                            <figure>
                                <img srcset="img/case-study/knowledge/slideshow/1b@1x.png 1x, img/case-study/knowledge/slideshow/1b@2x.png 2x"
                                    alt="Task template selection">
                                <figcaption>02 Task template selection
                                    <a href="img/case-study/knowledge/slideshow/1b@2x.png" data-fancybox="gallery"
                                        class="link"> See detail</a>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li>
                        <div>
                            <figure>
                                <img srcset="img/case-study/knowledge/slideshow/2a@1x.png 1x, img/case-study/knowledge/slideshow/2a@2x.png 2x"
                                    alt="Creating task template">
                                <figcaption>03 Creating task template
                                    <a href="img/case-study/knowledge/slideshow/2a@2x.png" data-fancybox="gallery"
                                        class="link"> See detail</a>
                                </figcaption>
                            </figure>
                            <figure>
                                <img srcset="img/case-study/knowledge/slideshow/2b@1x.png 1x, img/case-study/knowledge/slideshow/2b@2x.png 2x"
                                    alt="Task dependency">
                                <figcaption>04 Task dependency
                                    <a href="img/case-study/knowledge/slideshow/2b@2x.png" data-fancybox="gallery"
                                        class="link"> See detail</a>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li>
                        <div>
                            <figure>
                                <img srcset="img/case-study/knowledge/slideshow/3a@1x.png 1x, img/case-study/knowledge/slideshow/3a@2x.png 2x"
                                    alt="Law search">
                                <figcaption>05 Creating task template
                                    <a href="img/case-study/knowledge/slideshow/3a@2x.png" data-fancybox="gallery"
                                        class="link"> See detail</a>
                                </figcaption>
                            </figure>
                            <figure>
                                <img srcset="img/case-study/knowledge/slideshow/3b@1x.png 1x, img/case-study/knowledge/slideshow/3b@2x.png 2x"
                                    alt="Sharing highlighted text">
                                <figcaption>06 Task detail with dependency
                                    <a href="img/case-study/knowledge/slideshow/3b@2x.png" data-fancybox="gallery"
                                        class="link"> See detail</a>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <li>
                        <div>
                            <figure>
                                <img srcset="img/case-study/knowledge/slideshow/4a@1x.png 1x, img/case-study/knowledge/slideshow/4a@2x.png 2x"
                                    alt="Search results">
                                <figcaption>07 Validation
                                    <a href="img/case-study/knowledge/slideshow/4a@2x.png" data-fancybox="gallery"
                                        class="link"> See detail</a>
                                </figcaption>
                            </figure>
                            <figure>
                                <img srcset="img/case-study/knowledge/slideshow/4b@1x.png 1x, img/case-study/knowledge/slideshow/4b@2x.png 2x"
                                    alt="Active menu">
                                <figcaption>08 Editing task detail
                                    <a href="img/case-study/knowledge/slideshow/4b@2x.png" data-fancybox="gallery"
                                        class="link"> See detail</a>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                </ul>
            </div>


            <div class="arrows">
                <div class="arrow--left link">
                    <svg width="22px" height="23px" viewBox="0 0 22 23" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="home-copy-5" transform="translate(-1084.000000, -4917.000000)" fill="#00D9FF"
                                fill-rule="nonzero">
                                <g id="Group-7" transform="translate(1084.000000, 4917.000000)">
                                    <path
                                        d="M11.2255782,22.2646168 C10.996697,22.4934504 10.6257185,22.4934504 10.3968849,22.2646645 L0.171613284,12.0393929 C-0.057172639,11.8105116 -0.057172639,11.4395331 0.171613284,11.2106995 L10.3968849,0.985427891 C10.6257662,0.756641968 10.9967446,0.756641968 11.2255782,0.985427891 L12.1923156,1.95216524 C12.4211015,2.18099885 12.4211015,2.55197727 12.1923156,2.78081088 L4.61763235,10.3554941 L21.2890117,10.3554941 C21.6125927,10.3554941 21.8749478,10.6178493 21.8749478,10.9414302 L21.8749478,12.3086145 C21.8749478,12.6321954 21.6125927,12.8945506 21.2890117,12.8945506 L4.61763235,12.8945506 L12.1923156,20.4691861 C12.4211015,20.6980674 12.4211015,21.0690459 12.1923156,21.2978318 L11.2255782,22.2646168 Z"
                                        id="arrow--left"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="arrow--right link">
                    <svg width="22px" height="23px" viewBox="0 0 22 23" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="home-copy-5" transform="translate(-1172.000000, -4917.000000)" fill="#00D9FF"
                                fill-rule="nonzero">
                                <g id="Group-7" transform="translate(1084.000000, 4917.000000)">
                                    <path
                                        d="M98.6494173,0.985427891 C98.8782509,0.756594285 99.2492293,0.756594285 99.4780629,0.985427891 L109.703382,11.2106995 C109.932168,11.4395808 109.932168,11.8105592 109.703382,12.0393929 L99.4781106,22.2646645 C99.2492293,22.4934504 98.8782509,22.4934504 98.6494173,22.2646645 L97.6826799,21.2978795 C97.453894,21.0690459 97.453894,20.6980674 97.6826799,20.4692338 L105.257363,12.8945506 L88.5859361,12.8945506 C88.2623552,12.8945506 88,12.6321954 88,12.3086145 L88,10.9414302 C88,10.6178493 88.2623552,10.3554941 88.5859361,10.3554941 L105.257363,10.3554941 L97.6826799,2.78085856 C97.453894,2.55197727 97.453894,2.18099885 97.6826799,1.95221292 L98.6494173,0.985427891 Z"
                                        id="arrow--right"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>


            <div class="wrapper_content_big">
                <section class="rf_content">
                    <div class="wrapper_content">
                        <div class="rf_paragraph">
                            <pre><span>05</span> Advance knowledge type</pre>
                            <h2>Credentials and secret information</h2>
                            <p>
                                The expiry was a special type of information that had an expiration date—warranty,
                                license. So once the item expired the user IT technician got the notification and it was
                                highlighted in the list of expiry items.
                            </p>
                            <p>
                                Sometimes you need to store the access passwords, serial codes, licenses, or other
                                secrets. Via this new knowledge management system, the user was able to use confidential
                                information and encrypt it. Only the colleagues, who has known the secret or who were in
                                the dedicated user group, were able to see it.
                            </p>
                        </div>
                    </div>
                </section>
            </div>

            <div class="rf_bp_prototypeflow">
                <figure>
                    <img srcset="img/case-study/knowledge/secret-knowledge@1x.png 1x,
                            img/case-study/knowledge/secret-knowledge@2x.png 2x" alt="Knowledged with secret items">
                </figure>
            </div>



            <div class="wrapper_content_big">
                <section class="rf_content">
                    <div class="two_columns">
                        <div class="first_column">
                            <div class="stickercol">
                                <pre><span>06</span> Feature adoption</pre>
                                <h2>How to get it to the user?</h2>
                                <p>The development is not for free and adoption is a critical part of the digital product lifecycle. Therefore I wanted to increase our chances with the following improvements.</p>
                                
                                <p>The first small indication in the navigation supposes to tell that there is something new. It engaged the user to see more. Once the user would go to the detailed page, the onboarding dialog would be automatically opened with the explanatory video. It could have been used also at the moment when the user opened the legacy knowledge item.</p>

                                <p>
                                    I proposed having a few templates in place as an example. The page wouldn't be empty and it would help to learn all the possibilities and adopt the best practices. 
                                </p>
                            </div>
                        </div>
                        <div class="second_column">
                            <figure>
                                <img class="elevation1"
                                    srcset="img/case-study/knowledge/adoption1@1x.png 1x, img/case-study/knowledge/adoption1@2x.png 2x"
                                    alt="Feature highlight by badge">
                                <figcaption>Feature highlight by "NEW" badge<a
                                        href="img/case-study/knowledge/adoption1@2x.png" data-fancybox="gallery"
                                        class="link">See detail</a></figcaption>
                            </figure>
                            <figure>
                                <img class="elevation1"
                                    srcset="img/case-study/knowledge/adoption2@1x.png 1x, img/case-study/knowledge/adoption2@2x.png 2x"
                                    alt="Onboarding dialog with animated video">
                                <figcaption>Onboarding dialog with animated video<a
                                        href="img/case-study/knowledge/adoption2@2x.png" data-fancybox="gallery"
                                        class="link">See detail</a></figcaption>
                            </figure>

                            <figure>
                                <img class="elevation1"
                                    srcset="img/case-study/knowledge/adoption3@1x.png 1x, img/case-study/knowledge/adoption3@2x.png 2x"
                                    alt="Prepared knowledge examples">
                                <figcaption>Prepared knowledge examples<a
                                        href="img/case-study/knowledge/adoption3@2x.png" data-fancybox="gallery"
                                        class="link">See detail</a></figcaption>
                            </figure>
                        </div>
                    </div>
                </section>
            </div>

            <div class="wrapper_content">
                <section class="rf_content">
                    <div class="section_name"><span>4 / 4</span> Grand finale</div>
                    <div class="rf_paragraph">
                        <pre><span>07</span> Conclusion</pre>
                        <h2>What did I learn?</h2>
                        <p>
                        This project gave me a huge lesson on how to get the project out of the chaos and what to expect after the design colleague left. If the vision is clear, the objective is set, then you should be fine even if your colleagues left. If that is not clear then you can expect problems.
                        </p>

                        <p> Making the feature available in the production should be the beginning not the end of the team work. You should do everything that you can to make sure that users can and will adopt it. We as the team weren't focused on this type of product work.
                        </p>

                        <p class="text-highlight"> Making the feature available in the production should be the beginning not the end.
                        </p>

                        <p>We shouldn't work on a big project for sake of releasing something. We should have a deep understanding and everyone in the team should be sure of what are the user needs.  </p>

                        <p class="disclaimer">All information in the case study is my own and does not reflect the views
                            or opinions of SolarWinds.</p>
                    </div>
                </section>
            </div>
        </article>

    </main>
    <?php include('_partials/highlight_share.php')?>
    <?php include('_partials/footer.php')?>
    <?php include('_partials/footer-links.php')?>
</body>

</html>


<!-- 

    -link in for another case study dodat
 -->