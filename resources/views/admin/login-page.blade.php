
<!doctype html>
<html lang="en">

<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="UniPro App">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="{{ asset('web/assets/images/mainlogo.png')}}" />

		<!-- Title -->
		<title>Employee Login</title>


		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css')}}">

		<!-- Main css -->
		<link rel="stylesheet" href="{{ asset('admin/css/main.css')}}">


		<!-- *************
			************ Vendor Css Files *************
		************ -->

	</head>
	<body class="authentication" >

		<!-- Loading wrapper start -->
		<div id="loading-wrapper">
			<div class="spinner-border"></div>
			Loading...
		</div>
		<!-- Loading wrapper end -->

		<!-- *************
			************ Login container start *************
		************* -->
		<div class="login-container">

			<div class="container-fluid h-100">


			<!-- Row start -->
			<div class="row g-0 h-100">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
					<div class="login-about">
						<div class="slogan">
							<span style="font-weight:bold">Sriram consultancy services</span>

						</div>
						<div class="about-desc">
						Sriram consultancy services	 a data dashboard is an information management tool that visually tracks, analyzes and displays key performance indicators (KPI), metrics and key data points to monitor the health of a business, department or specific process.
						</div>
						<a href="#" class="know-more">Know More <img src="{{ asset('admin/img/right-arrow.svg')}}" alt="Uni Pro Admin"></a>

					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">


					<div class="login-wrapper">
                        <form action="{{ url('/login-admin-panel') }}" method="post" id="loginpassword">
                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

							<div class="login-screen">
								<div class="login-body">
									<a href="#" class="login-logo">
										<img src="{{ asset('web/assets/images/mainlogo.png')}}"  style="width:120px;height:70px" alt="iChat">
									</a>

									<h6>Welcome back,<br>Please login to your account.</h6>
                                    @if ($errors->any())
                                    <div class="btn btn-danger add-danger-noti">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
									<div class="field-wrapper">
										<input type="email" name="email" autofocus>
										<div class="field-placeholder">Email ID</div>
									</div>
									<div class="field-wrapper mb-3">
										<input type="password" name="password">
										<div class="field-placeholder">Password</div>
									</div>
									<div class="actions">
										<!--<a href="{{url('forget-password')}}">Forgot password?</a>-->
										<button type="submit" class="btn btn-primary">Login</button>
									</div>
								</div>
								<div class="login-footer">
									<span class="additional-link"><a href="{{ url('sriram-consultancy-services-login') }}">SCS Login</a></span>
									<span class="additional-link"><a href="{{ url('/forgot-password') }}">| Forget Password</a></span>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- Row end -->

			</div>
		</div>
		<!-- *************
			************ Login container end *************
		************* -->

		<!-- *************
			************ Required JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="{{ asset('admin/js/jquery.min.js')}}"></script>
		<script src="{{ asset('admin/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{ asset('admin/js/modernizr.js')}}"></script>
		<script src="{{ asset('admin/js/moment.js')}}"></script>

		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Main Js Required -->
		<script src="{{ asset('admin/js/main.js')}}"></script>

	</body>

</html>
