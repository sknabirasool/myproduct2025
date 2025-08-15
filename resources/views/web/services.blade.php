@include('paneluser.header')

    <!-- Page Header Start -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3">Services</h1>
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

    <!-- Our Services Section Start -->
    <div class="our-services page-service">
        <div class="container">
            <div class="row">

                @foreach ($services as $service)
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="service-content">
                            <div class="service-content-title">
                                <h2>{{$service->service_name}}</h2>
                                <a href="#"><img src="{{asset('web/images/arrow.svg')}}" alt=""></a>
                            </div>
                            <p>{{ substr($service->description, 0, 80) }}...</p>
                        </div>
                        <div class="service-image">
                            <figure class="image-anime">
                                <img src="{{URL('uploads/services/'.$service->image)}}" >
                            </figure>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- Our Services Section End -->

    <!-- Overview Comapny Section Start -->
    <div class="overview-company">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">ourview comapny</h3>
                        <h2 class="text-anime-style-3">Stats that matter</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Counter Box Start -->
                    <div class="counter-box">
                        <h3><em>#</em><span>1</span> IT Services</h3>
						{{-- <p>Company In UK</p> --}}
                    </div>
                    <!-- Counter Box End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Counter Box Start -->
                    <div class="counter-box">
                        <h3><span class="counter">10</span><em>+</em></h3>
						<p> Clients</p>
                    </div>
                    <!-- Counter Box End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Counter Box Start -->
                    <div class="counter-box">
                        <h3><span class="counter">4</span><em>+</em> years</h3>
						<p>In Development</p>
                    </div>
                    <!-- Counter Box End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Counter Box Start -->
                    <div class="counter-box">
                        <h3><em></em><span class="counter">20</span><em>+</em> </h3>
						<p>Application Services</p>
                    </div>
                    <!-- Counter Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Overview Comapny Section End -->

    <!-- Exclusive Partners Section Start -->
    <div class="exclusive-partners">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">executive partners</h3>
                        <h2 class="text-anime-style-3">5+ Partners & supporters</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>


            <div class="row">

                @foreach ($project_logos as $logos)
                <div class="col-lg-3 col-6">
                    <!-- Partners Logo Start -->
                    <div class="partners-logo wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{asset('uploads/projects/'.$logos->image_url)}}" alt="{{$logos->image_url}}" height="100px" width="250px">
                    </div>
                    <!-- Partners Logo End -->
                </div>
                 @endforeach
            </div>
        </div>
    </div>
    <!-- Exclusive Partners Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="why-choose-us">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">why choose us</h3>
                        <h2 class="text-anime-style-3">Why choose us ?</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Why Choose Item Start -->
                    <div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="images/icon-whyus-1.svg" alt="">
                        </div>
                        <h3>innovation</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                    </div>
                    <!-- Why Choose Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Why Choose Item Start -->
                    <div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon-box">
                            <img src="images/icon-whyus-2.svg" alt="">
                        </div>
                        <h3>quality-focused</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                    </div>
                    <!-- Why Choose Item End -->
                </div>

                <div class="col-lg-4">
                    <!-- Why Choose Item Start -->
                    <div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="icon-box">
                            <img src="images/icon-whyus-3.svg" alt="">
                        </div>
                        <h3>value for money</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                    </div>
                    <!-- Why Choose Item End -->
                </div>

                <div class="col-md-12">
                    <!-- Why Us Explore Item Start -->
                    <div class="why-us-explore-item">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="why-us-section-title">
                                    <!-- Section Title Start -->
                                    <div class="section-title">
                                        <h2 class="text-anime-style-3">Do you want to explore our outstanding work?</h2>
                                    </div>
                                    <!-- Section Title End -->

                                    <!-- Explore Item Icon Start -->
                                    <div class="explore-item-icon">
                                        <img src="images/icon-whyus-4.svg" alt="">
                                    </div>
                                    <!-- Explore Item Icon End -->
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <!-- Explore Item Content Start -->
                                <div class="explore-item-content wow fadeInUp" data-wow-delay="0.25s">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium , totam rem aperiam, eaque ipsa quae ab illo inventore et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                                </div>
                                <!-- Explore Item Content End -->
                            </div>

                            <div class="col-lg-6">
                                <!-- Explore Item Content Start -->
                                <div class="explore-item-tags wow fadeInUp" data-wow-delay="0.25s">
                                    <ul>
                                        <li><a href="#" class="btn-default">dribbble</a></li>
                                        <li><a href="#" class="btn-default">linkedin</a></li>
                                        <li><a href="#" class="btn-default">contact Us</a></li>
                                    </ul>
                                </div>
                                <!-- Explore Item Content End -->
                            </div>
                        </div>
                    </div>
                    <!-- Why Us Explore Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- clients testimonials Section Start -->
	<div class="clients-testimonials about-testimonials">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">client testimonials</h3>
                        <h2 class="text-anime-style-3">Our customers love us.</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
				<div class="col-md-12">
					<!-- Testimonial Slider Start -->
					<div class="testimonial-slider">
						<div class="swiper">
							<div class="swiper-wrapper">
								<!-- Testimonial Slide Start -->
								<div class="swiper-slide">
									<div class="testimonial-item">
										<div class="testimonial-rating">
                                            <img src="images/icon-star.svg" alt="">
                                        </div>

                                        <div class="testimonial-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        </div>

                                        <div class="testimonial-body">
                                            <figure class="image-anime">
                                                <img src="images/author-1.jpg" alt="">
                                            </figure>
                                            <div class="testimonial-author-title">
                                                <h2>John Doe</h2>
                                                <p>Acme Solutions</p>
                                            </div>
                                        </div>
									</div>
								</div>
								<!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
								<div class="swiper-slide">
									<div class="testimonial-item">
										<div class="testimonial-rating">
                                            <img src="images/icon-star.svg" alt="">
                                        </div>

                                        <div class="testimonial-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        </div>

                                        <div class="testimonial-body">
                                            <figure class="image-anime">
                                                <img src="images/author-2.jpg" alt="">
                                            </figure>
                                            <div class="testimonial-author-title">
                                                <h2>Arita Banson</h2>
                                                <p>Delta Innovation</p>
                                            </div>
                                        </div>
									</div>
								</div>
								<!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
								<div class="swiper-slide">
									<div class="testimonial-item">
										<div class="testimonial-rating">
                                            <img src="images/icon-star.svg" alt="">
                                        </div>

                                        <div class="testimonial-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        </div>

                                        <div class="testimonial-body">
                                            <figure class="image-anime">
                                                <img src="images/author-3.jpg" alt="">
                                            </figure>
                                            <div class="testimonial-author-title">
                                                <h2>Banson Doe</h2>
                                                <p>Horizon Ventures</p>
                                            </div>
                                        </div>
									</div>
								</div>
								<!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
								<div class="swiper-slide">
									<div class="testimonial-item">
										<div class="testimonial-rating">
                                            <img src="images/icon-star.svg" alt="">
                                        </div>

                                        <div class="testimonial-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        </div>

                                        <div class="testimonial-body">
                                            <figure class="image-anime">
                                                <img src="images/author-2.jpg" alt="">
                                            </figure>
                                            <div class="testimonial-author-title">
                                                <h2>John Doe</h2>
                                                <p>Omega Solutions</p>
                                            </div>
                                        </div>
									</div>
								</div>
								<!-- Testimonial Slide End -->
							</div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
					<!-- Testimonial Slider End -->
				</div>
			</div>
        </div>
    </div>
    <!-- clients testimonials Section End -->
@include('paneluser.footer')
