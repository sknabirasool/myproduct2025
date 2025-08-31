@include('paneluser.header')



     <!-- FAQs Page Start -->
    <div class="faq-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-10 offset-lg-1  col-md-12 offset-md-0">
                    <div class="faq-accordion" id="accordion">

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

                        <!-- FAQ Item start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.25s">
                             <h3 class="wow fadeInUp" style="padding: 40px">Welcome to Customer Dashboard <b style="color: blue">{{Auth::user()->name}}</b></h3>
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    My Projects
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordion">
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
                            </div>
                        </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                   My Profile
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                   <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach($customer_profile as $profile)
                                                <tr>
                                                    <th scope="row">{{ $i++ }}</th>
                                                    <td>{{ $profile->name }}</td>
                                                    <td>{{ $profile->email}}</td>
                                                    <td>{{ $profile->mobile_number }}</td>
                                                    <td>{{ $profile->address }}</td>
                                                    <td>
                                                        <a href="{{ url('edit-customer-profile/'.$profile->id) }}" class="badge bg-success">Edit Profile</a>
                                                        <a href="{{ url('website-change-customer-password/'.$profile->id) }}" class="badge bg-primary">Change Password</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.75s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How Can I Improve my Software Development Skills?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What are the Ethical Considerations in AI Development for Software Companies?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Ethical considerations in AI development for software companies include issues related to fairness, transparency, accountability, privacy, and bias. It's essential for companies to prioritize ethical AI practices AI systems.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.25s">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    What Are the Different Engagement Models Offered by Software Companies?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Software companies typically offer various engagement models to cater to the diverse needs of their clients. These models may include fixed-price projects, time and material (hourly) billing, dedicated development teams, staff augmentation, and hybrid models combining elements of different approaches</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1.5s">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    What Are Some Emerging Trends and Technologies in the Software Industry?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p>Emerging trends and technologies in the software industry include cloud computing, artificial intelligence and machine learning, Internet of Things (IoT), blockchain, edge computing, low-code/no-code development platforms, containerization and microservices architecture, and cybersecurity advancements</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs Page Ends -->



@include('paneluser.footer')
