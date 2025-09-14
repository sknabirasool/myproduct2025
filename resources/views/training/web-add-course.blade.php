@include('paneluser.header')

<!-- Contact Us Section Start -->
    <div class="contact-us">
        <div class="container">
            <div class="row ">
                <div class="col-lg-3">
                     @include('paneluser.training-menu')
                </div>

                <div class="col-lg-9">
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
                    <div class="contact-form-box wow fadeInUp" data-wow-delay="0.5s">
                          <h2 style="padding: 15px">Add Course</h2>
						<!-- Contact Form Start -->
						<div class="contact-form">
				<form  action="{{url('/web-add-course-data')}}" method="POST" data-toggle="validator" enctype="multipart/form-data">
					@csrf
                    <div class="row">
									<div class="form-group col-md-6 mb-4">
										<input type="text" name="course_title" class="form-control"  placeholder="Course Title" required >
										<div class="help-block with-errors"></div>
									</div>

									<div class="form-group col-md-6 mb-4">
										<input type="text" name="short_description" class="form-control"  placeholder="Short Description" required >
										<div class="help-block with-errors"></div>
									</div>

                                    <div class="form-group col-md-12 mb-4">
										<textarea name="description" class="form-control" id="description" rows="7" placeholder="Description" required></textarea>
										<div class="help-block with-errors">Course Description</div>
									</div>

									<div class="form-group col-md-6 mb-4">
                                        <select name="level" id="level" class="form-control" required>
                                            <option value="">-- Select Level --</option>
                                            <option value="beginner">Beginner</option>
                                            <option value="intermediate">Intermediate</option>
                                            <option value="advanced">Advanced</option>
                                        </select>
                                        <div class="help-block with-errors">Course Level</div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <select name="status" id="status" class="form-control" required>
                                             <option value="">-- Course Status --</option>

                                            <option value="published">Published</option>
                                            <option value="un_published">Un Published</option>
                                        </select>
                                        <div class="help-block with-errors">Course Status</div>
                                    </div>

                                      <div class="form-group col-md-6 mb-4">
										<input type="number" name ="price" class="form-control"   placeholder="Price" required >
										<div class="help-block with-errors">Course Price</div>
									</div>

                                    <div class="form-group col-md-6 mb-4">
										<input type="file" name ="filename" class="form-control"   placeholder="Thumbnail" required >
										<div class="help-block with-errors">Course Image</div>
									</div>


									<div class="col-md-12">
										<button type="submit" class="btn-default">Add Course</button>
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

<!-- CKEditor 4 LTS (4.25.1-lts) from official CDN -->
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>
        CKEDITOR.replace( 'description' );
</script>

@include('paneluser.footer')
