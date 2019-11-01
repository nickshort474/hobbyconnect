<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



<div class="content">
	
	<p>Want to go climbing but don't have someone to belay you?</p>
	<p>Want to find a knitting buddy to share your passion with?</p>
	<p>Need a scuba buddy to help you explore the seven seas?</p>
	<br />
	<p>You can find people who share your passions and pasttimes here at PeopleFinder</p>
	
	<?php 
		if($this->session->logged_in){
			echo '<a href="' . base_url() . 'index.php/show_profile" class="btn btn-dark">Show Profile</a><a href="' .  base_url()  . 'index.php/connect" class="btn btn-dark">Connect</a>';
		}else{
			echo '<a href="' . base_url() . 'index.php/create_account" class="btn btn-dark">Create Account</a><a href="' . base_url() . 'index.php/signin" class="btn btn-dark">Sign In</a>';
		}


	?> 
	
	
</div>


<div class="content">
	<h2><em>Lastest users</em></h2>
	<hr class="hr" />
	<div id="userProfile">
		<h3>Missy24</h3>
		<img src="uploads/default.png" class="profileImage" /><br />
		<div class="profileInfo">
			<p><span class="profileTitles">AKA:</span> Missy Elliot </p>
			<p><span class="profileTitles">Location:</span> Colchester </p>
			<p><span class="profileTitles">Hobby:</span> Rock Climbing</p>
			<p><span class="profileTitles">Bio:</span> Love rock climbing, would love to meet others who share my passion! </p>
		</div>		
	</div>
	
</div>

