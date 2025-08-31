@include('paneluser.header')



	<!-- Contact Us Section Start -->
    <div class="contact-us">
        <div class="container" style="padding: 20px">
            <div class="row align-items-center">

                <div class="col-lg-3">
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

                            <h3 class="wow fadeInUp" style="padding: 20px">Change Password Login</h3>

							<form  action="{{url('/website-change-customer-password-data')}}" method="POST" data-toggle="validator">
								@csrf
                                <div class="row">
									<div class="form-group col-md-12 mb-4">
										<input type="password" name="current_password" class="form-control" id="username" placeholder="Current Password" required >
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-12 mb-4">
										<input type="password" name="new_password" class="form-control" id="new_password" placeholder="New Password" required >
										<div class="help-block with-errors"></div>
									</div>


									<div class="col-md-12">
										<button type="submit" class="btn-default">Update Password</button>
										<div id="msgSubmit" class="h3 text-left hidden"></div>
									</div>
								</div>
							</form>
						</div>
						<!-- Contact Form End -->
					</div>
                </div>
            <div class="col-lg-3">
            </div>
        </div>
    </div>
	<!-- Contact Us Section End -->
@include('paneluser.footer')


