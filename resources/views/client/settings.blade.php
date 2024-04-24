<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<style>
		.profile-photo {
			width: 200px;  /* Set width */
			height: 200px; /* Set height */
			margin: 0 auto; /* Center the image horizontally */
		}
	
		.profile-photo img {
			width: 100%; /* Make the image fill its container */
			height: 100%; /* Make the image fill its container */
			object-fit: cover; /* Cover the entire area of the container */
			border-radius: 50%; /* Ensure rounded corners for a circle */
		}
	</style>
	
	<!-- PAGE TITLE HERE -->
	<title>Admin Dashboard</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('client/images/favicon.png')}}">
	<link href="{{ asset('client/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
	<link href="{{ asset('client/css/style.css')}}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
   <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
		<div class="nav-header">
            <a href="index.html" class="brand-logo">
				<svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z" fill="url(#paint0_linear)"></path>
					<defs>
					</defs>
				</svg>
				<div class="brand-title">
					<h2 class="">Fillow.</h2>
					<span class="brand-sub-title">Saas Admin Dashboard</span>
				</div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
			
		
        <!--**********************************
            Header start
        ***********************************-->
     
        @include('client.partials.navbar')

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
		@include('client.partials.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Client</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Settings</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
									<form class="needs-validation" novalidate="">
										<div class="row">
											<!-- Left Side with Profile Picture -->
											<div class="col-xl-6">
												<div class="col-xl-12 text-center mb-4">
													<div class="profile-photo">
														<img src="{{ asset('client/images/profile/profile.png')}}" class="img-fluid rounded-circle" alt="">
													</div>
													<div class="mt-3">
														<label for="profileImage" class="btn btn-outline-primary btn-rounded px-5">
															Modifier
															<input type="file" id="profileImage" class="d-none" accept="image/*" onchange="updateProfilePicture(this)">
														</label>
													</div>
												</div>
											</div>
									
											<!-- Right Side with Form Fields -->
											<div class="col-xl-6">
												<div class="col-xl-12">
													<div class="mb-3 row">
														<label class="col-lg-4 col-form-label" for="validationCustom07">Name
															<span class="text-danger">*</span>
														</label>
														<div class="col-lg-6">
															<input type="text" class="form-control" id="validationCustom07" required="">
															<div class="invalid-feedback">
																Please enter your name.
															</div>
														</div>
													</div>
													<div class="mb-3 row">
														<label class="col-lg-4 col-form-label" for="validationCustom07">First name
															<span class="text-danger">*</span>
														</label>
														<div class="col-lg-6">
															<input type="text" class="form-control" id="validationCustom07"  required="">
															<div class="invalid-feedback">
																Please enter First name.
															</div>
														</div>
													</div>
													<div class="mb-3 row">
														<label class="col-lg-4 col-form-label" for="validationCustom07"> Localisation 
															<span class="text-danger">*</span>
														</label>
														<div class="col-lg-6">
															<input type="text" class="form-control" id="validationCustom07"  required="">
															<div class="invalid-feedback">
																Please enter your Localisation.
															</div>
														</div>
													</div>
													<div class="mb-3 row">
														<label class="col-lg-4 col-form-label" for="validationCustom07">Phone number
															<span class="text-danger">*</span>
														</label>
														<div class="col-lg-6">
															<input type="text" class="form-control" id="validationCustom07" placeholder="06 12 34 56 78" required="">
															<div class="invalid-feedback">
																Please enter your Phone number.
															</div>
														</div>
													</div>
													<div class="mb-3 row">
														<label class="col-lg-4 col-form-label" for="validationCustom07">Email
															<span class="text-danger">*</span>
														</label>
														<div class="col-lg-6">
															<input type="text" class="form-control" id="validationCustom07" placeholder="exemple@email.com" required="">
															<div class="invalid-feedback">
																Please enter your email.
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									
										<!-- Submit Button Row -->
										<div class="row mt-4">
											<div class="col-12 text-center">
												<button type="submit" class="btn btn-primary btn-lg">Submit</button>
											</div>
										</div>
									</form>
									
								
                                </div>
                            </div>
				
							
                        </div>
                    </div>
		
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Vertical Forms with icon</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form class="form-valide-with-icon needs-validation" novalidate="">
                                        <div class="mb-3">
                                            <label class="text-label form-label" for="validationCustomUsername">Username</label>
                                            <div class="input-group">
												<span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Enter a username.." required="">
												<div class="invalid-feedback">
													Please Enter a username.
												  </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="text-label form-label" for="dlab-password">Password *</label>
                                            <div class="input-group transparent-append">
												<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                <input type="password" class="form-control" id="dlab-password" placeholder="Choose a safe one.." required="">
												<span class="input-group-text show-pass"> 
													<i class="fa fa-eye-slash"></i>
													<i class="fa fa-eye"></i>
												</span>
                                                <div class="invalid-feedback">
													Please Enter a username.
												</div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check">
											  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required="">
											  <label class="form-check-label" for="invalidCheck2">
												Check Me out
											  </label>
											</div>
                                        </div>
                                        <button type="submit" class="btn me-2 btn-primary">Submit</button>
                                        <button type="submit" class="btn btn-light">cencel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2021</p>
            </div>
        </div>
		<script>
			function updateProfilePicture(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();
					reader.onload = function(e) {
						$('.profile-photo img').attr('src', e.target.result);
					}
					reader.readAsDataURL(input.files[0]);
				}
			}
		</script>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('client/vendor/global/global.min.js')}}"></script>
	<script src="{{ asset('client/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('client/js/custom.min.js')}}"></script>
	<script src="{{ asset('client/js/dlabnav-init.js')}}"></script>
	<script src="{{ asset('client/js/demo.js')}}"></script>
    <script src="{{ asset('client/js/styleSwitcher.js')}}"></script>
</body>
</html>