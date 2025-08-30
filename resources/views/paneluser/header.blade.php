<!DOCTYPE html>
<html lang="zxx">
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
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('web/images/favicon.png')}}">
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
                                <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/about')}}">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/services')}}">Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/portfolio')}}">Portfolio</a></li>
                                <li class="nav-item highlighted-menu"><a class="nav-link" href="{{url('/contact')}}">Free Consultation</a></li>
                            </ul>
                        </div>
                        <!-- Let’s Start Button Start -->
                        <div class="header-btn d-inline-flex">
                            @guest
                                <!-- When NOT logged in -->
                                <a href="{{ url('/web-login') }}" class="btn-default">Log in</a> &nbsp;
                                <a href="{{ url('/project-registration') }}" class="btn-default">Submit Your Project</a>
                            @else
                                <!-- When Logged in -->
                                <a href="{{ url('/customer-dashboard') }}" class="btn-default">Dashboard</a> &nbsp;

                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                                    @csrf
                            </form>

                                <a href="{{ route('logout') }}" class="btn-default"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                                </a>

                            @endguest
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


