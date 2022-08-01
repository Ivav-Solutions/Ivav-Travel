<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/showMoreItems-theme.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/remixicon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/responsive.css')}}">

    <title>{{config('app.name')}}</title>

    <link rel="icon" type="image/png" href="{{URL::asset('assets/img/favicon.png')}}">

</head>
    <body>

    <!--SECTION: TOP NAV-->
    @yield('nav')

    <!-- SECTION: HEADER BANNER -->
    @yield('banner')

    <!-- Breadcrumb -->
    @yield('breadcrumb')
    
    <!-- Page-Content -->
    @yield('page-content')

    <!-- SECTION: FOOTER -->
    @includeIf('layouts.footer')
    
    <!-- SECTION: GO TO TOP -->
    <section>
        <div class="go-to-top">
            <a href="#">
                <span>Top</span>
                <i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
        </div>
    </section>

    <div class="go-top"><i class="ri-arrow-up-s-line"></i></div>

        <!-- Links of JS files -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/appear.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/odometer.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/magnific-popup.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/mixitup.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/meanmenu.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/showMoreItems.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/wow.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/form-validator.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/contact-form-script.js')}}"></script>
        <script src="{{URL::asset('assets/js/ajaxchimp.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/main.js')}}"></script>
    </body>

</html>