<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<!--[if IE]>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->

<head>
    <?php include('_partials/meta-links.php') ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="description"
        content="I am Digital Product (UI/UX/Ix) designer with a passion for function design and with one rule in mind - Design is everything.">
    <meta name="keywords"
        content="ux designer,ux design,ux, user interface design, ui design, ux research,ui ix designer, interaction designer, user experience, mobile app design">
    <title>David Jambor - Protected case study</title>
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

            <div class="welcome">Protected</div>

            <?php include('_partials/menu-icon.php')?>
            <?php include('_partials/navigation.php')?>


            <div id="header_center">
                <div class="h1_responsive">I'm happy you want <span class="highlight_blue">to see it.</span></div>
                <p>
                    This case study is still private. If you want to see it <a href="#hs-chat-open"
                        class="link odkaz anim-middleout fake-link">just let me know</a> and I will provide a password.
                </p>
                <form method="POST" id="password_form">
                    <label for="password">Password</label>

                    <div class="container-password">
                        <div class="hidden">
                            </svg>
                            <input type="password" placeholder="Enter the password…" name="password" id="password_input" class="hidden-input" />
                        </div>
                        <div class="revealed">
                            <input placeholder="Enter the password…" name="password" id="password_input" class="revealed-input" />
                        </div>
                        <div class="button link">
                            <svg class="eye" width="36" height="36" viewBox="0 0 72 72">
                                <path class="eye-lower"
                                    d="M 15.6,37 C 15.6,37 24.309181,49.073101 34.102911,49.166773 43.896641,49.260445 53.4,37 53.4,37" />
                                <circle r="6" cy="36" cx="34.400002" class="eye-iris" />
                                <path class="eye-lid"
                                    d="M -5,-5 V 37 H 15.6 C 15.6,37 25.327177,48.715274 34.312131,48.785 43.297085,48.854726 53.4,37 53.4,37 H 77 V -5 Z" />
                                <g class="eye-lashes">
                                    <path class="eye-lash" d="M 17.45627,17.07484 24.778981,25.652873" />
                                    <path class="eye-lash" d="M 34.602,12.600574 V 23.601076" />
                                    <path class="eye-lash" d="M 51.580203,17.07484 44.257492,25.652873" />
                                </g>
                            </svg>
                        </div>
                    </div>

                    <?php if( $_SERVER['REQUEST_METHOD'] == 'POST' ) { ?>
                    <span class="error">⚠️ Wrong password. Try it again...</span>
                    <script>
                    $("#password_input").css("border", "1px solid #BA0569");
                    </script>
                    <?php } ?>
                    <button class="link" type="submit">Confirm password</button>
                </form>

            </div>
        </div>
    </header>
    <?php include('_partials/footer-links.php')?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.0/anime.min.js"></script>
    <script src="js/password.js"></script>
</body>

</html>

<!-- <input type="password" placeholder="Enter the password…" name="password" id="password_input"> -->