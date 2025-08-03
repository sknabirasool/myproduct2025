<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.awaikenthemes.com/html-preview/weebix/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jan 2025 03:16:55 GMT -->
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Awaiken">
	<!-- Page Title -->
	<title>Build Your App</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&amp;display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="{{asset('web/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="{{asset('web/css/slicknav.min.css')}}" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="{{asset('web/css/swiper-bundle.min.css')}}">
	<!-- Font Awesome Icon Css-->
	<link href="{{asset('web/css/all.css')}}" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="{{asset('web/css/animate.css')}}" rel="stylesheet">
	<!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="{{asset('web/css/magnific-popup.css')}}">
	<!-- Main Custom Css -->
	<link href="{{asset('web/css/custom.css')}}" rel="stylesheet" media="screen">
</head>
<body class="tt-magic-cursor">

    <!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="{{asset('web/images/loader.svg')}}" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->

	<!-- Magic Cursor Start -->
	<div id="magic-cursor">
		<div id="ball"></div>
	</div>
	<!-- Magic Cursor End -->

    <!-- Header Start -->
	<header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Start -->
					<a class="navbar-brand" href="{{url('/')}}">
						{{-- <img src="{{asset('web/images/logo.svg')}}" alt="Logo"> --}}
					</a>
					<!-- Logo End -->

					<!-- Main Menu Start -->
					<div class="collapse navbar-collapse main-menu">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="about.html">Home</a></li>
                                {{-- <li class="nav-item submenu"><a class="nav-link" href="index-2.html">home</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="index.html">Hero Layout 1</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-3.html">Hero Layout 2</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-4.html">Hero Layout 3</a></li>
                                    </ul>
                                </li> --}}
                                <li class="nav-item"><a class="nav-link" href="{{url('/about')}}">about us</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/services')}}">services</a></li>
                                <li class="nav-item"><a class="nav-link" href="portfolio.html">portfolio</a></li>
                                <li class="nav-item"><a class="nav-link" href="blog.html">blog</a></li>
                                <li class="nav-item submenu"><a class="nav-link" href="#">pages</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="service-single.html">service details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="portfolio-single.html">portfolio details </a></li>
                                        <li class="nav-item"><a class="nav-link" href="blog-single.html">blog details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="faqs.html">FAQ</a></li>
                                        <li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item highlighted-menu"><a class="nav-link" href="contact-us.html">free consultation</a></li>
                            </ul>
                        </div>
                        <!-- Let’s Start Button Start -->
                        <div class="header-btn d-inline-flex">
                            <a href="{{url('/login')}}" class="btn-default">Log in</a> &nbsp;
                            <a href="contact-us.html" class="btn-default">Sign up</a>
                        </div>

                        <!-- Let’s Start Button End -->
					</div>
					<!-- Main Menu End -->

					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->
