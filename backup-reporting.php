<?php 
include('password_protection.php');
?>
<!DOCTYPE html>
<html lang="en"  dir="ltr" prefix="og: http://ogp.me/ns#">
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
    <title>Backup reporting that scales</title>
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
    <header class="proof-of-value rf">
        <div class="container">
            <div class="logo">
                <a href="https://www.davidjambor.cz"><img src="./img/logo.svg"
                        alt="Digital product (UI/UX/Ix) designer"></a>
            </div>

            <div class="welcome--sub">
                <a href="work.php" class="link">My work</a>
                <span>Backup reporting</span>
            </div>


            <?php include('_partials/menu-icon.php')?>
            <?php include('_partials/navigation.php')?>

            <div id="rf__header">
                <img src="./img/references/solarwinds.svg" width="80" alt="solarwinds">
                <h1>Backup reporting that&nbspscales.</h1>
                <p>Sending a backup report of hundreds of devices to each of your customers every week can be a huge
                    time-consuming pain. See how the redesign of the reporting flow saves many hours every week.</p>
                <ul id="case__info">
                    <li>
                        <svg width="32" height="32" viewBox="0 0 32 32" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <image xlink:href="img/watch.svg" />
                        </svg>Timeline <br> 6 weeks
                    </li>

                    <li>
                        <svg width="34" height="32" viewBox="0 0 34 32" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <image xlink:href="img/user_sessions.svg" />
                        </svg>5 user <br> sessions
                    </li>

                    <li>
                        <svg width="41" height="34" viewBox="0 0 41 34" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <image xlink:href="img/browser.svg" />
                        </svg>2 created <br> prototypes
                    </li>
                </ul>
            </div>

        </div>
    </header>

    <main>
        <div class="rf_solution">
            <div class="wrapper_content ">
                <section class="rf_content">
                    <div class="section_name"><span>1 / 6</span> Solution</div>

                    <div>
                        <img srcset="img/case-study/proof-of-value/backup-1@1x.png 1x, img/case-study/proof-of-value/backup-1@2x.png 2x"
                            alt="Backup reporting">
                        <div class="rf_info">
                            <div>
                                <span>Roles & Responsibilities</span>
                                <ul>
                                    <li>UX, UI, Motion, Prototyping, HTML email</li>
                                    <li>Cooperation with a PM</li>
                                    <li>Collaboration with Senior UX designer</li>
                                    <li>Validation together with Researchers</li>
                                    <li>Hand-off</li>
                                </ul>
                            </div>

                            <div>
                                <span>Tools</span>
                                <ul>
                                    <li>Sketch</li>
                                    <li>Principle</li>
                                    <li>Marvelapp</li>
                                    <li>After Effect</li>
                                </ul>
                            </div>

                            <div>
                                <span>Platform</span>
                                <ul>
                                    <li>Cloud application</li>
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
                                The feature allows scaling reporting on two levels.<br>
                                <b>Customer level</b> - Every time user gets new customers the reporting setting can be
                                automatically adjusted to start reporting to the new customer with minimum effort. It
                                doesn't really matter whether you have 10 or 10 000 customers.
                                <br><b>App-level</b> - The report workflow (described below) can be easily extended to
                                provide an option to select different reports types. This allows SolarWinds to offer
                                more services with minimum cost for development and have a strong position in the backup
                                reporting area.
                            </p>
                        </div>
                        <div class="rf_paragraph">
                            <h2>Impact</h2>
                            <p>
                                Users can improve the business relationship with their customers by showing the value of
                                provided services and improve selling activities to gain new leads. In other words, it
                                would have a positive impact on product adoption and it's retention.
                            </p>
                        </div>
                    </div>
                </section>

            </div>
        </div>
        <article>
            <div class="wrapper_content">
                <section class="rf_content">
                    <div class="section_name"><span>2 / 6</span> Introduction</div>

                    <div class="rf_paragraph">
                        <pre><span>01</span> Industry background</pre>
                        <h2>What is it and <span class="highlight_blue--light">who is it for?</span></h2>
                        <p>
                            Let’s jump into the MSP world. Imagine you are an IT expert and your job is to manage
                            backups of all customers. Your company has dozen of big customers. Each of them has multiple
                            sites and each site has hundreds of devices. The new ransomware attack has just happened.
                            You are hearing all these smart abbreviations <span class="abbr"
                                data-tooltip="Recovery Time Actual">RTA</span>,
                            <span class="abbr" data-tooltip="Recovery Time Objective">RTO</span> and <span class="abbr"
                                data-tooltip="Service Level Agreement">SLA</span> thresholds that you already breached.
                            Stress level is going up and on top of that, <b>your boss just told you that you have to
                                send a
                                weekly report to all our customers</b> in order to build the trust and show to clients
                            that data
                            are safe. How the hell to report the backup status of 10 000 devices? Run away... luckily
                            you don't have to, just click on “Schedule reports”.
                        </p>
                    </div>

                    <div class="rf_paragraph">
                        <pre><span>02</span> Understand the problem</pre>
                        <h2>Is the reporting important?</h2>
                        <p>
                            <b>“We need to show value”</b> we heard a lot from our customers at the last Empower
                            conference.
                            Because managing backups is a proactive type of work most of the time, which means that the
                            work is not visible until something bad happens. Therefore you have to regularly inform your
                            clients that their data are saved <b>―&nbspYes reporting is important. </b>
                        </p>
                    </div>
                </section>

                <section class="rf_content">
                    <div class="section_name"><span>3 / 6</span> Ideation</div>
                    <div class="rf_paragraph">
                        <pre><span>03</span> Challenge</pre>
                        <h2>Quick fix or redesign?</h2>
                        <p>
                            Actually the system already had reporting feature, but it was accessible only for the
                            internal users (IT Experts). From the product perspective, this feature would have the
                            potential to significantly increase customer retention. But how to make the right thing
                            right? On the kick-off meeting was proposed an idea that we will add one more selection,
                            where the user will be able to choose the customer or some other report recipient and the
                            problem will be solved. Would a new selectbox really solve the problem? Sometimes even a
                            small UI change can be a huge win, but this wasn’t the case. I've created a quick mockup
                            (See below) but it didn’t work well. Why?
                        </p>
                        <ol>

                            <li>It was ambiguous and insecure - the user will not know who will receive what and you
                                don't want to accidentally send sensitive data of customer A to customer B. </li>
                            <li>What does the checkbox do “send even if no devices match the selection”</li>
                            <li>Current report functionality was almost invisible for users</li>
                        </ol>
                    </div>
                    <figure class="bluebg">
                        <img srcset="img/case-study/proof-of-value/backup-2@1x.png 1x, img/case-study/proof-of-value/backup-2@2x.png 2x"
                            alt="Mockup demonstrates the problems we had" loading="lazy">
                        <figcaption>Mockup demonstrates the problems</figcaption>
                    </figure>

                    <div class="rf_paragraph">
                        <p>
                            Were we sure that this page worked well? No, with the team we agreed that we need to do
                            proper user research to find out who is using the current version of reporting and how. I
                            had available data in Google Analytics + and data from the database. Data told us that:
                        </p>
                        <ul>
                            <li>Users almost didn’t click on “Email view button”</li>
                            <li>The majority of users didn't have any existing report</li>
                            <li>The users who used reporting had less than 6 reports in the system.</li>
                        </ul>
                        <p>It leads me to set up following assumptions and based on that I started designing a prototype
                        </p>
                        <ul>
                            <li>User doesn't know about reporting feature in the product.</li>
                            <li>Users need to have an option to add a new user role that will receive only the reports.
                            </li>
                            <li>The user needs to see at a glance who will receive what.</li>
                        </ul>
                    </div>
                </section>

                <section class="rf_content">
                    <div class="section_name"><span>4 / 6</span> Validation</div>

                    <div class="rf_paragraph">
                        <pre><span>04</span> Designing workflow</pre>
                        <h2>A few simple clicks</h2>
                        <p>
                            To create the report was required to go through many unintuitive steps. Naturally, the goal
                            was to build a workflow that would be really straightforward, which will reduce the number
                            of touchpoints and most critically which would streamline the report configuration. It turns
                            out that sending the weekly backup reports is really similar to sending an email campaign so
                            I decided to reuse the same workflow model as for email campaign and find out whether it
                            will be well accepted by our users. Firstly, I designed the high-level workflow to
                            demonstrate the directions where I wanted to go and get the PM, Engineering lead and PO
                            onboarded with this
                            idea.
                        </p>
                        <figure class="greybg">
                            <img srcset="img/case-study/proof-of-value/workflow@1x.png 1x, img/case-study/proof-of-value/workflow@2x.png 2x"
                                alt="Mockup demonsrates the problems we had" loading="lazy">
                            <figcaption>Proposed workflow <a href="img/case-study/proof-of-value/workflow-full.png"
                                    data-fancybox="gallery" class="link">See detail</a></figcaption>
                        </figure>
                    </div>

                    <div class="rf_paragraph">
                        <pre><span>05</span> User testing</pre>
                        <h2>Creating prototype</h2>
                        <p>
                            The next step was to create the prototype and validate it with the customers. Don’t fall in
                            love with your first idea! I sketched three variations of UI on the paper to see which idea
                            can work and which will get the red flag. Thanks to the design system I designed the main UI
                            parts and discussed that with the designers from the different company tribes who were not
                            biased with our problems. This quick design review highlighted workflow inefficiencies. With
                            Lynne (Senior designer in Scotland) we discussed possible solutions. We called this exercise
                            DualDesign<sup>TM.</sup> We usually jump on the video call or chat and discussed the problem
                            we had and sketched immediately the ideas. We did that on a daily bases. Thanks to this
                            design activity we were able to rapidly innovate and push the product forward.
                        </p>
                    </div>
                </section>
            </div>

            <div class="rf_bp_prototypeflow">
                <figure>
                    <img srcset="img/case-study/proof-of-value/prototype@1x.png 1x, img/case-study/proof-of-value/prototype@2x.png 2x"
                        alt="Mockup demonsrates the problems we had" loading="lazy">
                </figure>
            </div>

            <div class="wrapper_content">
                <section class="rf_content">
                    <div class="rf_paragraph">
                        <p>
                            I've created the clickable prototype, wrote down the testing scenarios and together with
                            Senior researcher conducted the moderated usability session with five customers. We invited
                            PMs, Tech lead and people from development team to see the user reactions. The obvious
                            problems I solved immediately and get the updated prototype ready for the next session. What
                            was the feedback?
                        </p>
                        <ul>
                            <li>I want this feature, can you tell me when it is ready?</li>
                            <li>It would save me lots of trouble. I really like it</li>
                            <li>You are listening, that is awesome. </li>
                        </ul>
                        <p> Customers confirmed the assumptions and provided another valuable feedback which helps to
                            improve the design even more.
                        </p>
                    </div>
                </section>
            </div>

            <div class="rf_slideshow">
                <ul class="case_slideshow">
                    <li>
                        <div>
                            <figure>
                                <img srcset="img/case-study/proof-of-value/slideshow/1a@1x.png 1x, img/case-study/proof-of-value/slideshow/1a@2x.png 2x"
                                    alt="Mockup demonsrates the problems we had" loading="lazy">
                                <figcaption>01 Report configuration</figcaption>
                            </figure>
                            <figure>
                                <img srcset="img/case-study/proof-of-value/slideshow/1b@1x.png 1x, img/case-study/proof-of-value/slideshow/1b@2x.png 2x"
                                    alt="Mockup demonsrates the problems we had" loading="lazy">
                                <figcaption>02 Data source selection</figcaption>
                            </figure>
                        </div>
                    </li>
                    <li>
                        <div>
                            <figure>
                                <img srcset="img/case-study/proof-of-value/slideshow/2a@1x.png 1x, img/case-study/proof-of-value/slideshow/2a@2x.png 2x"
                                    alt="Mockup demonsrates the problems we had" loading="lazy">
                                <figcaption>03 Data validation</figcaption>
                            </figure>
                            <figure>
                                <img srcset="img/case-study/proof-of-value/slideshow/2b@1x.png 1x, img/case-study/proof-of-value/slideshow/2b@2x.png 2x"
                                    alt="Mockup demonsrates the problems we had" loading="lazy">
                                <figcaption>04 Recipient list</figcaption>
                            </figure>
                        </div>
                    </li>
                    <li>
                        <div>
                            <figure>
                                <img srcset="img/case-study/proof-of-value/slideshow/3a@1x.png 1x, img/case-study/proof-of-value/slideshow/3a@2x.png 2x"
                                    alt="Mockup demonsrates the problems we had" loading="lazy">
                                <figcaption>05 Recipient selection</figcaption>
                            </figure>
                            <figure>
                                <img srcset="img/case-study/proof-of-value/slideshow/3b@1x.png 1x, img/case-study/proof-of-value/slideshow/3b@2x.png 2x"
                                    alt="Mockup demonsrates the problems we had" loading="lazy">
                                <figcaption>06 Recipient filtering</figcaption>
                            </figure>
                        </div>
                    </li>
                    <li>
                        <div>
                            <figure>
                                <img srcset="img/case-study/proof-of-value/slideshow/4a@1x.png 1x, img/case-study/proof-of-value/slideshow/4a@2x.png 2x"
                                    alt="Mockup demonsrates the problems we had" loading="lazy">
                                <figcaption>07 Adding new recipient</figcaption>
                            </figure>
                            <figure>
                                <img srcset="img/case-study/proof-of-value/slideshow/4b@1x.png 1x, img/case-study/proof-of-value/slideshow/4b@2x.png 2x"
                                    alt="Mockup demonsrates the problems we had" loading="lazy">
                                <figcaption>08 New recipient added</figcaption>
                            </figure>
                        </div>
                    </li>
                    <li>
                        <div>
                            <figure>
                                <img srcset="img/case-study/proof-of-value/slideshow/5a@1x.png 1x, img/case-study/proof-of-value/slideshow/5a@2x.png 2x"
                                    alt="Mockup demonsrates the problems we had" loading="lazy">
                                <figcaption>09 Selection validation</figcaption>
                            </figure>
                            <figure>
                                <img srcset="img/case-study/proof-of-value/slideshow/5b@1x.png 1x, img/case-study/proof-of-value/slideshow/5b@2x.png 2x"
                                    alt="Mockup demonsrates the problems we had" loading="lazy">
                                <figcaption>10 Setting overview</figcaption>
                            </figure>
                        </div>
                    </li>
                    <li>
                        <div>
                            <figure>
                                <img srcset="img/case-study/proof-of-value/slideshow/6a@1x.png 1x, img/case-study/proof-of-value/slideshow/6a@2x.png 2x"
                                    alt="Mockup demonsrates the problems we had" loading="lazy">
                                <figcaption>11 Adding new recipient</figcaption>
                            </figure>
                            <figure>
                                <img srcset="img/case-study/proof-of-value/slideshow/6b@1x.png 1x, img/case-study/proof-of-value/slideshow/6b@2x.png 2x"
                                    alt="Mockup demonsrates the problems we had" loading="lazy">
                                <figcaption>12 Saving configuration</figcaption>
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
                    <div class="section_name"><span>5 / 6</span> Improvements</div>
                    <div class="wrapper_content">
                        <div class="rf_paragraph">
                            <pre><span>06</span> Finalizing</pre>
                            <h2>Fine tuning</h2>
                            <p>
                                The design was on the right track, we found out the problematic areas. I know how the
                                experience should look like in order to satisfy user needs and met the business goals.
                                At this stage, I started focusing on the details which were about preparing
                                pixel-perfect mockups, interaction behavior and micro-interaction examples to be ready
                                for the hand-off.
                            </p>
                        </div>

                    </div>
                    <div class="two_columns">
                        <div class="first_column">
                            <div class="stickercol">
                                <h2>Feature adoption</h2>
                                <p>
                                    There was plenty of room for improvement in feature onboarding area. I wanted to
                                    start at least with small improvements. Display “New” badge telling the user there
                                    is something new you can explore. Having the info icons which can explain details
                                    and provide a clear understanding. Having the empty state which will explain by
                                    animation what is this feature about even if nothing is here. It would have a
                                    positive impact on feature adoption = making sure that we as the team didn't waste
                                    resources.
                                </p>
                            </div>
                        </div>
                        <div class="second_column">
                            <video class="elevation1" width="100%" video="100%" style="width:100%, height:100%"
                                playsinline autoplay muted loop
                                poster="img/case-study/proof-of-value/empty_state.png" style="border-radius: 0px;">
                                <source src="img/case-study/proof-of-value/empty_state.mp4" type="video/mp4">
                                <source src="img/case-study/proof-of-value/empty_state.webm" type="video/webm">
                            </video>
                            <figcaption>Empty state with onboarding video <a
                                    href="img/case-study/proof-of-value/empty_state.mp4" data-fancybox="gallery"
                                    class="link">See detail</a></figcaption>

                            <figure>
                                <img class="elevation1"
                                    srcset="img/case-study/proof-of-value/badge-zoom@1x.png 1x, img/case-study/proof-of-value/badge-zoom@2x.png 2x"
                                    alt="Mockup demonsrates the problems we had" loading="lazy">
                                <figcaption>Feature highlight by "NEW" badge<a
                                        href="img/case-study/proof-of-value/badge-zoom--big.png" data-fancybox="gallery"
                                        class="link">See detail</a></figcaption>
                            </figure>
                            <figure>
                                <img class="elevation1"
                                    srcset="img/case-study/proof-of-value/feature_info@1x.png 1x, img/case-study/proof-of-value/feature_info@2x.png 2x"
                                    alt="Mockup demonsrates the problems we had" loading="lazy">
                                <figcaption>Feature description <a
                                        href="img/case-study/proof-of-value/workflow-full.png" data-fancybox="gallery"
                                        class="link">See detail</a></figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="wrapper_content">
                        <div class="rf_paragraph">
                            <h2>Selecting the report recipients</h2>
                            <p>
                                This part was quite hard because the data structure is usually quite heavy and hard for
                                orientation. Distributors have sellers, sellers have re-sellers, re-sellers have
                                customers, customers have sites. Each site has different users. Therefore there needed
                                to be options to have a quick selection by a specific customer, have the option to
                                filter out the roles, and have a quick option to add new recipients in order to stay in
                                the same user flow. Long story short - see the interaction.
                            </p>
                        </div>
                        <video class="elevation1 videofix1" width="100%" video="100%" style="width:100%, height:100%"
                            controls playsinline autoplay muted loop>
                            poster="img/case-study/proof-of-value/empty_state.png" style="border-radius: 0px;">
                            <source src="img/case-study/proof-of-value/select_recipients.mp4" type="video/mp4">
                            <source src="img/case-study/proof-of-value/select_recipients.webm" type="video/webm">
                        </video>
                        <figcaption>Process of selecting recipients<a
                                href="img/case-study/proof-of-value/select_recipients.mp4" data-fancybox="gallery"
                                class="link">See detail</a></figcaption>

                    </div>

                    <div class="two_columns btm">
                        <div class="first_column">
                            <div class="stickercol">
                                <h2>Email report</h2>
                                <p>
                                    What will be delivered to the end customer? It would be a responsive email report
                                    where would be visible the backup status of devices and another related statistic.
                                </p>
                                <p>
                                    We wanted also to redesign the emails as part of a cohesive experience. It was
                                    parked in our usability backlog for a long time. Luckily this project and user
                                    feedback justified this need. I designed the new email template and code it in HTML
                                    to demonstrate the live version and its feasibility. In order to ensure consistency
                                    across our product portfolio, I also handle the specification and the guidelines for
                                    our company design system.
                                </p>
                            </div>

                        </div>
                        <div class="second_column">
                            <figure>
                                <img class="elevation1"
                                    srcset="img/case-study/proof-of-value/email_report@1x.png 1x, img/case-study/proof-of-value/email_report@2x.png 2x"
                                    alt="Mockup demonsrates the problems we had" loading="lazy">
                                <figcaption>Report email for customer<a
                                        href="img/case-study/proof-of-value/badge-zoom--big.png" data-fancybox="gallery"
                                        class="link">See detail</a></figcaption>
                            </figure>
                        </div>
                    </div>
                </section>
            </div>

            <div class="wrapper_content">
                <section class="rf_content">
                    <div class="section_name"><span>6 / 6</span> Conclusion</div>

                    <div class="rf_paragraph">
                        <pre><span>07</span> KPI & Success metrics</pre>
                        <h2>Is it successful?</h2>
                        <p>
                            I can't really tell you, because the development was planned for mid of 2020 and meanwhile I
                            decided to accept design challenges in another company. In the normal situation, I would set
                            up tracking via Google Analytics and Tag Manager and compare the usage of new reporting
                            features with the old one and request further customer feedback. It would be also
                            interesting to check whether this feature affected the NPS score or not.
                        </p>
                    </div>

                    <div class="rf_paragraph">
                        <pre><span>08</span> Conclusion</pre>
                        <h2>What did I learn?</h2>
                        <p>
                            I invited Pms, Leads, and people from the development team to see the user feedback. Once
                            people saw satisfaction and user enthusiasm the push back <b>suddenly disappear</b> even
                            thought that the initial vision was different and project scope smaller.
                        </p>
                        <p class="text-highlight">The data-driven design process and real customer insight saves you a
                            lot of time with convincing people and provides the backup for potential opinions fights.
                        </p>
                        <p>An important fact on the design is to know when to stop. I could continue with improvements,
                            but it would change the scope and increase the risk of not delivering it on the time. So I
                            took the step back and kept the other ideas for the next iteration. 💪</p>
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