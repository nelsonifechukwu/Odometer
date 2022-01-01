 <?php
  
  require_once('backend/register.php');
  require_once('backend/login.php');

?> 
 <!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="./assets/img/FleetMA favicon.png" />
	<title>
		FleetMA | Welcome
	</title>
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" />
	<!-- Nucleo Icons -->
	<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
	<!-- CSS Files -->
	<link href="./assets/css/black-dashboard.css" rel="stylesheet" />
	<link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="white-body white-content">
	<main class="main">
	    <div class="main-overlay h-100">
	        		<!-- Nav-->
		<nav class="navbar navbar-expand-md text-white navbar-transparent mb-4">
			<div class="container">
				<a href="#" class="text-dark navbar-brand"><img src="./assets/img/logo.png" alt="" /></a>

				<!-- Toggler/collapsibe Button -->
				<div class="navbar-toggle d-inline">
					<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar">
						<span class="navbar-toggler-bar bar1"></span>
						<span class="navbar-toggler-bar bar2"></span>
						<span class="navbar-toggler-bar bar3"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav d-md-none ml-auto" id="homeNav">
						<li class="nav-item active">
							<a class="nav-link" href="#" data-toggle="modal" data-target="#modalLoginForm">LOGIN<span
									class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="#" data-toggle="modal" data-target="#modalRegistrationForm">REGISTER<span
									class="sr-only">(current)</span></a>
						</li>
					</ul>
				</div>
				<div class="d-none d-md-block">
					<div>
						<ul class="navbar-nav ml-auto" id="homeNavExpanded">
							<form class="form-inline">
								<button class="btn btn-outline-light mr-4" type="button" data-toggle="modal"
									data-target="#modalLoginForm">
									LOGIN
								</button>
								<button class="btn btn-light" type="button" data-toggle="modal" data-target="#modalRegistrationForm">
									REGISTER
								</button>
							</form>
						</ul>
					</div>
				</div>
			</div>
		</nav>

		<!-- MAIN CONTENT -->
		<div class="main-content">
		    <div class=" d-flex align-items-center h-100 justify-content-center">
    			<div class="container main-content-text col-11">
    				<div class="row justify-content-center">
    					<div class="col-md-6 d-flex align-items-center">
    						<div class="display-text d-flex flex-column align-items-center justify-content-center">
    							<h1 class="display-1 text-white main-content-display text-center">
    								We manage your fleet!
    							</h1>
    							<p class="lead text-white text-center mb-3">
    							We use top analytics technology to make managing your fleet more accurate.<br />
    								You have the data at your fingertips!
    							</p>
    							<button class="btn btn-light" type="button" data-toggle="modal" data-target="#modalRegistrationForm">
    								REGISTER
    							</button>
    						</div>
    					</div>
    				</div>
    			</div>
		    </div>
		    
		</div>
	    </div>

	</main>

	<div class="modal fade" id="modalRegistrationForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<h4 class="modal-title w-100 font-weight-bold">Register Now</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body mx-3">
					<form method="post" action="index.php">
						<div class="form-group">
							<label for="exampleInputEmail1">Company Name</label>
							<input type="text" class="form-control" id="companyName" name="company_name"
								aria-describedby="companyName" placeholder="Enter company name" />
						</div>
						<div class="form-group">
							<label for="companyEmail">Email address</label>
							<input type="email" class="form-control" id="companyEmail" name="company_email"
								aria-describedby="emailHelp" placeholder="Enter email" />
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="companyAddress">Company Address</label>
							<input type="text" class="form-control" id="exampleInputEmail1" name="company_address"
								aria-describedby="emailHelp" placeholder="Enter address" />
						</div>
						<div class="form-group">
							<label for="fleetSize">Fleet size</label>
							<select class="form-control" id="fleetSize" name="fleet_size">
								<option selected>Fleet size</option>
								<option value="1-4">1-4</option>
								<option value="5-15">5-15</option>
								<option value="16-40">16-40</option>
								<option value="41-100">41-100</option>
								<option value="101-300">101-300</option>
								<option value="300+">300+</option>
							</select>
						</div>
						<div class="form-group">
							<label for="category">Category</label>
							<select class="form-control" id="category" name="fleet_category">
								<option selected>Select fleet category</option>
								<option value="Cars/Automobiles">Cars/automobiles</option>
								<option value="Vans/Trucks">Vans/Trucks</option>
								<option value="Semi/Big rig">Semi/Big rig</option>
								<option value="Trailer">Trailer</option>
								<option value="Construction machinery">Construction machinery</option>
								<option value="Buses">Buses</option>
								<option value="Other">Other</option>
								
							</select>
						</div>
						<div class="form-group">
							<label for="comanyPassword">Password</label>
							<input type="password" class="form-control" id="companyPassword" name="password" placeholder="Password" />
						</div>

						<div class="form-group">
							<label for="comanyPassword">Confirm Password</label>
							<input type="password" class="form-control" id="companyPassword" name="password_confirmation"
								placeholder="Password" />
						</div>
						<button type="submit" name="register" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<h4 class="modal-title w-100 font-weight-bold">Login</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body mx-3">
					<form method="post">
						<div class="form-group">
							<label for="companyEmail">Email address</label>
							<input type="email" class="form-control" id="companyEmail" name="company_email"
								aria-describedby="emailHelp" placeholder="Enter email" />
						</div>
						<div class="form-group">
							<label for="comanyPassword">Password</label>
							<input type="password" class="form-control" id="companyPassword" name="company_password"
								placeholder="Password" />
						</div>
						<button type="submit" class="btn btn-primary" name="login">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!--   Core JS Files   -->
	<script src="./assets/js/core/jquery.min.js"></script>
	<script src="./assets/js/core/popper.min.js"></script>
	<script src="./assets/js/core/bootstrap.min.js"></script>
	<script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
	<!--  Google Maps Plugin    -->
	<!-- Place this tag in your head or just before your close body tag. -->
	
	
	<!--  Notifications Plugin    -->
	<script src="./assets/js/plugins/bootstrap-notify.js"></script>
	<!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="./assets/js/black-dashboard.min.js?v=1.0.0"></script>
	<!-- Black Dashboard DEMO methods, don't include it in your project! -->
	<script src="./assets/demo/demo.js"></script>
</body>

</html>