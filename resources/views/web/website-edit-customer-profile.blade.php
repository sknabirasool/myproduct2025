@include('paneluser.header')



	<!-- Contact Us Section Start -->
    <div class="contact-us">
        <div class="container" style="padding: 20px">
            <div class="row align-items-center">


                <div class="col-lg-12">

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

                            @foreach ($customer_profile as $data)

                            @endforeach
                            <h3 class="wow fadeInUp" style="padding: 20px">Update Profile</h3>

							<form  action="{{url('/website-edit-customer-profile-data')}}" method="POST" data-toggle="validator" enctype="multipart/form-data">
								@csrf
                                <input type="hidden" name="id" value="{{$data->id}}">
                                <div class="row">
									<div class="form-group col-md-3 mb-4">
										<input type="text" name="name" class="form-control" id="username" placeholder="Name"  value="{{$data->name}}" required >
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-3 mb-4">
										<input type="text" name="email" class="form-control" id="" placeholder="email" value="{{$data->email}}" required disabled>
										<div class="help-block with-errors"></div>
									</div>

                                    <div class="form-group col-md-3 mb-4">
										<input type="text" name="mobile_number" class="form-control" id="" value="{{$data->mobile_number}}" placeholder="Mobile Number" required >
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-3 mb-4">
										<input type="text" name="address" class="form-control" id="" value="{{$data->address}}" placeholder="Address" required >
										<div class="help-block with-errors"></div>
									</div>

                                    <div class="form-group col-md-3 mb-4">
										<input type="file" name="filename" class="form-control" id=""  placeholder="Profile Photo" required >
										<div class="help-block with-errors">upload profile photo</div>
									</div>


									<div class="col-md-12">
										<button type="submit" class="btn-default">Update Profile</button>
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
	<!-- Contact Us Section End -->
@include('paneluser.footer')


