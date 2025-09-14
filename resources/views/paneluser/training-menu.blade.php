
					<div class="service-sidebar">
						<!-- Service List Box Start -->
						<div class="services-list-box wow fadeInUp" data-wow-delay="0.5s">
                            <div class="icon-box">
                              @if(Auth::user()->profile_photo)
                                                            <img src="{{ asset('uploads/profile/'.Auth::user()->profile_photo) }}" alt="Profile Image" style="width: 60px; height: 60px; border-radius: 50%;">
                                                        @else
                                                            <img src="{{ asset('uploads/profile/default.png') }}"  style="width: 50px; height: 50px; border-radius: 50%;">
                                                        @endif
                              <b style="color: black;font-size:26px">{{Auth::user()->name}}</b>
                            </div>

							{{-- <ul>
								<li><a href="#">WordPress Support & Maintenance</a></li>
								<li><a href="#">1,000+ Completed Projects</a></li>
								<li><a href="#">Content Migration</a></li>
								<li><a href="#">Plugin Installation and Customization</a></li>
								<li><a href="#">Fast Load Time</a></li>
								<li><a href="#">Easy Back-End Admin Panel</a></li>
							</ul> --}}
                            <a href="{{url('/web-add-course')}}" class="btn-default">Add Courses</a>
                            <a href="{{url('/web-my-profile')}}" class="btn-default">List Of Courses</a>
                            <a href="#" class="btn-default">contact now</a>
                            <a href="#" class="btn-default">contact now</a>
                            <a href="#" class="btn-default">contact now</a>
                            <a href="#" class="btn-default">contact now</a>
						</div>
						<!-- Service List Box End -->
					</div>

