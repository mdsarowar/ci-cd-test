<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])

        <!-- Favicons -->
        <link href="{{asset('/')}}assets/img/favicon.png" rel="icon">
        <link href="{{asset('/')}}assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">


        <!-- Vendor CSS Files -->
        <link href="{{asset('/')}}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{asset('/')}}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="{{asset('/')}}assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="{{asset('/')}}assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="{{asset('/')}}assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Main CSS File -->
        <link href="{{asset('/')}}assets/css/main.css" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


        <!-- In your main HTML file (usually app.blade.php) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia


        <!-- Vendor JS Files -->
        <script src="{{asset('/')}}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('/')}}assets/vendor/php-email-form/validate.js"></script>
        <script src="{{asset('/')}}assets/vendor/aos/aos.js"></script>
        <script src="{{asset('/')}}assets/vendor/typed.js/typed.umd.js"></script>
        <script src="{{asset('/')}}assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="{{asset('/')}}assets/vendor/waypoints/noframework.waypoints.js"></script>
        <script src="{{asset('/')}}assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="{{asset('/')}}assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="{{asset('/')}}assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="{{asset('/')}}assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Main JS File -->
        <script src="{{asset('/')}}assets/js/main.js"></script>
    </body>
</html>
