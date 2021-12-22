<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--====== Title ======-->
        <title>RESTAURANTE FULITU</title>

        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/png">

        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

        <!--====== Fontawesome css ======-->
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

        <!--====== Line Icons css ======-->
        <link rel="stylesheet" href="{{asset('assets/css/LineIcons.css')}}">

        <!--====== Animate css ======-->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

        <!--====== Aos css ======-->
        <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">

        <!--====== Slick css ======-->
        <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">

        <!--====== Default css ======-->
        <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">

        <!--====== Style css ======-->
        <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    </head>
    <body class="antialiased">
    <div class="header-section">
        <x-navbar />
    </div>
{{--    <x-header />--}}

    <!--====== jquery js ======-->
    <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!--====== WOW js ======-->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="{{ asset('assets/js/scrolling-nav.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>

    <!--====== Aos js ======-->
    <script src="{{ asset('assets/js/aos.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
