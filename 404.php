<!DOCTYPE html>
<html lang="en" dir="ltr" prefix="og: http://ogp.me/ns#">
<!--[if IE]>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->

<head>
	<?php include('_partials/loading.php') ?>
    <?php include('_partials/meta-links.php') ?>

    <meta name="description"
        content="I am Digital Product (UI/UX/Ix) designer with a passion for functional design and with one rule in mind - Design is everything.">
    <meta name="keywords"
        content="ux designer,ux design,ux, user interface design, ui design, ux research,ui ix designer, interaction designer, user experience, mobile app design">
    <title>David Jambor - 404 - page doesn't exist</title>
</head>
<?php include('_partials/tag-manager.php') ?>

<body class="custom_cursor">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5C8Z76X" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="cursor cursor--small"></div>
    <canvas class="cursor cursor--canvas" resize></canvas>

    <header id="error_page">
        <div id="gradient">
        </div>
        <div id="error_page" class="container">
            <div class="logo">
                <a href="https://www.davidjambor.cz"><img src="./img/logo.svg"
                        alt="Digital product (UI/UX/Ix) designer"></a>
            </div>

            <div class="welcome">Damn, this is error page</div>

            <?php include('_partials/menu-icon.php')?>
            <?php include('_partials/navigation.php')?>


            <div id="header_center">
                <div class="h1_responsive">The page you were <br> looking for <span class="highlight_blue">doesn’t
                        exist.</span></div>
                <p>Go back to
                    <a href="https://www.davidjambor.cz/" class="link odkaz anim-middleout">homepage</a> or
                    <a href="mailto:ja@davidjambor.cz?subject=Hello%20David&body=Hello!%20I'd%20like%20to%20ask%20for..."  class="link odkaz anim-middleout">send me a message</a>
                    if you need to find something specific.
                </p>
                <video width="100%" video="100%" style="width:100%, height:100%" playsinline autoplay muted loop>
                    poster="img/404.png" style="border-radius: 0px;">
                    <source src="img/404.mp4" type="video/mp4">
                    <source src="img/404.webm" type="video/webm">
                </video>
            </div>
        </div>
    </header>
    <?php include('_partials/footer-links.php') ?>
</body>

</html>