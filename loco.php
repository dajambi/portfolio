<!DOCTYPE html>
<?php include('_partials/spy.php') ?>
<html lang="en" dir="ltr"  prefix="og: http://ogp.me/ns#">


<head>
    <?php include('_partials/meta-links.php') ?>


    <meta name="description"
        content="About me - 🤘I am Digital Product (UI/UX/IxD) designer with a passion for function design and with one rule in mind - Design is everything.">
    <meta name="keywords"
        content="ux designer,ux design,ux, user interface design, ui design, ux research,ui ix designer, interaction designer, user experience, mobile app design">
    <title>About me - David Jambor - Digital product (UI/UX/IxD) designer 🤘</title>

</head>



<body>
    <main>
        <section>
            <div data-scroll-container>
                <div class="loco" data-scroll-section>
                    <div>
                    <h1 class="left-h1" data-scroll data-scroll-direction="horizontal" data-scroll-speed="-3" data-scroll-class="appear" data-scroll-repeat="true">Beautiful Holiday Destinations</h1>
                    <p data-scroll data-scroll-direction="horizontal" data-scroll-speed="6">👋</p>
                    </div>
                </div>
                <div class="loco" data-scroll-section>
                    <div>
                    <h2 data-scroll data-scroll-speed="1">Looks like rain</h2>
                    <p data-scroll data-scroll-speed="2">🌧</p>
                    </div>
                </div>
                <div class="loco" data-scroll-section>
                    <div>
                    <h2 data-scroll data-scroll-speed="1">Have an apple</h2>
                    <p data-scroll data-scroll-direction="horizontal" data-scroll-speed="3">🍎</p>
                    </div>
                </div>
            </div>
        </section>


    </main>



	<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.min.js" crossorigin></script>
	<script>
        const scroller = new LocomotiveScroll({
        el: document.querySelector('[data-scroll-container]'),
        smooth: true,
        multiplier: 5
        });
    </script>

</body>

</html>