@include('paneladmin.header')

<style>
    @keyframes slideIn {
      from {
        transform: translateX(-100%);
        opacity: 0;
        color: red;
      }
      to {
        transform: translateX(0);
        opacity: 1;
        color: white;
      }
    }

    .animated-text {
      display: inline-block;
      animation: slideIn 1s ease-out;
    }
  </style>

@foreach ($contentdetails as $authUser)

@endforeach




    <!-- Content wrapper scroll start -->
    <div class="content-wrapper-scroll">

        <!-- Content wrapper start -->
        <div class="content-wrapper">

            <!-- Row start -->

            	<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-12">

								<!-- Dashboard header start -->
								<div class="dashboard-header">
									<div class="dashboard-header-content">

										<!-- Top Actions - DateRange and Buttons -->
										<div class="d-flex justify-content-end">
											<!-- Field wrapper start -->
											<div class="field-wrapper m-0">
												<div class="input-group">
													<!--<input type="text" class="form-control custom-daterange2">-->
													<!--<span class="input-group-text">--><br>
														<!--<i class="icon-calendar1"></i>-->
													</span>
												</div>
												<!--<div class="field-placeholder">Select Date</div>-->
											</div>
											<!-- Field wrapper end -->
											<!--<a href="#" class="btn"><i class="icon-download1"></i> <span>Reports</span></a>-->
										</div>

										<!-- Welcome Title -->
										<div class="welcome-title">
											<h1 class="animated-text">Welcome to <span><b style="font-weight:bold">{{ $authUser->name }}</b></span>
												<span class="winner-icon">
													<!--<img src="img/trophy.svg" alt="trophy">-->
												</span>
											</h1>
										</div>

										<!-- Sales Tiles COntainer -->
										<div class="sales-tile-container">
											<div class="sales-tile">
												 <a href="admin-pcc-all-list"><h1></h1></a>
												 <a href="admin-pcc-all-list"><h6>Raised CheckLists</h6></a>
											</div>
											<div class="sales-tile">
												<a href="{{url('staff-checklist-request')}}"><h1></h1></a>
												<a href="{{url('staff-checklist-request')}}"><h6>Received Requests</h6></a>
											</div>
											<div class="sales-tile">
											<a href="{{url('/admin-approved-pcc-all-list')}}">	<h1></h1></a>
												<a href="{{url('/admin-approved-pcc-all-list')}}"><h6>Approved Checklists</h6></a>
											</div>
										<div class="sales-tile">
											<a href="{{url('/admin-rejected-all-checklist')}}">	<h1></h1></a>
											<a href="{{url('/admin-rejected-all-checklist')}}"><h6>Rejected Checklists</h6></a>
										</div>

											<div class="sales-tile">
												<h1></h1>
												<h6>Project Employees</h6>
											</div>
										</div>
									</div>
								</div>
								<!-- Dashboard header end -->

                            </div>
						</div>
						<!-- Row end -->




@include('paneladmin.footer')
