<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <!-- Author -->
    <meta name="author" content="Avans Hogeschool | 42IN4SOi">
    <!-- description -->
    <meta name="description" content=""> {{-- TODO --}}
    <!-- keywords -->
    <meta name="keywords" content=""> {{-- TODO --}}
    <!-- Page Title -->
    <title>HBO-i</title>
    <!-- Favicon -->
    <link href="" rel="icon"> {{-- TODO --}}
    <!-- Bundle -->
    <link href="{{ asset('front-end/vendor/css/bundle.min.css') }}" rel="stylesheet">
    <!-- Plugin Css -->
    {{-- <link href="{{ asset('front-end/css/megamenu.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('front-end/css/line-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/vendor/css/revolution-settings.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/vendor/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/vendor/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/vendor/css/cubeportfolio.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/vendor/css/LineIcons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/css/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/vendor/css/wow.css" rel="stylesheet') }}">
    <!-- Style Sheet -->
    <link href="{{ asset('front-end/css/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('front-end/css/style.css') }}" rel="stylesheet">

    @livewireStyles

    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! htmlScriptTagJsApi() !!}
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Preloader -->
    {{-- <div class="preloader">
        <div class="center">
            <div class="loader loader-32">
                <div class='loader-container'>
                    <div class='ball-wrapper'>
                        <div class='ball-holder'>
                            <div class='ball'></div>
                        </div>
                        <div class='shadow'></div>
                    </div>
                    <div class='ball-wrapper'>
                        <div class='ball-holder'>
                            <div class='ball'></div>
                        </div>
                        <div class='shadow'></div>
                    </div>
                    <div class='ball-wrapper'>
                        <div class='ball-holder'>
                            <div class='ball'></div>
                        </div>
                        <div class='shadow'></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Preloader End -->

    <x-nav />

    @yield('content')
    
    <div class="mt-5">
        <x-contact />
    </div>

    <!--colored-lines-->
    <div class="color-lines row no-gutters">
        <div class="col-4 bg-red"></div>
        <div class="col-4 bg-purple"></div>
        <div class="col-4 bg-green"></div>
    </div>

    <x-footer />

    <!--Scroll Top Start-->
    <span class="scroll-top-arrow"><i class="fas fa-angle-up"></i></span>
    <!--Scroll Top End-->

    <!-- JavaScript -->
    <script src="{{ asset('front-end/vendor/js/bundle.min.js') }}"></script>
    <!-- Recaptcha -->
    <script src="{{ asset('https://www.google.com/recaptcha/api.js') }}"></script>
    <!-- Plugin Js -->
    <script src="{{ asset('front-end/vendor/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('front-end/vendor/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('front-end/vendor/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front-end/vendor/js/parallaxie.min.js') }}"></script>
    <script src="{{ asset('front-end/vendor/js/wow.min.js') }}"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="{{ asset('front-end/vendor/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('front-end/vendor/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('front-end/vendor/js/jquery.cubeportfolio.min.js') }}"></script>
    <!-- SLIDER REVOLUTION EXTENSIONS -->
    <script src="{{ asset('front-end/vendor/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('front-end/vendor/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('front-end/vendor/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('front-end/vendor/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('front-end/vendor/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('front-end/vendor/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('front-end/vendor/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('front-end/vendor/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('front-end/vendor/js/extensions/revolution.extension.video.min.js') }}"></script>
    <!-- google map-->
    <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJRG4KqGVNvAPY4UcVDLcLNXMXk2ktNfY"></script>-->
    <!--<script src="creative-startup/js/map.js"></script>-->
    <!--Tilt Js-->
    <script src="{{ asset('front-end/js/slick.js') }}"></script>
    <script src="{{ asset('front-end/js/slick.min.js') }}"></script>
    <!-- custom script-->
    <script src="{{ asset('front-end/js/circle-progress.min.js') }}"></script>

    <script src="{{ asset('front-end/vendor/js/contact_us.js') }}"></script>
    <script src="{{ asset('front-end/js/script.js') }}"></script>

    @livewireScripts

</body>

</html>
