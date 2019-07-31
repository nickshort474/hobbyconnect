<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>HobbyConnect</title>
		<link rel="stylesheet" type ="text/css"  href="<?php echo base_url(); ?>css/bootstrap.min.css" />
		<link rel="stylesheet" type ="text/css"  href="<?php echo base_url(); ?>css/styles.css" />
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.4.1.min.js"></script>
		<link rel="stylesheet" type ="text/css"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.bundle.min.js"></script>


	</head>
	<body>
	<div id="sideNav" class="sideNav">
	   	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  	<!-- <a href="#">About</a>
	  		 	<a href="#">Services</a>
	  	<a href="#">Clients</a>
	  	<a href="#">Contact</a> -->
		<?php 
			if($this->session->logged_in == 1){
				

				echo '<li class="nav-item"><a class="nav-link" href="' . base_url() . 'index.php/show_profile">Show Profile</a></li>
				<li class="nav-item"><a class="nav-link" href="' . base_url() . 'index.php/connect">Connect</a></li><br />
				<li class="nav-item"><a class="nav-link" href="' . base_url() . 'index.php/signout">Sign out</a></li>';
			}else{
				
				echo '<li class="nav-item"><a class="nav-link" href="' . base_url() . 'index.php/create_profile">Create Profile</a></li>
				<li class="nav-item"><a class="nav-link" href="' . base_url() . 'index.php/signin">Sign in</a></li>';
			}
		?>




	</div>
	<span onclick="openNav()" class="fa fa-bars"></span>
	<div class="titleBlock">
	
		
		<span ><a href="<?php echo base_url(); ?>" class="title">HobbyConnect</a></span>
		
	</div>

	<div class="container" id="container">
