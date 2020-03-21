<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="{{asset('')}}">
	<!-- Animate.css -->
	<link rel="stylesheet" href="public/frontend/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="public/frontend/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="public/frontend/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="public/frontend/css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="public/frontend/css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="public/frontend/css/owl.carousel.min.css">
	<link rel="stylesheet" href="public/frontend/css/owl.theme.default.min.css">

	<!-- Date Picker -->
	<link rel="stylesheet" href="public/frontend/css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="public/frontend/fonts/flaticon/font/flaticon.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="public/frontend/css/custome.css">
	<link rel="stylesheet" href="public/frontend/css/style.css">
    <link rel="stylesheet" href="public/frontend/css/app.css">
    <link rel="stylesheet" href="{{url('public/plugins/bootstrap/dist/css/bootstrap.min.css')}}">

	<!-- Modernizr JS -->
	<!-- <script src="public/frontend/public/frontend/js/modernizr-2.6.2.min.js"></script> -->

</head>

<body>
       
    {{-- header --}}
    @include('frontend.master.header')

    @yield('content')

    {{-- footer --}}
    @include('frontend.master.footer')
  
 @section('script')
        <!-- jQuery -->
    <script src="public/frontend/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="public/frontend/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="public/frontend/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="public/frontend/js/jquery.waypoints.min.js"></script>
    <!-- Flexslider -->
    <script src="public/frontend/js/jquery.flexslider-min.js"></script>
    <!-- Owl carousel -->
    <script src="public/frontend/js/owl.carousel.min.js"></script>
    <!-- Magnific Popup -->
    <script src="public/frontend/js/jquery.magnific-popup.min.js"></script>
    <script src="public/frontend/js/magnific-popup-options.js"></script>
    <!-- Date Picker -->
    <script src="public/frontend/js/bootstrap-datepicker.js"></script>
    <!-- Stellar Parallax -->
    <script src="public/frontend/js/jquery.stellar.min.js"></script>
    <!-- Main -->
    <script src="public/frontend/js/main.js"></script>
    <script src="public/frontend/public/frontend/js/modernizr-2.6.2.min.js"></script>

    <script src="{{url('public/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- <script src="{{url('public/plugins/jquery/dist/jquery.min.js')}}"></script> -->
 @show

</body>

</html>  


        






        