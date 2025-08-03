@include('paneladmin.header')
	<!-- Content wrapper scroll start -->
				<div class="content-wrapper-scroll">

					<!-- Content wrapper start -->
					<div class="content-wrapper">

						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

								<!-- Card start -->
								<div class="card">
									<div class="card-header">
										<div class="card-title">Add Services</div>
									</div>
									<div class="card-body">

										<!-- Row start -->
										<div class="row gutters">
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
										 <form role="form" method="post" action="{{ url('add-services-data') }}" enctype="multipart/form-data" id="useradd" name="userEdit">
                                              <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="text" name="service_name" required>
													<div class="field-placeholder">Service  Name <span class="text-danger">*</span></div>
													<div class="form-text">
														Please enter your full Service Name.
													</div>
												</div>
												<!-- Field wrapper end -->

											</div>

                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="text" name="description" required>
													<div class="field-placeholder">Service Description <span class="text-danger">*</span></div>
													<div class="form-text">
														Please enter your full Service Description.
													</div>
												</div>
												<!-- Field wrapper end -->

											</div>


											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="file" name="filename" required>
													<div class="field-placeholder">Service Image <span class="text-danger">*</span></div>
													<div class="form-text">
														Please enter your full Service Image.
													</div>
												</div>
												<!-- Field wrapper end -->

											</div>



											</div>
											<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
												<button type="submit" class="btn btn-primary">Submit</button>
											</div>
										</div>
										<!-- Row end -->
                                    </form>
									</div>
								</div>
								<!-- Card end -->

							</div>
						</div>
						<!-- Row end -->

					</div>
					<!-- Content wrapper end -->
@include('paneladmin.footer')
