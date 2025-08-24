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

    <!-- About Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-8">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">about Company</h3>
                        <h2 class="text-anime-style-3">Design,Develop & Deploy(DDD)</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Us Image Start -->
                    <div class="about-image">
                        <div class="about-img">
                            <figure class="image-anime reveal">
                                <img src="{{asset('web/images/about-us-img.jpg')}}" alt="">
                            </figure>
                        </div>
                        <div class="about-consultation">
                            <figure>
                                <img src="{{asset('web/images/about-circle.png')}}" alt="">
                            </figure>
                        </div>
                    </div>
                    <!-- About Us Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Us Content Start -->
                    <div class="about-content">

                        <p class="wow fadeInUp" data-wow-delay="0.25s">
                            For any business organization, having custom-designed and well-developed software is essential to achieving strategic goals and driving growth. Such software is tailored to meet specific business needs, ensuring efficiency and alignment with organizational objectives.
                        </p>

                        <p class="wow fadeInUp" data-wow-delay="0.5s">
                            Design plays a critical role in this process, enabling businesses to conceptualize, structure, and simplify complex systems. However, beyond design, deployment is equally crucial. Deployment is the process that transitions a developed system into a live, usable state—making it accessible and functional for end-users. Together, thoughtful design and seamless deployment form the foundation of a successful digital transformation.


                        </p>


                        {{-- <ul class="wow fadeInUp" data-wow-delay="1s">
                            <li>Ease of Scalability</li>
                            <li>Instant Impact</li>
                            <li>Expertise and Experience</li>
                            <li>Time Zone Aligned</li>
                            <li>Full Flexibility</li>
                            <li>Proactive Support</li>
                        </ul> --}}

                        <a href="#" class="btn-default wow fadeInUp" data-wow-delay="1.25s">Project Registration Form</a>
                    </div>
                    <!-- About Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->
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
                            <img src="{{asset('web/images/icon-service-list.svg')}}" alt="">
                        </div>
                        <h3>Application Development </h3>
                        <p>We build websites that are mobile-friendly and with attractive UI Designs as per client requirements.</p>
                    </div>
                    <!-- Why Choose Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Why Choose Item Start -->
                    <div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon-box">
                            <img src="{{asset('web/images/icon-service-list.svg')}}" alt="">
                        </div>
                        <h3>Server Configuration </h3>
                        <p>We develop the websites and we can configure server also. We have server configuration services.</p>
                    </div>
                    <!-- Why Choose Item End -->
                </div>

                <div class="col-lg-4">
                    <!-- Why Choose Item Start -->
                    <div class="why-choose-us-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="icon-box">
                            <img src="{{asset('web/images/icon-service-list.svg')}}" alt="">
                        </div>
                        <h3>Application Maintenance </h3>
                        <p>we provides the application maintenance services. We offer server maintenance, data backup, email services to our clients.</p>
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
                                    <p>I take pride in delivering creative, reliable, and result-driven solutions tailored to each project. From concept to execution, I ensure every detail reflects quality and professionalism. Explore my portfolio to see how I’ve helped clients bring their ideas to life and discover how I can do the same for you</p>
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

@include('paneluser.footer')
