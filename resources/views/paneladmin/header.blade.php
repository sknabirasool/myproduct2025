<!doctype html>
<html lang="en">


<?php

 //   ================================== API for using ip address to get empoyee info ==================
        // Get the user's IP address

        $userIpAddress = optional(Auth::user())->last_login_ip;
        // Make a request to a free IP geolocation API (replace API_URL with the actual API endpoint)
        $apiUrl = "https://ipapi.co/{$userIpAddress}/json/";
        $apiResponse = Http::get($apiUrl)->body();
        // Decode the JSON response
        $locationData = json_decode($apiResponse, true);

        // Extract relevant information
        $country = $locationData['country_name'] ?? null;
        $region = $locationData['region'] ?? null;
        $city = $locationData['city'] ?? null;
        $zipCode = $locationData['postal'] ?? null;
        $latitude = $locationData['latitude'] ?? null;
        $longitude = $locationData['longitude'] ?? null;



        // dd($zipCode);

    //   ================================== end using ip address to get empoyee info ==================

?>

<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Meta -->
		<meta name="description" content="Responsive Bootstrap4 Dashboard Template">
		<meta name="author" content="ParkerThemes">
		<link rel="shortcut icon" href="{{asset('web/assets/images/mainlogo.png')}}">

		<!-- Title -->
		<title>Sriram Consultancy Services</title>


		<!-- *************
			************ Common Css Files *************
		************ -->
		<!-- Bootstrap css -->
		<link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">

		<!-- Icomoon Font Icons css -->
		<link rel="stylesheet" href="{{asset('admin/fonts/style.css')}}">

		<!-- Main css -->
		<link rel="stylesheet" href="{{asset('admin/css/main.css')}}">


		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Mega Menu -->
		<link rel="stylesheet" href="{{asset('admin/vendor/megamenu/css/megamenu.css')}}">

		<!-- Search Filter JS -->
		<link rel="stylesheet" href="{{asset('admin/vendor/search-filter/search-filter.css')}}">
		<link rel="stylesheet" href="{{asset('admin/vendor/search-filter/custom-search-filter.css')}}">

		<!-- Uploader CSS -->
		<link rel="stylesheet" href="{{ asset('admin/vendor/dropzone/dropzone.min.css')}}" />
 <!-- Bootstrap Select CSS -->
                <link rel="stylesheet" href="{{asset('admin/vendor/bs-select/bs-select.css')}}" />

		<!-- Data Tables -->
		<link rel="stylesheet" href="{{asset('admin/vendor/datatables/dataTables.bs4.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/vendor/datatables/dataTables.bs4-custom.css')}}" />
		<link href="{{asset('admin/vendor/datatables/buttons.bs.css')}}" rel="stylesheet" />

  <!-- Calendar CSS -->
		<link rel="stylesheet" href="{{asset('admin/vendor/calendar/css/main.min.css')}}" />
        <link rel="stylesheet" href="{{asset('admin/vendor/calendar/css/custom.css')}}" />


    </head>
	<body>

		<!-- Loading wrapper start -->
		<div id="loading-wrapper">
			<div class="spinner-border"></div>
			Loading...
		</div>

		<!-- Loading wrapper end -->
       <!-- Page wrapper start -->
		<div class="page-wrapper">

			<!-- Sidebar wrapper start -->
			<nav class="sidebar-wrapper">

				<!-- Sidebar content start -->
				<div class="sidebar-tabs">

			<!--drawing user accesss-->
			 <?php
                  $drawing_user_id = optional(Auth::user())->drawing_user_id;
                   $manager_user_id = optional(Auth::user())->manager_under_emp_id;
              ?>


                    <?php
                    //use Auth;
                    // $authid=Auth::user()->usertype; //old code

                  $authid = optional(Auth::user())->usertype;

                      ?>

<!----------------------------
    Start Admin Login Access super admin
    -------------------------------------------------->
<?php if ($authid == 1) { ?>
    <!-- Tabs nav start -->
    <div class="nav" role="tablist" aria-orientation="vertical">
        <a href="#" class="logo">
            <img src="{{ asset('web/assets/images/mainlogo.png')}}" alt="logo">
        </a>
        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="true">
            <i class="icon-home2"></i>
            <span class="nav-link-text">Dashboard</span>
        </a>

        <a class="nav-link" id="pages-tab" data-bs-toggle="tab" href="#tab-pages" role="tab" aria-controls="tab-pages" aria-selected="false">
            <i class="icon-book-open"></i>
            <span class="nav-link-text">Project Documents</span>
        </a>

        <a class="nav-link" id="authentication-tab" data-bs-toggle="tab" href="#tab-authentication" role="tab" aria-controls="tab-authentication" aria-selected="false">
            <i class="icon-users"></i>
            <span class="nav-link-text">Users</span>
        </a>
    </div>
    <!-- Tabs nav end -->

    <!-- Tabs content start -->
    <div class="tab-content">

        <!-- Home tab -->
        <div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="home-tab">
            <div class="tab-pane-header">
                <a href="{{url('/sriram-consultancy-services-home')}}">
                    <p style="font-size:13px">User: {{ Auth::user()->name }} ({{ Auth::user()->identity_number }})</p>
                </a>
            </div>

            <!-- Sidebar menu start -->
            <div class="sidebarMenuScroll">
                <div class="sidebar-menu">
                    <ul>
                        <li><a href="{{url('/admin-course-categories')}}" class="current-page">Project Categories</a></li>
                        <li><a href="{{url('admin-course-categories-list')}}">Project Categories List</a></li>
                        <li><a href="{{url('admin-add-course-topics')}}">Add Projects</a></li>
                        <li><a href="{{url('/admin-project-list')}}">Projects List</a></li>
                        <li><a href="{{url('/admin-my-clients')}}">Add Clients</a></li>
                        <li><a href="{{url('/admin-my-clients-list')}}">Client List</a></li>
                        <li><a href="{{url('/admin-final-project-reports')}}">Reports</a></li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar menu end -->
        </div>

        <!-- Project Documents tab -->
        <div class="tab-pane fade" id="tab-pages" role="tabpanel" aria-labelledby="pages-tab">
            <div class="tab-pane-header">
                Project Documents
            </div>

            <!-- Sidebar menu start -->
            <div class="sidebarMenuScroll">
                <div class="sidebar-menu">
                    <ul>
                        <li><a href="{{url('/admin-add-document-category')}}">Add Document Category</a></li>
                        <li><a href="{{url('/admin-document-category-list')}}">Document Category List</a></li>
                        <li><a href="upload-project-documents">Upload Documents</a></li>
                        <li><a href="upload-project-documents-list">Uploaded Documents List</a></li>
                        <li><a href="admin-category-download-documents">Download Files</a></li>
                        <li><a href="admin-add-project-schdule-documents">Add Project Schedule</a></li>
                        <li><a href="admin-add-project-schdule-documents-files-list">Project Schedule Files</a></li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar menu end -->
        </div>

        <!-- Authentication tab -->
        <div class="tab-pane fade" id="tab-authentication" role="tabpanel" aria-labelledby="authentication-tab">
            <div class="tab-pane-header">
                Employee & Project Management
            </div>

            <!-- Sidebar menu start -->
            <div class="sidebarMenuScroll">
                <div class="sidebar-menu">
                    <ul>
                        <li><a href="{{ url('/superadmin-create-sub-admin') }}">Add Employee</a></li>
                        <li><a href="{{ url('admin-Sub-Admin-login-users') }}">Employee List</a></li>
                        <li><a href="{{ url('admin-create-project-for-checklist-users') }}">Add Project</a></li>
                        <li><a href="{{ url('admin-Scs-project-list') }}">Project List</a></li>
                    </ul>
                </div>
            </div>
            <!-- Sidebar menu end -->
        </div>

    </div>
    <!-- Tabs content end -->

    <!-- Script to retain active tab -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Check if a tab is stored in sessionStorage
            let activeTab = sessionStorage.getItem('activeTab');

            // If a tab is stored, activate it
            if (activeTab) {
                let tabElement = document.querySelector(`a[href="${activeTab}"]`);
                if (tabElement) {
                    new bootstrap.Tab(tabElement).show();
                }
            } else {
                // Default to the Home tab if no tab is stored
                let defaultTab = document.getElementById('home-tab');
                if (defaultTab) {
                    new bootstrap.Tab(defaultTab).show();
                }
            }

            // Store the active tab in sessionStorage on click
            document.querySelectorAll('.nav-link').forEach(function(tab) {
                tab.addEventListener('click', function(event) {
                    let href = this.getAttribute('href');
                    sessionStorage.setItem('activeTab', href);
                });
            });
        });
    </script>
<?php } ?>


<!---------------------------------
    End Admin Login Access
    ---------------------------------------------------->



    <!---------------------------------------------Sub Login Access----------------->

 <?php if($authid == 2) { ?>
    <!-- Tabs nav start -->
    <div class="nav" role="tablist" aria-orientation="vertical">
        <a href="#" class="logo">
            <img src="{{asset('web/assets/images/mainlogo.png')}}" alt="iChat">
        </a>
        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="true">
            <i class="icon-home2"></i>
            <span class="nav-link-text">CheckLists</span>
        </a>
        <a class="nav-link" id="pages-tab" data-bs-toggle="tab" href="#tab-pages" role="tab" aria-controls="tab-pages" aria-selected="false">
            <i class="icon-book-open"></i>
            <span class="nav-link-text">Project Documents & Drawings</span>
        </a>
        <a class="nav-link" id="forms-tab1" data-bs-toggle="tab" href="#tab-forms1" role="tab" aria-controls="tab-forms1" aria-selected="false">
            <i class="icon-box"></i>
            <span class="nav-link-text">Material Procurement</span>
        </a>
        <a class="nav-link" id="forms-tab2" data-bs-toggle="tab" href="#tab-forms2" role="tab" aria-controls="tab-forms2" aria-selected="false">
            <i class="icon-book"></i>
            <span class="nav-link-text">Project Documents</span>
        </a>


        <?php if (auth()->check() && auth()->user()->id == $manager_user_id): ?>
            <a class="nav-link" id="authentication-tab" data-bs-toggle="tab" href="#tab-authentication" role="tab" aria-controls="tab-authentication" aria-selected="false">
                <i class="icon-users"></i>
                <span class="nav-link-text">My Employees</span>
            </a>
        <?php endif; ?>
    </div>
    <!-- Tabs nav end -->

    <!-- Tabs content start -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="home-tab">
            <!-- Tab content header start -->
            <div class="tab-pane-header">
                <a href="{{url('/admin-home')}}">
                    <p style="font-size:13px">User: {{Auth::user()->name}} ({{Auth::user()->identity_number}})</p>
                </a>
            </div>
            <!-- Tab content header end -->

            <!-- Sidebar menu starts -->
            <div class="sidebarMenuScroll">
                <div class="sidebar-menu">
                    <ul>
                        <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="field-wrapper">
                                <select name="Home" onChange="window.document.location.href=this.options[this.selectedIndex].value;" value="GO" class="select-single js-states" title="Select Product Category" data-live-search="true">
														<option value="selected">----select checklist----</a></option>
														<option value="{{url('create-pcc-checklist')}}">1.Check List For Plain Cement Concrete (PCC)</option>
														<option value="{{url('/admin-pre-footing-checklist')}}">2.Check List For Preconcreting - Footings</option>
														<option value="{{url('/admin-post-footing-checklist')}}">3.Check List For Post Concreting - Footings</option>
														<option value="{{url('/admin-precheck-coloums-corewell-checklist')}}">4.Check List For Preconcreting-Columns/Core Walls</option>
														<option value="{{url('/admin-postcheck-coloums-corewell-checklist')}}">5.Check List for Post concreting - Columns / Core Walls</option>
														<option value="{{url('/admin-pre-retaining-wall-checkist')}}">6.Check List For Preconcreting - Retaining wall</option>
														<option value="{{url('/admin-post-retaining-wall-checklist')}}">7.Check List For Post concreting -Retaining wall</option>
														<option value="{{url('/admin-formwork-footing-checklist')}}">8.Check List For Formwork-Footings</option>
														<option value="{{url('/admin-formwork-retaining-wall-checklist')}}">9.Check List For Formwork-Retaining WALL</option>
														<option value="{{url('/admin-formwork-column-core-rw-checklist')}}">10.Check List For Formwork-Column/Core wall/Pedestals</option>
							                            <option value="{{url('/admin-reinforcement-footing-checklist')}}">11.Check List For Reinforcement-Footing</option>
												        <option value="{{url('/admin-reinforcement-reataining-wall-checklist')}}">12.Check List For Reinforcement-Reataining wall</option>
												        <option value="{{url('/admin-reinforcement-columns-corewall-checklist')}}">13.Check List For Reinforcement-Columns/Core wall/Pedestal</option>
														<option value="{{url('/admin-formwork-beam-checklist')}}">14.Check List For Formwork-Beam/Capital&Slab </option>
														<option value="{{url('/admin-reinforcement-beam-checklist')}}">15. Check List For Reinforcement-Beam/Capital & Slab/Grade Slab</option>
													    <option value="{{url('/admin-Preconcreting-Beam-checklist')}}">16. Check List For Preconcreting-Beam/Capital & Slab</option>
													    <option value="{{url('/admin-Postconcreting-Beam-checklist')}}">17.Check List For Post concreting-Beam/Capital & Slab</option>
													    <option value="{{url('/admin-basements-pre-slab-conduiting-checkList')}}">18.Basements Pre Slab Conduiting CheckList </option>
													    <option value="{{url('/admin-basements-post-slab-conduiting-checkList')}}">19.Basements Post Slab Conduiting CheckList </option>
													    <option value="{{url('/admin-checklist-for-mechanical-couplers-installation-checkList')}}">20.Checklist For Mechanical Couplers Installation Inspection </option>
														<option value="{{url('/admin-material-inspection-request-checkList')}}">21. Material Inspection Request </option>
														<option value="{{url('/admin-site-observation-report-checkList')}}">22. Site Observation Report </option>
														<option value="{{url('/admin-pour-card-for-concreting-checkList')}}">23. Pour Card for Concreting </option>
														<option value="{{url('/admin-non-conformance-report-checkList')}}">24. Non Conformance Report </option>

													    <option value="{{url('/admin-mivan-formwork-walls-beam-slab')}}">25.Check List For Mivan Formwork-Walls/Beam/Slab</option>
														<option value="{{url('/admin-mivan-Reinforcement-walls-beam-slab')}}">26.Check List For Mivan Reinforcement-Walls /Beam/Slab</option>
														<option value="{{url('/admin-mivan-preconcreting-beam-slab')}}">27.Check List for Mivan Preconcreting-Beam/Slab</option>
													    <option value="{{url('/admin-trunking-bus-duct-rising-main-tapoffbox')}}">28.Trunking/Bus Duct/Rising Main and Tap-Off Box Checklist</option>
														<option value="{{url('/admin-checklist-for-chipping-grinding-holes-packing')}}">29.Checklist for chipping, grinding, holes packing, grouting & finishing of concrete works</option>
												    	<option value="{{url('/admin-water-proofing-works-checklist')}}">30.checklist for water proofing works</option>
													    <option value="{{url('/admin-distribution-board-checklist')}}">31.Distribution Board Checklist</option>
													    <option value="{{url('/admin-electrical-live-testing')}}">32.Electrical Live Testing</option>
													    <option value="{{url('/admin-light-fixtures-checklist')}}">33.Light Fixtures Checklist</option>
													    <option value="{{url('/admin-lightning-protection-checklist')}}">34.Lightning Protection Checklist</option>
													    <option value="{{url('/admin-electrical-post-concrete-checklist')}}">35.Electrical Post Concrete Checklist</option>
													    <option value="{{url('/admin-wiring-checklist')}}">36.Wiring Checklist</option>
													    <option value="{{url('/admin-switch-sockets-checklist')}}">37.Switch Sockets CheckList</option>
													    <option value="{{url('/admin-mivan-wallslab-conduiting-checklist')}}">38.MIVAN WALL & SLAB CONDUITING CHECKLIST</option>
													    <option value="{{url('/admin-transfer-slab-preconcreting-beamslab-checklist')}}">39.Check List For Transfer slab Preconcreting-Beam/Slab</option>
													    <option value="{{url('/admin-transfer-slab-reinforcement-beamslab-checklist')}}">40.Check List For Transfer slab Reinforcement - Beam / Slab</option>
												    	<option value="{{url('/admin-transfer-slab-formwork-beamslab-checklist')}}">41.Check List For Transfer slab Formwork-Beam/Slab</option>
													    <option value="{{url('/admin-slab-conduiting-in-mivan-checklist')}}">42.Check List For Slab Conduiting In Mivan(Electrical)</option>

													    <option value="{{url('/admin-fire-fighthing-checklist')}}">43.Checklist For Fire Fighthing - FA-PA</option>
														<option value="{{url('/admin-for-flooring-checklist')}}">44.Checklist For Flooring </option>
														<option value="{{url('/admin-hydro-pressure-testing-checklist')}}">45.CHECKLIST FOR TOWER CORRIDORS & LIFT LOBBIES - MS PIPING & HYDRO PRESSURE TESTING </option>
														<option value="{{url('/admin-internal-painting-checklist')}}">46.CHECKLIST FOR INTERNAL PAINTING </option>
														<option value="{{url('/admin-door-and-window-frames-fixing-checklist')}}">47.CHECKLIST FOR DOOR AND WINDOW FRAMES FIXING </option>
													 	<option value="{{url('/admin-door-and-window-shutter-fixing-checklist')}}">48.CHECKLIST FOR DOOR AND WINDOW SHUTTER FIXING </option>
														<option value="{{url('/admin-checklist-for-railing-checklist')}}">49.CHECKLIST FOR RAILING </option>
													    <option value="{{url('/admin-toilet-flooring-checklist')}}">50.CHECKLIST FOR TOILET FLOORING </option>
														<option value="{{url('/admin-checklist-for-punning-checklist')}}">51.CHECKLIST FOR PUNNING </option>
														<option value="{{url('/admin-pvc-solvent-type-pipeline-checklist')}}">52.CHECKLIST FOR PVC SOLVENT TYPE PIPELINE</option>
													    <option value="{{url('/admin-marble-flooring-checklist')}}">53.MARBLE FLOORING   </option>
														<option value="{{url('/admin-tiles-cladding-checklist')}}">54.TILES CLADDING   </option>
													    <option value="{{url('/admin-sleeves-InMivan-WallSlab-checklist')}}">55.CHECK LIST FOR SLEEVES IN MIVAN WALL & SLAB(PLUMBING)   </option>
														<option value="{{url('/admin-core-cut-checklist')}}">56.CHECK LIST FOR CORE CUT  </option>
														<option value="{{url('/admin-quality-checklist')}}">57. CHECK LIST  SCREED  </option>
														<option value="{{url('/admin-electrical-conduits-in-mivan-walls-checklist')}}">59. CHECK LIST FOR ELECTRICAL CONDUITS IN  MIVAN WALLS  </option>
														<option value="{{url('/admin-drainage-lines-in-toilets-checklist')}}">60. DRAINAGE LINES IN TOILETS  </option>
													    <option value="{{url('/admin-handing-over-checklist')}}">61.HANDING OVER CHECKLIST STAGE-01  </option>
													    <option value="{{url('/admin-sunken-area-checklist')}}">62. HANDING OVER CHECKLIST SUNKEN AREA </option>
														<option value="{{url('/admin-water-supply-linesin-toilets-checklist')}}">63. WATER SUPPLY LINES IN TOILETS </option>
										                <option value="{{url('/admin-masonry-work-checklist')}}">64.MASONRY WORK (CLAY BRICK/CEMENT BLOCK) </option>
														<option value="{{url('/admin-internal-plastering-checklist')}}">65.CHECKLIST FOR INTERNAL PLASTERING </option>
														<option value="{{url('/admin-walltie-hole-packing-external-walls-checklist')}}">66.CHECKLIST FOR WALL TIE HOLE PACKING EXTERNAL WALLS </option>
														<option value="{{url('/admin-putty-works-checklist')}}">67.CHECKLIST FOR PUTTY WORKS </option>
														<option value="{{url('/admin-checklist-for-vdf-ips-flooring')}}">68.CHECKLIST FOR VDF/IPS FLOORING </option>
														<option value="{{url('/admin-internal-putty-works')}}">69.CHECKLIST FOR INTERNAL PUTTY WORKS </option>
														<option value="{{url('/admin-granite-flooring-checklist')}}">70.CHECKLIST FOR GRANITE FLOORING </option>
														<option value="{{url('/admin-pourcard-fortypical-floors-concreting')}}">71.POUR CARD FOR TYPICAL FLOORS CONCRETING </option>
														<option value="{{url('/admin-screed-concrete')}}">72.CHECK LIST FOR  SCREED CONCRETE  </option>
														<option value="{{url('/admin-gypsum-plaster')}}">73.CHECKLIST FOR GYPSUM PLASTER  </option>
													 	<option value="{{url('/admin-internal-door-fixing-works')}}">74.CHECK LIST FOR INTERNAL DOOR FIXING WORKS  </option>
													   <option value="{{url('/admin-electrical-services')}}">75.CHECK LIST FOR ELECTRICAL SERVICES  </option>
													   <option value="{{url('/admin-sleeves-pvc')}}">76.CHECKLIST FOR SLEEVES  PVC  </option>
													   <option value="{{url('/admin-installation-of-dampers')}}">77.CHECK LIST FOR INSTALLATION OF DAMPER'S  </option>
													  <option value="{{url('/admin-inspection-of-dampers')}}">78.CHECK LIST FOR INSPECTION OF DAMPER'S </option>
												   	  <option value="{{url('/admin-sprinkler-system-works')}}">79.CHECK LIST FOR SPRINKLER SYSTEM WORKS </option>
													  <option value="{{url('/admin-copper-piping-and-drain-line')}}">80.CHECK LIST FOR COPPER PIPING AND DRAIN LINE CHECKING WORKS (AC WORKS)</option>
													  <option value="{{url('/admin-sleeves-inspection-rfi')}}">81.SLEEVES INSPECTION RFI CHECKLIST </option>
													  <option value="{{url('/admin-sub-soil-drain-inspection')}}">82.SUB SOIL DRAIN INSPECTION CHECKLIST </option>
													  <option value="{{url('/admin-valves-installation')}}">83.VALVES INSTALLATION CHECKLIST </option>
													  <option value="{{url('/admin-water-proffing-works-toilet-utility')}}">84.CHECK LIST FOR -WATER PROFFING WORKS-TOILET & UTILITY AREAS </option>

													   <option value="{{url('/admin-manhole-installation-checklist')}}">85.MAN HOLE INSTALLATION CHECKLIST </option>
													   <option value="{{url('/admin-irrigation-pipeline-works')}}">86.CHECKLIST FOR IRRIGATION PIPELINE WORKS </option>


													</select>
                                <div class="field-placeholder">Search Check List Name</div>
                            </div>
                        </div>
                    </ul>
                    <ul>
                        <li class="list-heading">Checklist Operations</li>
                        <li><a href="{{url('admin-pcc-all-list')}}">Raised Checklists</a></li>
                        <li><a href="{{url('staff-checklist-request')}}">Received Checklists</a></li>
                        <li><a href="{{url('admin-approved-pcc-all-list')}}">Approved Checklists</a></li>
                        <li><a href="{{url('admin-rejected-all-checklist')}}">Rejected Checklists</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="tab-pages" role="tabpanel" aria-labelledby="pages-tab">
            <div class="tab-pane-header"></div>
            <div class="sidebarMenuScroll">
                <div class="sidebar-menu">
                    <ul>
                        <li class="list-heading">Project Documents & Drawings</li>
                        <li><a href="{{url('/admin-add-document-category')}}">Add Document Category</a></li>
                        <li><a href="{{url('/admin-document-category-list')}}">Document Category List</a></li>
                        <li><a href="{{url('upload-project-documents')}}">Upload Documents</a></li>
                        <li><a href="{{url('upload-project-documents-list')}}">Uploaded Documents List</a></li>
                        <li><a href="{{url('admin-category-download-documents')}}">Download Files</a></li>

                        <li class="list-heading"><u> Structural Drawings</u></li>
                        <?php if (auth()->check() && auth()->user()->id == $drawing_user_id): ?>

                        <li><a href="{{url('/create-admin-structural-drawings')}}">Add Structural Drawings </a></li>
                        <li><a href="{{url('/admin-structural-drawings-list')}}">Add List Of Drawings</a></li>

                        <?php endif; ?>

                        <li><a href="{{url('/structural-drawings-list-for-users')}}">Structural Drawings List </a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="tab-forms1" role="tabpanel" aria-labelledby="forms-tab1">
            <div class="tab-pane-header"></div>
            <div class="sidebarMenuScroll">
                <div class="sidebar-menu">
                    <ul>
                        <li class="list-heading">Material Procurement</li>
                        <li><a href="{{url('/admin-create-request-for-material-procurement')}}">Create Mat. Proc. Request</a></li>
                        <li><a href="{{url('/admin-all-raised-requests-for-material-procurement')}}">Mat. Proc. Request List</a></li>
                        <li><a href="{{url('/admin-all-received-requests-for-material-procurement')}}">Received Mat. Proc. Request List</a></li>
                        <li><a href="{{url('/admin-all-approved-requests-for-material-procurement')}}">Approved Mat. Proc. Request List</a></li>
                        <li><a href="{{url('/admin-all-approved-requests-genaerate-report')}}">Mat. Proc. Generate Report</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="tab-forms2" role="tabpanel" aria-labelledby="forms-tab2">
            <div class="tab-pane-header"></div>
            <div class="sidebarMenuScroll">
                <div class="sidebar-menu">
                    <ul>
                        <li class="list-heading">Project Documents</li>
                        <li><a href="{{url('/admin-project-schdule-documents-side-menu')}}">Project Schedule Documents</a></li>

                         <li><a href="{{url('/admin-projected-schdule-dates')}}">Projected Project schdule Dates</a></li>
                          <li><a href="{{url('/admin-project-schdule-drawings-inventory')}}">Admin Drawing inventory</a></li>

                           <li><a href="{{url('/admin-project-schdule-user-drawings-inventory')}}">Drawing inventory</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="tab-authentication" role="tabpanel" aria-labelledby="authentication-tab">
            <div class="tab-pane-header"></div>
            <div class="sidebarMenuScroll">
                <div class="sidebar-menu">
                    <ul>
                        <li class="list-heading">My Employees</li>
                        <li><a href="{{ url('/admin-manager-under-employees-list') }}">Project Progress Report</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Tabs content end -->

    <script>
        // Function to set the active tab based on session storage or default to home-tab
        function setActiveTab() {
            const activeTabId = sessionStorage.getItem('activeTab') || 'home-tab'; // Default to home-tab if no session
            const tabs = document.querySelectorAll('.nav-link');

            tabs.forEach(tab => {
                const targetId = tab.getAttribute('href').substring(1);
                if (tab.id === activeTabId) {
                    tab.classList.add('active');
                    document.getElementById(targetId).classList.add('show', 'active');
                } else {
                    tab.classList.remove('active');
                    document.getElementById(targetId).classList.remove('show', 'active');
                }
            });
        }

        // Event listener for tab clicks
        document.querySelectorAll('.nav-link').forEach(tab => {
            tab.addEventListener('click', function() {
                sessionStorage.setItem('activeTab', this.id); // Store the active tab ID
            });
        });

        // Set the active tab on page load
        window.onload = setActiveTab;
    </script>
<?php } ?>


    <!--------------------------------------------end LMS Login Acccess------------->


    <!---------------------------------------------WEB Admin Login Access----------------->

 <?php if ($authid == 3): ?>
    <!-- Sidebar wrapper start -->
    <nav class="sidebar-wrapper">

        <!-- Sidebar content start -->
        <div class="sidebar-tabs">

            <!-- Tabs nav start -->
            <div class="nav" role="tablist" aria-orientation="vertical">
                <a href="#" class="logo">
                    <img src="{{ asset('web/assets/images/mainlogo.png') }}" alt="iChat">
                </a>
                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="true">
                    <i class="icon-home2"></i>
                    <span class="nav-link-text">Dashboards</span>
                </a>
                <!--<a class="nav-link" id="product-tab" data-bs-toggle="tab" href="#tab-product" role="tab" aria-controls="tab-product" aria-selected="false">-->
                <!--    <i class="icon-layers2"></i>-->
                <!--    <span class="nav-link-text">Product</span>-->
                <!--</a>-->
                <!--<a class="nav-link" id="pages-tab" data-bs-toggle="tab" href="#tab-pages" role="tab" aria-controls="tab-pages" aria-selected="false">-->
                <!--    <i class="icon-book-open"></i>-->
                <!--    <span class="nav-link-text">Pages</span>-->
                <!--</a>-->
            </div>
            <!-- Tabs nav end -->

            <!-- Tabs content start -->
            <div class="tab-content">
                <!-- Home tab -->
                <div class="tab-pane fade show active" id="tab-home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="tab-pane-header">
                        <a href="{{ url('/admin-home') }}">
                            <p style="font-size:13px">User: {{ Auth::user()->name }} ({{ Auth::user()->identity_number }})</p>
                        </a>
                    </div>
                    <div class="sidebarMenuScroll">
                        <div class="sidebar-menu">
                            <ul>
                                <li><a href="#" class="current-page">Dashboard</a></li>
                                <li><a href="{{ url('/hr-post-job-details') }}">Post Job Details</a></li>
                                <li><a href="{{ url('/hr-job-details-list') }}">Job Details List</a></li>
                                <li><a href="{{ url('/hr-applications-list') }}">Applications List</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Product tab -->
                <div class="tab-pane fade" id="tab-product" role="tabpanel" aria-labelledby="product-tab">
                    <div class="tab-pane-header">Product</div>
                    <div class="sidebarMenuScroll">
                        <div class="sidebar-menu">
                            <ul>
                                <li><a href="products.html">Products Grid</a></li>
                                <li><a href="products-list.html">Products List</a></li>
                                <li><a href="add-product.html">Add Product</a></li>
                                <li><a href="orders.html">Orders</a></li>
                                <li><a href="customers-list.html">Customers</a></li>
                                <li><a href="products-reviews.html">Reviews</a></li>
                            </ul>
                            <ul>
                                <li class="list-heading">Calendars</li>
                                <li><a href="calendar-daygrid-view.html">Daygrid View</a></li>
                                <li><a href="calendar-list-view.html">List View</a></li>
                                <li><a href="calendar-external-dragging.html">Draggable</a></li>
                                <li><a href="calendar-google-view.html">Google View</a></li>
                                <li><a href="calendar-selectable.html">Selectable</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Pages tab (if applicable) -->
                <div class="tab-pane fade" id="tab-pages" role="tabpanel" aria-labelledby="pages-tab">
                    <div class="tab-pane-header">Pages</div>
                    <div class="sidebarMenuScroll">
                        <div class="sidebar-menu">
                            <!-- Add your page links here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tabs content end -->

        </div>
        <!-- Sidebar content end -->

    </nav>
    <!-- Sidebar wrapper end -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Retrieve the active tab from session storage
            const activeTab = sessionStorage.getItem('activeTab');

            // If there's an active tab stored, set it as the active tab
            if (activeTab) {
                // Hide all tabs
                const tabs = document.querySelectorAll('.tab-pane');
                tabs.forEach(tab => {
                    tab.classList.remove('show', 'active');
                });

                // Remove active class from all links
                const links = document.querySelectorAll('.nav-link');
                links.forEach(link => {
                    link.classList.remove('active');
                });

                // Show the stored tab and set it as active
                const activeTabPane = document.getElementById(activeTab);
                if (activeTabPane) {
                    activeTabPane.classList.add('show', 'active');
                }
                const activeLink = document.getElementById(activeTab + '-tab');
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            } else {
                // Default to the Home tab if no tab is stored
                const defaultTabPane = document.getElementById('tab-home');
                if (defaultTabPane) {
                    defaultTabPane.classList.add('show', 'active');
                }
            }

            // Add click event listener to each tab link
            const tabLinks = document.querySelectorAll('.nav-link');
            tabLinks.forEach(link => {
                link.addEventListener('click', function () {
                    // Store the clicked tab ID in session storage
                    const tabId = this.getAttribute('href').substring(1);
                    sessionStorage.setItem('activeTab', tabId);
                });
            });
        });
    </script>
<?php endif; ?>
   <!--------------------------------------------end Web Admin Login Acccess------------->


				</div>
				<!-- Sidebar content end -->


            </nav>
			<!-- Sidebar wrapper end -->


            <div class="main-container">

                <!-- Page header starts -->
                <div class="page-header">

                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-9">

                            <!-- Search container start -->
                            <div class="search-container">

                                <!-- Toggle sidebar start -->
                                <div class="toggle-sidebar" id="toggle-sidebar">
                                    <i class="icon-menu"></i>
                                </div>
                                <!-- Toggle sidebar end -->

                                <!-- Mega Menu Start -->
                                <!--<div class="cd-dropdown-wrapper">-->
                                <!--    <a class="cd-dropdown-trigger" href="#0"><i class="icon-menu menu-icon"></i><span class="menu-text">Categories</span></a>-->
                                <!--    <nav class="cd-dropdown">-->

                                <!--        <ul class="cd-dropdown-content">-->

                                <!--            <li class="has-children">-->
                                <!--                <a href="#">Main Pages</a>-->
                                <!--                <ul class="cd-secondary-dropdown is-hidden">-->
                                <!--                    <li class="has-children">-->
                                <!--                        <a href="#">Programming</a>-->
                                <!--                        <ul class="is-hidden">-->
                                <!--                            <li>-->
                                <!--                                <a href="reports.html">JAVA</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="saas.html">Python</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="sales.html">Java Script</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="layout-megamenu.html">PHP</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="sales.html">Spring Boot Framework</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="layout-megamenu.html">Laravel Framework</a>-->
                                <!--                            </li>-->


                                <!--                        </ul>-->
                                <!--                    </li>-->
                                <!--                    <li class="has-children">-->
                                <!--                        <a href="#">Web Development</a>-->
                                <!--                        <ul class="is-hidden">-->
                                <!--                            <li>-->
                                <!--                                <a href="starter-page.html">HTML</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="layout-full-screen.html">CSS</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="layout-search.html">BOOTSTRAP</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="layout-megamenu.html">JAVA SCRIPT</a>-->
                                <!--                            </li>-->


                                <!--                        </ul>-->
                                <!--                    </li>-->
                                <!--                </ul>-->
                                <!--            </li>-->

                                <!--            <li class="has-children">-->
                                <!--                <a href="#">Database Design &amp; Testing</a>-->

                                <!--                <ul class="cd-secondary-dropdown is-hidden">-->
                                <!--                    <li class="has-children">-->
                                <!--                        <a href="#">Databases</a>-->
                                <!--                        <ul class="is-hidden">-->
                                <!--                            <li>-->
                                <!--                                <a href="products.html">SQL</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="products-list.html">MYSQL</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="add-product.html">Mongo DB</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="orders.html">MYSQL Server</a>-->
                                <!--                            </li>-->
                                <!--                         </ul>-->
                                <!--                    </li>-->

                                <!--                    <li class="has-children">-->
                                <!--                        <a href="#">Testing</a>-->
                                <!--                        <ul class="is-hidden">-->
                                <!--                            <li>-->
                                <!--                                <a href="calendar-daygrid-view.html">Selenium WebDriver</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="calendar-list-view.html">Selinium Automation</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="calendar-external-dragging.html">API</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="calendar-google-view.html">API Testing</a>-->
                                <!--                            </li>-->
                                <!--                          </ul>-->
                                <!--                    </li>-->
                                <!--                </ul>-->
                                <!--            </li>-->

                                <!--            <li class="has-children">-->
                                <!--                <a href="#">Forms</a>-->

                                <!--                <ul class="cd-secondary-dropdown is-hidden">-->

                                <!--                    <li class="has-children">-->
                                <!--                        <a href="#">Form Layouts</a>-->
                                <!--                        <ul class="is-hidden">-->
                                <!--                            <li>-->
                                <!--                                <a href="forms-layout-one.html">Default Layout</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="forms-layout-two.html">Layout Sections</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="forms-layout-three.html">Simple Form Layout</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="forms-layout-four.html">Select 2 Tags and Mask</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="forms-layout-five.html">Horizontal Form Layout</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="forms-layout-six.html">Layout Six with Tabs</a>-->
                                <!--                            </li>-->
                                <!--                        </ul>-->
                                <!--                    </li>-->

                                <!--                    <li class="has-children">-->
                                <!--                        <a href="#">Forms</a>-->
                                <!--                        <ul class="is-hidden">-->
                                <!--                            <li>-->
                                <!--                                <a href="forms-inputs.html">Form Inputs</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="forms-input-groups.html">Input Groups</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="forms-checkbox-radio.html">Checkbox &amp; Radios</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="forms-validation.html">Form Validation</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="forms-dropzone.html">Dropzone</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="forms-bs-select.html">Select 2 Dropdowns</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="forms-date-time-picker.html">Date Time Picker</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="forms-input-mask.html">Input Mask</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="forms-input-range.html">Input Range</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="forms-editor.html">WYSIWYG Editor</a>-->
                                <!--                            </li>-->
                                <!--                        </ul>-->
                                <!--                    </li>-->
                                <!--                </ul>-->
                                <!--            </li>-->

                                <!--            <li class="has-children">-->
                                <!--                <a href="#">Pages &amp; Components</a>-->

                                <!--                <ul class="cd-secondary-dropdown is-hidden">-->

                                <!--                    <li class="has-children">-->
                                <!--                        <a href="#">Pages</a>-->
                                <!--                        <ul class="is-hidden">-->
                                <!--                            <li>-->
                                <!--                                <a href="chat.html">Chat</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="tasks.html">Tasks</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="create-invoice.html">Create Invoice</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="view-invoice.html">View Invoice</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="documents.html">Documents</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="faq.html">Faq's</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="contacts.html">Contacts</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="pricing.html">Pricing</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="gallery-tiles.html">Gallery Tiles</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="gallery.html">Gallery</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="icons.html">Icons</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="timeline.html">Timeline</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="search-results.html">Search Results</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="account-settings.html">Account Settings</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="user-profile.html">User Profile</a>-->
                                <!--                            </li>-->
                                <!--                        </ul>-->
                                <!--                    </li>-->

                                <!--                    <li class="has-children">-->
                                <!--                        <a href="#">Components</a>-->
                                <!--                        <ul class="is-hidden">-->
                                <!--                            <li>-->
                                <!--                                <a href="accordions.html">Accordions</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="alerts.html">Alerts</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="buttons.html">Buttons</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="badges.html">Badges</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="cards.html">Cards</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="carousel.html">Carousel</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="list-group.html">List group</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="modals.html">Modal</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="paginations.html">Paginations</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="popovers.html">Popovers</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="progress.html">Progress</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="spinners.html">Spinners</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="tabs.html">Tabs</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="toasts.html">Toasts</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="tooltips.html">Tooltips</a>-->
                                <!--                            </li>-->
                                <!--                        </ul>-->
                                <!--                    </li>-->
                                <!--                </ul>-->
                                <!--            </li>-->

                                <!--            <li class="has-children">-->
                                <!--                <a href="#">Graphs &amp; Tables</a>-->

                                <!--                <ul class="cd-secondary-dropdown is-hidden">-->

                                <!--                    <li class="has-children">-->
                                <!--                        <a href="#">Graphs</a>-->
                                <!--                        <ul class="is-hidden">-->
                                <!--                            <li>-->
                                <!--                                <a href="apex-graphs.html">Apex Graphs</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="morris-graphs.html">Morris Graphs</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="vector-maps.html">Vector Maps</a>-->
                                <!--                            </li>-->
                                <!--                        </ul>-->
                                <!--                    </li>-->

                                <!--                    <li class="has-children">-->
                                <!--                        <a href="#">Tables</a>-->
                                <!--                        <ul class="is-hidden">-->
                                <!--                            <li>-->
                                <!--                                <a href="bootstrap-tables.html">Bootstrap Tables</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="custom-tables.html">Custom Tables</a>-->
                                <!--                            </li>-->
                                <!--                            <li>-->
                                <!--                                <a href="data-tables.html">Data Tables</a>-->
                                <!--                            </li>-->
                                <!--                        </ul>-->
                                <!--                    </li>-->
                                <!--                </ul>-->
                                <!--            </li>-->

                                <!--            <li>-->
                                <!--                <a href="account-settings.html">Account Settings</a>-->
                                <!--            </li>-->
                                <!--            <li>-->
                                <!--                <a href="login.html">Logout</a>-->
                                <!--            </li>-->
                                <!--            <li>-->
                                <!--                <a href="error-option2.html">Error</a>-->
                                <!--            </li>-->
                                <!--        </ul>-->

                                <!--    </nav>-->
                                <!--</div>-->
                                <!-- Mega Menu End -->

                                <!-- Search input group start -->
                                <div class="ui fluid category search">
                                    <div class="ui icon input">
                                        <!--<input class="prompt" type="text" placeholder="Search">-->
                                        <!--<i class="search icon icon-search1"></i>-->


                                        <bold><p style="color:black;font-size:14px;font-weight:bold">Name :{{ optional(Auth::user())->name }} || Project : ({{ optional(Auth::user())->project_name }})
                                        || Lastlogin At: {{ optional(Auth::user())->last_login_at }} || IP Address : {{ optional(Auth::user())->last_login_ip }}    </p></bold>

                                    </div>
                                    <div class="results"></div>
                                </div>
                                <!-- Search input group end -->

                            </div>
                            <!-- Search container end -->

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-3">

                                        <?php
                                        $logs = \LogActivity::logActivityLists();

                                        ?>
                            <!-- Header actions start -->
                            <ul class="header-actions">
                                <li class="dropdown">
                                    <a href="#" id="taskss" data-toggle="dropdown" aria-haspopup="true">
                                        <i class="icon-bell"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end lrg" aria-labelledby="taskss">
                                        <div class="dropdown-menu-header">
                                            Notifications
                                        </div>
                                        <div class="customScroll">
                                            <ul class="activity">

                                                 <?php
                                                    use Carbon\Carbon;

                                                ?>
                                               @foreach($logs as $log)

                                               <?php $timegot=Carbon::parse($log->created_at)->diffForHumans(); ?>

                                                <li class="activity-list">
                                                    <div class="detail-info">
                                                        <p class="date">{{$timegot}}</p>
                                                        <p class="info">{{$log->subject}}</p>
                                                    </div>
                                                </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <!--<li class="dropdown">-->
                                <!--    <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">-->
                                <!--        <i class="icon-alert-triangle"></i>-->
                                <!--    </a>-->
                                <!--    <div class="dropdown-menu dropdown-menu-end lrg" aria-labelledby="notifications">-->
                                <!--        <div class="dropdown-menu-header">-->
                                <!--            Notifications (7)-->
                                <!--        </div>-->
                                <!--        <div class="customScroll">-->
                                <!--            <ul class="header-notifications">-->
                                <!--                <li>-->
                                <!--                    <a href="#">-->
                                <!--                        <div class="user-img online">-->
                                <!--                            <img src="img/user6.png" alt="User">-->
                                <!--                        </div>-->
                                <!--                        <div class="details">-->
                                <!--                            <div class="user-title">Larkyn</div>-->
                                <!--                            <div class="noti-details">Check out every table in detail.</div>-->
                                <!--                            <div class="noti-date">April 25, 04:00 pm</div>-->
                                <!--                        </div>-->
                                <!--                    </a>-->
                                <!--                </li>-->
                                <!--                <li>-->
                                <!--                    <a href="#">-->
                                <!--                        <div class="user-img busy">-->
                                <!--                            <img src="img/user10.png" alt="User">-->
                                <!--                        </div>-->
                                <!--                        <div class="details">-->
                                <!--                            <div class="user-title">Braxten</div>-->
                                <!--                            <div class="noti-details">Approved new design.</div>-->
                                <!--                            <div class="noti-date">April 10, 12:00 am</div>-->
                                <!--                        </div>-->
                                <!--                    </a>-->
                                <!--                </li>-->
                                <!--                <li>-->
                                <!--                    <a href="#">-->
                                <!--                        <div class="user-img away">-->
                                <!--                            <img src="img/user21.png" alt="User">-->
                                <!--                        </div>-->
                                <!--                        <div class="details">-->
                                <!--                            <div class="user-title">Maria</div>-->
                                <!--                            <div class="noti-details">Membership has been ended.</div>-->
                                <!--                            <div class="noti-date">March 20, 07:30 pm</div>-->
                                <!--                        </div>-->
                                <!--                    </a>-->
                                <!--                </li>-->
                                <!--                <li>-->
                                <!--                    <a href="#">-->
                                <!--                        <div class="user-img busy">-->
                                <!--                            <img src="img/user15.png" alt="User">-->
                                <!--                        </div>-->
                                <!--                        <div class="details">-->
                                <!--                            <div class="user-title">Alex</div>-->
                                <!--                            <div class="noti-details">Design Review.</div>-->
                                <!--                            <div class="noti-date">April 18, 09:30 am</div>-->
                                <!--                        </div>-->
                                <!--                    </a>-->
                                <!--                </li>-->
                                <!--                <li>-->
                                <!--                    <a href="#">-->
                                <!--                        <div class="user-img online">-->
                                <!--                            <img src="img/user5.png" alt="User">-->
                                <!--                        </div>-->
                                <!--                        <div class="details">-->
                                <!--                            <div class="user-title">Sunny</div>-->
                                <!--                            <div class="noti-details">UI Discussion</div>-->
                                <!--                            <div class="noti-date">April 21, 05:00 pm</div>-->
                                <!--                        </div>-->
                                <!--                    </a>-->
                                <!--                </li>-->
                                <!--            </ul>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</li>-->
                                <li class="dropdown">
                                    <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                                        <span class="avatar">
                                            <!--<img src="/uploads/courses/{{ optional(Auth::user())->profile_photo }}" alt="User Avatar">-->
                                            @if(optional(Auth::user())->profile_photo)
                                                        <img src="/uploads/courses/{{ optional(Auth::user())->profile_photo }}" class="media-avatar" alt="Customer">
                                                    @else
                                                      <img src="{{asset('admin/img/user.svg')}}" class="media-avatar" alt="EMP">
                                                    @endif

                                            <span class="status online"></span>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
                                        <div class="header-profile-actions">
                                            <a href="{{ url('admin-profile') }}"><i class="icon-user1"></i>Profile</a>
                                            <a href="{{ url('admin-settings') }}"><i class="icon-settings1"></i>Settings</a>
                                            <a href="{{ url('/logout') }}"><i class="icon-log-out1"></i>Logout</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- Header actions end -->

                        </div>
                    </div>
                    <!-- Row end -->
                    <div class="flash-message">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                          @if(Session::has('alert-' . $msg))

                          <h2 style="text-align:right" class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="btn-close" data-bs-dismiss="alert" aria-label="close">&times;</a></h2>
                          @endif
                        @endforeach
                      </div>

                </div>
                <!-- Page header ends -->



