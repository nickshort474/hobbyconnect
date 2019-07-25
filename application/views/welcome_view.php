<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



<div class="content">
	
	<p>Want to go climbing but don't have someone to belay you?</p>
	<p>Want to find a knitting group to share your passion with?</p>
	<p>Need a scuba buddy to help you explore the seven seas?</p>
	<br />
	<p>You can find people who share your passions and pasttimes here at HobbyConnect</p>
	
	<?php 
		if($this->session->logged_in){
			echo '<a href="' . base_url() . 'index.php/show_profile" class="btn btn-primary">Show Profile</a><br /><a href="' . base_url() . 'index.php/signout" class="btn btn-primary">Sign out</a><br /><a href="' .  base_url()  . 'index.php/connect" class="btn btn-primary">Connect</a>';
		}else{
			echo '<a href="' . base_url() . 'index.php/create_profile" class="btn btn-primary">Create Profile</a><br /><a href="' . base_url() . 'index.php/signin" class="btn btn-primary">Sign In</a><br />';
		}


	?> 
	
	
</div>
