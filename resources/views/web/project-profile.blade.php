@include('paneluser.header')

@foreach($project_profile as $project)
@endforeach
    <!-- Page Header Start -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3">Project Profile</h1>
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


    <!-- Project Single Page Start -->
	<div class="page-project-single">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					{{-- <!-- Project Feature Image Start -->
					<div class="project-feature-image">
						<figure class="image-anime reveal">
							<img src="images/project-single.jpg" alt="">
						</figure>
					</div>
					<!-- Project Feature Image End --> --}}
				</div>

				<div class="col-lg-4">
					<!-- Project Sidebar Start -->
					<div class="project-sidebar wow fadeInUp" data-wow-delay="0.25s">
						<!-- About Project Box Start -->
						<div class="about-project-box wow fadeInUp">
							<!-- Project Info Box Start -->
							<div class="project-info-box">
								<div class="project-icon">
									<img src="images/icon-date.svg" alt="">
								</div>
								<p>Date</p>
								<h3>{{$project->completion_date}}</h3>
							</div>
							<!-- Project Info Box End -->

							<!-- Project Info Box Start -->
							<div class="project-info-box">
								<div class="project-icon">
									<img src="images/icon-client.svg" alt="">
								</div>

								<p>client</p>
									<h3>{{$project->client_name}}</h3>
							</div>
							<!-- Project Info Box End -->

							<!-- Project Info Box Start -->
							<div class="project-info-box">
								<div class="project-icon">
									<img src="images/icon-website.svg" alt="">
								</div>

								<p>website</p>
								<h3 style="font-size:18px"><a href="{{$project->project_link}}">{{$project->project_link}}</a></h3>
							</div>
							<!-- Project Info Box End -->

							<!-- Project Info Box Start -->
							<div class="project-info-box">
								<div class="project-icon">
									<img src="images/icon-location-1.svg" alt="">
								</div>

								<p>Technologies Used</p>
								<h3>{{$project->technologies_used}}</h3>
							</div>
							<!-- Project Info Box End -->
						</div>
						<!-- About Project Box End -->
					</div>
					<!-- Project Sidebar End -->
				</div>

				<div class="col-lg-8">
					<!-- Project Content Start -->
					<div class="project-content">
						<!-- Project Entry Start -->
						<div class="project-entry">
							<h2 class="wow fadeInUp" data-wow-delay="0.25s">project overview</h2>

							<p class="wow fadeInUp" data-wow-delay="0.5s">{{$project->short_description}}</p>


							<h2 class="wow fadeInUp" data-wow-delay="1s">Project summary :</h2>

							<p class="wow fadeInUp" data-wow-delay="1.25s">{{$project->full_description}}</p>


						</div>
						<!-- Project Entry End -->
					</div>
					<!-- Project Content End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Project Single Page End -->

	<div class="project-details-gallery">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Project Gallery Start -->
					<div class="project-gallery">
						<div class="project-gallery-items wow fadeInUp" data-wow-delay="0.25s">
							<!-- Project Gallery Item Start -->
							<div class="project-gallery-item">
								<a href="images/post-1.jpg">
									<figure class="image-anime">
										<img src="images/post-1.jpg" alt="">
									</figure>
								</a>
							</div>
							<!-- Project Gallery Item End -->

							<!-- Project Gallery Item Start -->
							<div class="project-gallery-item wow fadeInUp" data-wow-delay="0.5s">
								<a href="images/post-2.jpg">
									<figure class="image-anime">
										<img src="images/post-2.jpg" alt="">
									</figure>
								</a>
							</div>
							<!-- Project Gallery Item End -->

							<!-- Project Gallery Item Start -->
							<div class="project-gallery-item wow fadeInUp" data-wow-delay="0.75s">
								<a href="images/post-3.jpg">
									<figure class="image-anime">
										<img src="images/post-3.jpg" alt="">
									</figure>
								</a>
							</div>
							<!-- Project Gallery Item End -->
						</div>
					</div>
					<!-- Project Gallery End -->
				</div>
			</div>
		</div>
	</div>

@include('paneluser.footer')
