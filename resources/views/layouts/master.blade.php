<!DOCTYPE html>
<html class="loading">
<!-- BEGIN: Head-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name') }}</title>
    {{-- <link rel="apple-touch-icon" href="{{ asset('images/ico/apple-icon-120.png') }}"> --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Bootstrap Icon CSS -->
    <link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet">
    <!-- Fontawesome all CSS -->
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">

    <!-- Fontawesome CSS -->
    <link href="{{ asset('assets/css/fontawesome.min.css') }}" rel="stylesheet">
    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <!-- BoxIcon  CSS -->
    <link href="{{ asset('assets/css/boxicons.min.css') }}" rel="stylesheet">
    <!--  Style CSS  -->
    <link rel="stylesheet" href="{{ asset('assets/css/preloader.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">

    @yield('head-section')

    @yield('vendor-styles')
    @yield('page-styles')


</head>
<!-- END: Head-->

<!-- END: Body-->

<body>

    <!-- Preloader Start -->
    <div class="preloader">
        <div id="particles-background" class="vertical-centered-box"></div>
        <div id="particles-foreground" class="vertical-centered-box"></div>

        <div class="vertical-centered-box">
            <div class="content">
                <div class="loader-circle"></div>
                <div class="loader-line-mask">
                    <div class="loader-line"></div>
                </div>
                <svg width="50" height="50" viewBox="0 0 40 38" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M31.5875 7.80132C26.1756 2.71548 18.9772 3.33531 13.0177 7.36702C12.9433 7.45181 12.4808 7.69025 12.9963 6.94836C24.4371 -5.54919 45.4795 11.5151 33.7252 25.7347C36.3568 20.0872 37.0161 12.9032 31.5879 7.80144L31.5875 7.80132Z"
                        fill="#06D889" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M26.7504 1.91075C8.15888 -3.63601 -7.81139 25.1051 12.8958 38C-10.3418 27.992 1.07241 -2.40195 21.5296 0.151704C23.1991 0.358215 25.7562 1.14769 26.7503 1.91051L26.7504 1.91075Z"
                        fill="#06D889" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M31.656 20.3691C31.656 26.5676 26.6425 31.6058 20.4701 31.6058C14.2923 31.6058 9.2793 26.5675 9.2793 20.3691C9.2793 14.1705 14.2928 9.13232 20.4701 9.13232C26.6425 9.13232 31.656 14.1706 31.656 20.3691ZM12.2671 21.8578C11.4325 23.1348 12.4106 26.377 15.3081 28.2948C18.1789 30.2125 21.8579 30.0695 22.7139 28.7876C23.5485 27.5373 21.7676 28.3426 18.514 27.1345C13.1444 25.1426 13.0966 20.5759 12.2671 21.8578Z"
                        fill="#06D889" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M38.395 13.1796C46.0027 27.7854 24.886 46.5405 10.1649 33.2636C8.28281 31.579 7.45359 29.9525 6.08203 27.8385C17.5284 43.6315 42.7177 31.1549 38.1986 13.4121C38.0338 12.7603 38.1402 12.7021 38.3952 13.179L38.395 13.1796Z"
                        fill="#06D889" />
                </svg>
            </div>
        </div>

    </div>
    <!-- Preloader End -->
    <!-- Header-->
    @include('layouts.header')
    <!-- END: Header-->

    @if (isset($breadcrumbs))
        @include('panels.breadcrumbs')
    @endif

    <!-- BEGIN: Content-->
    @yield('content')
    <!-- END: Content-->

    {{-- Begin: Footer --}}
    @include('layouts.footer')
    {{-- End: Footer --}}

    <!-- BEGIN: Vendor JS-->
    <script>
        var assetBaseUrl = "{{ asset('') }}";
    </script>

    <!-- BEGIN Vendor JS-->
    <!-- BEGIN: Page Vendor JS-->
    @yield('vendor-scripts')
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Theme JS-->
    <!--  Main jQuery  -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Popper and Bootstrap JS -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Swiper slider JS -->
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <!-- Counterup JS -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Isotope  JS -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Fancybox  JS -->
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <!-- GSAP  JS -->
    <script src="{{ asset('assets/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/js/simpleParallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/TweenMax.min.js') }}"></script>
    <!-- Marquee  JS -->
    <script src="{{ asset('assets/js/jquery.marquee.min.js') }}"></script>
    <!-- Wow JS -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/js/preloader.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- END: Theme JS-->
    <!-- BEGIN: Page JS-->
    @yield('page-scripts')
    <!-- END: Page JS-->


    <script type="text/javascript">
        @include('panels.flash')
    </script>
</body>
<!-- END: Body-->

</html>
