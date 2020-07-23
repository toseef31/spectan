<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/frontend-assets/img/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/nice-select.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/gijgo.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/slicknav.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend-assets/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    @yield('styling')
</head>
  <body>
    @include('frontend.includes.header')
    	@yield('content')
    @include('frontend.includes.footer')
    <!-- JS here -->
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/isotope.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/ajax-form.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/jquery.counterup.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/scrollIt.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/jquery.scrollUp.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/nice-select.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/jquery.slicknav.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/gijgo.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/slick.min.js')}}"></script>
    <!--contact js-->
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/contact.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/jquery.form.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/mail-script.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/frontend-assets/js/main.js')}}"></script>
    @yield('script')
    <script>
    </script>
  </body>
</html>
