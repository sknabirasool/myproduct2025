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

							<p class="wow fadeInUp" data-wow-delay="0.5s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

							<p class="wow fadeInUp" data-wow-delay="0.75s">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>

							<h2 class="wow fadeInUp" data-wow-delay="1s">Project summary :</h2>

							<p class="wow fadeInUp" data-wow-delay="1.25s">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>


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
