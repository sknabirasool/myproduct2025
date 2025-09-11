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
                                                    <th>Profile Image</th>
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
                                                    <td>
                                                        @if(Auth::user()->profile_photo)
                                                            <img src="{{ asset('uploads/profile/'.Auth::user()->profile_photo) }}" alt="Profile Image" style="width: 60px; height: 60px; border-radius: 50%;">
                                                        @else
                                                            <img src="{{ asset('uploads/profile/default.png') }}"  style="width: 50px; height: 50px; border-radius: 50%;">
                                                        @endif
                                                    </td>
                                                    <td>{{ $profile->name }}</td>
                                                    <td>{{ $profile->email}}</td>
                                                    <td>{{ $profile->mobile_number }}</td>
                                                    <td>{{ $profile->address }}</td>
                                                    <td>
                                                        <a href="{{ url('website-edit-customer-profile/'.$profile->id) }}" class="badge bg-success">Edit Profile</a>
                                                        <a href="{{ url('website-change-customer-password/'.$profile->id) }}" class="badge bg-primary">Change Password</a>
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
