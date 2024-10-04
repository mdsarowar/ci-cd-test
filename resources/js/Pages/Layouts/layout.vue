<script setup>
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <div>
        <Head>
            <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
<!--            <title>Index - MyResume Bootstrap Template</title>-->
            <meta content="" name="description">
            <meta content="" name="keywords">

<!--            &lt;!&ndash; Favicons &ndash;&gt;-->
<!--            <link href="/assets/img/favicon.png" rel="icon">-->
<!--            <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->

<!--            &lt;!&ndash; Fonts &ndash;&gt;-->
<!--            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">-->

<!--            &lt;!&ndash; Vendor CSS Files &ndash;&gt;-->
<!--            <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
<!--            <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">-->
<!--            <link href="/assets/vendor/aos/aos.css" rel="stylesheet">-->
<!--            <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">-->
<!--            <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">-->

<!--            &lt;!&ndash; Main CSS File &ndash;&gt;-->
<!--            <link href="/assets/css/main.css" rel="stylesheet">-->
        </Head>

        <body class="index-page">
        <header id="header" class="header d-flex flex-column justify-content-center">
            <i class="header-toggle d-xl-none bi bi-list"></i>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i><span>Home</span></a></li>
                    <li><a href="#about"><i class="bi bi-person navicon"></i><span>About</span></a></li>
                    <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i><span>Resume</span></a></li>
                    <li><a href="#portfolio"><i class="bi bi-images navicon"></i><span>Portfolio</span></a></li>
                    <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i><span>Services</span></a></li>
                    <li><a href="#contact"><i class="bi bi-envelope navicon"></i><span>Contact</span></a></li>
                </ul>
            </nav>
        </header>

        <main class="main">
            <slot></slot>
        </main>

        <footer id="footer" class="footer position-relative light-background">
            <div class="container">
                <h3 class="sitename">Brandon Johnson</h3>
                <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
                <div class="social-links d-flex justify-content-center">
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-skype"></i></a>
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
                <div class="container">
                    <div class="copyright">
                        <span>Copyright</span> <strong class="px-1 sitename">Alex Smith</strong> <span>All Rights Reserved</span>
                    </div>
                    <div class="credits">
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
            <i class="bi bi-arrow-up-short"></i>
        </a>

        <!-- Preloader -->
<!--        <div id="preloader"></div>-->


        </body>
    </div>
</template>

<style scoped>
/* আপনার CSS কোড এখানে দিন */
</style>
