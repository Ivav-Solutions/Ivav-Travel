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
    <link rel="stylesheet" href="{{URL::asset('build/css/intlTelInput.css')}}">
    <link rel="stylesheet" href="{{URL::asset('build/css/demo.css')}}">

    <title>{{config('app.name')}}</title>

    <link rel="icon" type="image/png" href="{{URL::asset('assets/img/favicon.png')}}">

    {!! NoCaptcha::renderJs() !!}
    
    <script type="text/javascript">
        function show(str) {
            document.getElementById('display_box').style.display = 'none';
        }

        function show2(sign) {
            document.getElementById('display_box').style.display = 'block';
        }

        function show1(str) {
            document.getElementById('show_box').style.display = 'none';
        }

        function show3(sign) {
            document.getElementById('show_box').style.display = 'block';
        }

        function display(str) {
            document.getElementById('city').style.display = 'none';
        }

        function display2(sign) {
            document.getElementById('city').style.display = 'block';
        }

        function course(str) {
            document.getElementById('reference').style.display = 'none';
        }

        function course2(sign) {
            document.getElementById('reference').style.display = 'block';
        }

        window.setTimeout(function() {
            $(".alert-timeout").fadeTo(500, 0).slideUp(1000, function() {
                $(this).remove();
            });
        }, 11000);

    </script>

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
    <script type="text/javascript" src="{{URL::asset('assets/js/script.js')}}"></script>
    <script src="{{URL::asset('build/js/intlTelInput.js')}}"></script>
    
    <script>
        var input = document.querySelector("#phone");
        var phone = document.querySelector("#phone_number");
        window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            utilsScript: "{{URL::asset('build/js/utils.js')}}",
        });
        window.intlTelInput(phone, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            utilsScript: "{{URL::asset('build/js/utils.js')}}",
        });
    </script>
</body>

</html>