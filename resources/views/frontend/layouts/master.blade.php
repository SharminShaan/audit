<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{$seeting->sitename}}</title>
        <meta name="description" content="ISLAM AFTAB KAMRUL CO. Chartered Accountants">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/logo.png') }}">
        <!-- Place favicon.ico in the root directory -->
        <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/odometer.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/jarallax.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}">
    </head>
    <body>

        <!-- Scroll-top-end-->
        @include('frontend.partials.header')
        <!-- main-area  start-->
        <main class="fix">

            @yield('content')

        </main>
        <!-- main-area-end -->
      @include('frontend.partials.footer')
      <script src="https://kit.fontawesome.com/230a51e61c.js" crossorigin="anonymous"></script>
        <!-- JS here -->
        <script src="{{ asset('frontend/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.odometer.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.appear.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/gsap.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/ScrollTrigger.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/SplitText.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/gsap-animation.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jarallax.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.parallaxScroll.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/particles.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.easypiechart.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.inview.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/ajax-form.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
        <!-- slider carousel -->
        {{-- <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script> --}}
        <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    </body>
</html>
