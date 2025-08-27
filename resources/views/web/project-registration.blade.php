@include('paneluser.header')
    <!-- Page Header Start -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3">Project Registration</h1>
						<nav class="wow fadeInUp" data-wow-delay="0.25s">
							<ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home -> {{ url()->current() }}</a></li>
                            </ol>
						</nav>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->


	<!-- Contact Us Section Start -->
    <div class="contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
					<!-- Contact Details Section Start -->
                    <div class="contact-details">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">project Registration</h3>
                            <h2 class="text-anime-style-3">Register today & let’s build the future together.</h2>
                        </div>
                        <!-- Section Title End -->

						<!-- Contact Details Body Start -->
						<div class="contact-detail-body">
							<p class="wow fadeInUp" data-wow-delay="0.25s">Enroll today and let us turn your project idea into reality! Share your details and project requirements with us, and our team will connect with you to discuss the best development solutions tailored to your needs.</p>
							{{-- <h3 class="wow fadeInUp" data-wow-delay="0.5s">follow us:</h3> --}}
							{{-- <ul class="wow fadeInUp" data-wow-delay="0.75s">
								<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
							</ul> --}}
						</div>
						<!-- Contact Details Body End -->
                    </div>
					<!-- Contact Details Section End -->
                </div>

                <div class="col-lg-6">
                    <div class="contact-form-box wow fadeInUp" data-wow-delay="0.5s">
						<!-- Contact Form Start -->
                        @if(Session::has('alert-success'))
                            <div class="alert alert-success">
                                {{ Session::get('alert-success') }}
                            </div>
                        @endif

                        @if(Session::has('alert-danger'))
                            <div class="alert alert-danger">
                                {{ Session::get('alert-danger') }}
                            </div>
                        @endif

						<div class="contact-form">
							<form  action="{{url('/project-registration-data')}}" method="POST" data-toggle="validator">
								@csrf
                                <div class="row">
									<div class="form-group col-md-6 mb-4">
										<input type="text" name="fname" class="form-control" id="fname" placeholder="first name" required >
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-6 mb-4">
										<input type="text" name="lname" class="form-control" id="lname" placeholder="last name" required >
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-6 mb-4">
										<input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" required >
										<div class="help-block with-errors"></div>
									</div>

                                    <div class="form-group col-md-6 mb-4">
										<input type="email" name ="email" class="form-control" id="email" placeholder="email" required >
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-12 mb-4">
										<input type="text" name="project_title" class="form-control" id="subject" placeholder="Project Title" required >
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-12 mb-4">
										<textarea name="project_description" class="form-control" id="project_description" rows="10" placeholder="Project Description" required></textarea>
										<div class="help-block with-errors"></div>
									</div>

									<div class="col-md-12">
										<button type="submit" class="btn-default">send a message</button>
										<div id="msgSubmit" class="h3 text-left hidden"></div>
									</div>
								</div>
							</form>
						</div>
						<!-- Contact Form End -->
					</div>
                </div>
            </div>
        </div>
    </div>
	<!-- Contact Us Section End -->
@include('paneluser.footer')
