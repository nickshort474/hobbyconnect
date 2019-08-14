<!DOCTYPE html>
<html lang="en">
	<head>
		<!--  Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145311665-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		
		  gtag('config', 'UA-145311665-1');
		</script> 

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=0" />
		<meta name="Description" content="PeopleFinder, a way to connect with people who share your passions, interests, and hobbies. Search for hobbies and locations and message people to start a connection">
		<title>PeopleFinder</title>
		<link rel="stylesheet" type ="text/css"  href="<?php echo base_url(); ?>css/bootstrap.min.css" />
		
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
		<link rel="stylesheet" type ="text/css"  href="<?php echo base_url(); ?>css/styles.css" />



	</head>
	<body>
	<nav id="sideNav" class="sideNav">
	   	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	 

		<?php 


			echo '<ul>';
			if($this->session->logged_in == 1){
				
				

				echo '<li><a href="' . base_url() . 'index.php/show_profile">Show Profile</a></li>';
				echo '<li><a href="' . base_url() . 'index.php/connect">Connect</a></li>';
				
				
				if($this->session->userdata('requests')){
					
					echo '<li><a href="' . base_url() . 'index.php/messages">Messages: ' . $count = count($this->session->userdata('requests')) . '</a></li><br /><br />';
				}else{
					echo '<br /><br />';
				}

				echo '<li><a href="' . base_url() . 'index.php/signout">Sign out</a></li>';
			}else{
				
				echo '<li><a href="' . base_url() . 'index.php/create_account">Create Account</a></li>';
				echo '<li><a href="' . base_url() . 'index.php/signin">Sign in</a></li>';
			}
			echo '</ul>';

		?>




	</nav>
	<span onclick="openNav()" class="fa fa-bars"></span>
	<div class="titleBlock">
	
		
		<span ><a href="<?php echo base_url(); ?>" class="title">PeopleFinder</a></span>
		
	</div>

	<main class="container" id="container">
