@include('paneluser.header')
    <!-- Page Header Start -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3">About Us</h1>
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

    <!-- Page About Section Start -->
    <div class="page-about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Image Start -->
                    <div class="page-about-image">
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="{{asset('web/images/page-about-1.jpg')}}" alt="">
                            </figure>
                        </div>
                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="{{asset('web/images/page-about-2.jpg')}}" alt="">
                            </figure>
                        </div>
                        <div class="work-experience">
                            <div class="work-experience-icon">
                                <img src="{{asset('web/images/icon-work-experience.svg')}}" alt="">
                            </div>
                            <div class="work-experience-content">
                                <h3><span class="counter">30</span>+</h3>
							    <p>Work Experience</p>
                            </div>
                        </div>
                    </div>
                    <!-- About Us Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Us Content Start -->
                    <div class="about-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="text-anime-style-3">Websites that tell your brand's story</h2>
                        </div>
                        <!-- Section Title End -->
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium , totam rem aperiam, eaque ipsa quae ab illo inventore et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.5s">totam rem aperiam, eaque ipsa quae ab illo inventore et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                        <ul class="wow fadeInUp" data-wow-delay="0.75s">
                            <li>Ease of Scalability</li>
                            <li>Instant Impact</li>
                            <li>Expertise and Experience</li>
                            <li>Time Zone Aligned</li>
                            <li>Full Flexibility</li>
                            <li>Proactive Support</li>
                        </ul>
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page About Section End -->

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
                            <img src="{{asset('web/images/icon-whyus-1.svg')}}" alt="">
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
                            <img src="{{asset('web/images/icon-whyus-2.svg')}}" alt="">
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
                            <img src="{{asset('web/images/icon-whyus-3.svg')}}" alt="">
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
                                        <img src="{{asset('web/images/icon-whyus-4.svg')}}" alt="">
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
    <!-- Why Choose us Section End -->

    <!-- Exclusive Partners Section Start -->
    <div class="exclusive-partners">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">executive partners</h3>
                        <h2 class="text-anime-style-3">100+ Partners & supporters</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- Partners Logo Start -->
                    <div class="partners-logo wow fadeInUp" data-wow-delay="0.2s">
                        <img src="{{asset('web/images/icon-partners-1.svg')}}" alt="">
                    </div>
                    <!-- Partners Logo End -->
                </div>

                <div class="col-lg-3 col-6">
                    <!-- Partners Logo Start -->
                    <div class="partners-logo wow fadeInUp" data-wow-delay="0.4s">
                        <img src="{{asset('web/images/icon-partners-2.svg')}}" alt="">
                    </div>
                    <!-- Partners Logo End -->
                </div>

                <div class="col-lg-3 col-6">
                    <!-- Partners Logo Start -->
                    <div class="partners-logo wow fadeInUp" data-wow-delay="0.6s">
                        <img src="{{asset('web/images/icon-partners-3.svg')}}" alt="">
                    </div>
                    <!-- Partners Logo End -->
                </div>

                <div class="col-lg-3 col-6">
                    <!-- Partners Logo Start -->
                    <div class="partners-logo wow fadeInUp" data-wow-delay="0.8s">
                        <img src="{{asset('web/images/icon-partners-4.svg')}}" alt="">
                    </div>
                    <!-- Partners Logo End -->
                </div>

                <div class="col-lg-3 col-6">
                    <!-- Partners Logo Start -->
                    <div class="partners-logo wow fadeInUp" data-wow-delay="1s">
                        <img src="{{asset('web/images/icon-partners-3.svg')}}" alt="">
                    </div>
                    <!-- Partners Logo End -->
                </div>

                <div class="col-lg-3 col-6">
                    <!-- Partners Logo Start -->
                    <div class="partners-logo wow fadeInUp" data-wow-delay="1.2s">
                        <img src="{{asset('web/images/icon-partners-4.svg')}}" alt="">
                    </div>
                    <!-- Partners Logo End -->
                </div>

                <div class="col-lg-3 col-6">
                    <!-- Partners Logo Start -->
                    <div class="partners-logo wow fadeInUp" data-wow-delay="1.4s">
                        <img src="{{asset('web/images/icon-partners-1.svg')}}" alt="">
                    </div>
                    <!-- Partners Logo End -->
                </div>

                <div class="col-lg-3 col-6">
                    <!-- Partners Logo Start -->
                    <div class="partners-logo wow fadeInUp" data-wow-delay="1.6s">
                        <img src="{{asset('web/images/icon-partners-2.svg')}}" alt="">
                    </div>
                    <!-- Partners Logo End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Exclusive Partners Section End -->

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
						<p>Company In UK</p>
                    </div>
                    <!-- Counter Box End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Counter Box Start -->
                    <div class="counter-box">
                        <h3><span class="counter">300</span><em>+</em></h3>
						<p>Global Clients</p>
                    </div>
                    <!-- Counter Box End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Counter Box Start -->
                    <div class="counter-box">
                        <h3><span class="counter">21</span><em>+</em> years</h3>
						<p>In Development</p>
                    </div>
                    <!-- Counter Box End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Counter Box Start -->
                    <div class="counter-box">
                        <h3><em>$</em><span class="counter">50</span><em>+</em> Million</h3>
						<p>Total Revenue</p>
                    </div>
                    <!-- Counter Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Overview Comapny Section End -->

    <!-- Our Team Section Start -->
    <div class="our-team">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our team</h3>
                        <h2 class="text-anime-style-3">Meet the expert</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Team Img Start -->
                        <div class="team-image">
                            <figure>
                                <img src="{{asset('web/images/team-1.jpg')}}" alt="">
                            </figure>

                            <div class="our-team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Team Img End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <div class="team-content">
                                <h3>Arita Banson</h3>
                                <p>Founder & CEO</p>
                            </div>
                            <div class="team-icon">
                                <a href="#"><img src="{{asset('web/images/icon-share.svg')}}" alt=""></a>
                            </div>
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Team Img Start -->
                        <div class="team-image">
                            <figure>
                                <img src="{{asset('web/images/team-2.jpg')}}" alt="">
                            </figure>

                            <div class="our-team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Team Img End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <div class="team-content">
                                <h3>John Doe</h3>
                                <p>Sr. Development</p>
                            </div>
                            <div class="team-icon">
                                <a href="#"><img src="{{asset('web/images/icon-share.svg')}}" alt=""></a>
                            </div>
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.75s">
                        <!-- Team Img Start -->
                        <div class="team-image">
                            <figure>
                                <img src="{{asset('web/images/team-3.jpg')}}" alt="">
                            </figure>

                            <div class="our-team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Team Img End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <div class="team-content">
                                <h3>Arita Doe</h3>
                                <p>Sr. Designer</p>
                            </div>
                            <div class="team-icon">
                                <a href="#"><img src="{{asset('web/images/icon-share.svg')}}" alt=""></a>
                            </div>
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="1s">
                        <!-- Team Img Start -->
                        <div class="team-image">
                            <figure>
                                <img src="{{asset('web/images/team-4.jpg')}}" alt="">
                            </figure>

                            <div class="our-team-social-icon">
                                <ul>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Team Img End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <div class="team-content">
                                <h3>Banson Doe</h3>
                                <p>Sr. Manager</p>
                            </div>
                            <div class="team-icon">
                                <a href="#"><img src="{{asset('web/images/icon-share.svg')}}" alt=""></a>
                            </div>
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Team Section End -->

    <!-- Scrolling Ticker Section Start -->
    <div class="scrolling-ticker">
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><i class="fa-solid fa-circle"></i>Web Development</span>
                <span><i class="fa-solid fa-circle"></i>Game Development</span>
                <span><i class="fa-solid fa-circle"></i>App Development</span>
                <span><i class="fa-solid fa-circle"></i>Digital Marketing</span>
                <span><i class="fa-solid fa-circle"></i>SEO Optimization</span>
                <span><i class="fa-solid fa-circle"></i>Graphics Design</span>
                <span><i class="fa-solid fa-circle"></i>Networking Services</span>
            </div>

            <div class="scrolling-content">
                <span><i class="fa-solid fa-circle"></i>Web Development</span>
                <span><i class="fa-solid fa-circle"></i>Game Development</span>
                <span><i class="fa-solid fa-circle"></i>App Development</span>
                <span><i class="fa-solid fa-circle"></i>Digital Marketing</span>
                <span><i class="fa-solid fa-circle"></i>SEO Optimization</span>
                <span><i class="fa-solid fa-circle"></i>Graphics Design</span>
                <span><i class="fa-solid fa-circle"></i>Networking Services</span>
            </div>
        </div>
    </div>
    <!-- Scrolling Ticker Section End -->

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
                                            <img src="{{asset('web/images/icon-star.svg')}}" alt="">
                                        </div>

                                        <div class="testimonial-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        </div>

                                        <div class="testimonial-body">
                                            <figure class="image-anime">
                                                <img src="{{asset('web/images/author-1.jpg')}}" alt="">
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
                                            <img src="{{asset('web/images/icon-star.svg')}}" alt="">
                                        </div>

                                        <div class="testimonial-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        </div>

                                        <div class="testimonial-body">
                                            <figure class="image-anime">
                                                <img src="{{asset('web/images/author-2.jpg')}}" alt="">
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
                                            <img src="{{asset('web/images/icon-star.svg')}}" alt="">
                                        </div>

                                        <div class="testimonial-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        </div>

                                        <div class="testimonial-body">
                                            <figure class="image-anime">
                                                <img src="{{asset('web/images/author-3.jpg')}}" alt="">
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
                                            <img src="{{asset('web/images/icon-star.svg')}}" alt="">
                                        </div>

                                        <div class="testimonial-content">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                                        </div>

                                        <div class="testimonial-body">
                                            <figure class="image-anime">
                                                <img src="{{asset('web/images/author-2.jpg')}}" alt="">
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
