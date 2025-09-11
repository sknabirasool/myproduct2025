@include('paneluser.header')

<!-- Single Service Page Start -->
    <div class="page-service-single">
        <div class="container">
            <div class="row">

                <div class="col-lg-3">
                    @include('paneluser.side-menu')
                </div>
                 <div class="col-lg-9">
					<!-- Service Content Start -->
					<div class="service-single-content">
						<!-- Service Featured Image Start -->
						<div class="service-featured-image">

						</div>
						<!-- Service Featured Image End -->

						<!-- Service Entry Content Start -->
					<div class="accordion-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Project Title</th>
                                                    <th scope="col">Project Description</th>
                                                    <th scope="col">Project Submit Date</th>
                                                    <th scope="col">Project Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach($customer_projects as $project)
                                                <tr>
                                                    <th scope="row">{{ $i++ }}</th>
                                                    <td>{{ $project->project_title }}</td>
                                                    <td>{{ $project->project_description}}</td>
                                                    <td>{{ \Carbon\Carbon::parse($project->created_at)->format('l, d M Y') }}</td>

                                                     <td>
                                                        @if($project->project_status == 0)
                                                            <span class="badge bg-warning">Pending</span>
                                                        @elseif($project->project_status == 1)
                                                            <span class="badge bg-info">In Progress</span>
                                                        @elseif($project->project_status == 2)
                                                            <span class="badge bg-success">Completed</span>
                                                        @else
                                                            <span class="badge bg-secondary">Unknown</span>
                                                        @endif
                                                     </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                </div>
						<!-- Service Entry Content End -->
					</div>
					<!-- Service Content End -->
				</div>
            </div>
        </div>
    </div>
    <!-- Single Service Page End -->
@include('paneluser.footer')
