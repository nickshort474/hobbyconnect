<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>PeopleFinder</title>
		<link rel="stylesheet" type ="text/css"  href="<?php echo base_url(); ?>css/bootstrap.min.css" />
		<link rel="stylesheet" type ="text/css"  href="<?php echo base_url(); ?>css/styles.css" />
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.4.1.min.js"></script>
		<link rel="stylesheet" type ="text/css"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.bundle.min.js"></script>
		

		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>favicons/favicon-16x16.png">
		<link rel="manifest" href="<?php echo base_url(); ?>favicons/site.webmanifest">
		<link rel="mask-icon" href="<?php echo base_url(); ?>favicons/safari-pinned-tab.svg" color="#5bbad5">
		<link rel="shortcut icon" href="<?php echo base_url(); ?>favicons/favicon.ico">
		<meta name="msapplication-TileColor" content="#b33d37">
		<meta name="msapplication-config" content="<?php echo base_url(); ?>favicons/browserconfig.xml">
		<meta name="theme-color" content="#ffffff">




	</head>
	<body>
	<div id="sideNav" class="sideNav">
	   	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	 

		<?php 



			if($this->session->logged_in == 1){
				
				echo '<li class="nav-item"><a class="nav-link" href="' . base_url() . 'index.php/show_profile">Show Profile</a></li>';
				echo '<li class="nav-item"><a class="nav-link" href="' . base_url() . 'index.php/connect">Connect</a></li>';
				
				echo '<li class="nav-item"><a class="nav-link" href="' . base_url() . 'index.php/messages">Messages: ' . count($this->session->userdata('requests')) . '</a></li><br /><br />';
				echo '<li class="nav-item"><a class="nav-link" href="' . base_url() . 'index.php/signout">Sign out</a></li>';
			}else{
				
				echo '<li class="nav-item"><a class="nav-link" href="' . base_url() . 'index.php/create_profile">Create Profile</a></li>';
				echo '<li class="nav-item"><a class="nav-link" href="' . base_url() . 'index.php/signin">Sign in</a></li>';
			}


		?>




	</div>
	<span onclick="openNav()" class="fa fa-bars"></span>
	<div class="titleBlock">
	
		
		<span ><a href="<?php echo base_url(); ?>" class="title">PeopleFinder</a></span>
		
	</div>

	<div class="container" id="container">
