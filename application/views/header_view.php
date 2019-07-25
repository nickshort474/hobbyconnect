<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>HobbyConnect</title>
		<link rel="stylesheet" type ="text/css"  href="<?php echo base_url(); ?>css/bootstrap.min.css" />
		<link rel="stylesheet" type ="text/css"  href="<?php echo base_url(); ?>css/styles.css" />
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.4.1.min.js"></script>
		
		<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.bundle.min.js"></script>
		<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZDAHxx3voCpSRMm1slo0JB3CLaVbWhk0&callback=initMap" async defer></script> -->

	</head>
	<body>
	<div class="header">
		<!-- <h1><a href="<?php echo base_url(); ?>" />HobbyConnect</a></h1>
		<div class="authButtons">
		
		</div> -->
	
		<nav class="navbar navbar-expand-md bg-dark navbar-dark d-flex">
		  	<!-- Brand -->
			<a class="navbar-brand" href="<?php echo base_url(); ?>">HobbyConnect</a>

		  	<!-- Toggler/collapsibe Button -->
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    	<span class="navbar-toggler-icon"></span>
		 	</button>

		  	<!-- Navbar links -->
		  	<div class="collapse navbar-collapse mr-auto" id="collapsibleNavbar">
		    	<ul class="navbar-nav">
		      	
					<?php 
						if($this->session->logged_in){
							

							echo '<li class="nav-item"><a class="nav-link" href="' . base_url() . 'index.php/show_profile">Show Profile</a></li>
							<li class="nav-item"><a class="nav-link" href="' . base_url() . 'index.php/connect">Connect</a></li>
							<li class="nav-item"><a class="nav-link" href="' . base_url() . 'index.php/signout">Sign out</a></li>';
						}else{
							
							echo '<li class="nav-item"><a class="nav-link" href="' . base_url() . 'index.php/create_profile">Create Profile</a></li>
							<li class="nav-item"><a class="nav-link" href="' . base_url() . 'index.php/signin">Sign in</a></li>';
						}
					?>



		    	</ul>
		  	</div>
		</nav> 


	</div>
	<div class="container">
