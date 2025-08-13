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
										<div class="card-title">Add Project</div>
									</div>
									<div class="card-body">

										<!-- Row start -->
										<div class="row gutters">
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
										 <form role="form" method="post" action="{{ url('add-project-data') }}" enctype="multipart/form-data" id="useradd" name="userEdit">
                                              <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="text" name="project_name" required>
													<div class="field-placeholder">Project Name <span class="text-danger">*</span></div>
													<div class="form-text">
														Please enter your full Project Name.
													</div>
												</div>
												<!-- Field wrapper end -->

											</div>

                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="text" name="client_name" required>
													<div class="field-placeholder">Client Name <span class="text-danger">*</span></div>
													<div class="form-text">
														Please enter your full Client Name.
													</div>
												</div>
												<!-- Field wrapper end -->

											</div>

                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="text" name="technology" required>
													<div class="field-placeholder">Technologies Used <span class="text-danger">*</span></div>
													<div class="form-text">
														Please enter your full Technologies Used.
													</div>
												</div>
												<!-- Field wrapper end -->

											</div>

                                             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="date" name="complete_date" required>
													<div class="field-placeholder">Completion Date <span class="text-danger">*</span></div>
													<div class="form-text">
														Please enter your full Completion Date.
													</div>
												</div>
												<!-- Field wrapper end -->

											</div>


                                             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="text" name="short_description" required>
													<div class="field-placeholder">Short Description <span class="text-danger">*</span></div>
													<div class="form-text">
														Please enter your  Short Description.
													</div>
												</div>
												<!-- Field wrapper end -->

											</div>

                                             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="text" name="full_description" required>
													<div class="field-placeholder">Full Description <span class="text-danger">*</span></div>
													<div class="form-text">
														Please enter your Full Description.
													</div>
												</div>
												<!-- Field wrapper end -->

											</div>

											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="file" name="filename" required>
													<div class="field-placeholder"> Image <span class="text-danger">*</span></div>
													<div class="form-text">
														Please enter your Image.
													</div>
												</div>
												<!-- Field wrapper end -->

											</div>

                                              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="text" name="domain_name" required>
													<div class="field-placeholder">Project Domain Link  <span class="text-danger">*</span></div>
													<div class="form-text">
														Please enter your Full Project Domain Link.
													</div>
												</div>
												<!-- Field wrapper end -->

											</div>

                                             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

												<!-- Field wrapper start -->
												<div class="field-wrapper">
													<input class="form-control" type="text" name="github_link" required>
													<div class="field-placeholder">Project GitHub Link  <span class="text-danger">*</span></div>
													<div class="form-text">
														Please enter your Full Project GitHub Link.
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
