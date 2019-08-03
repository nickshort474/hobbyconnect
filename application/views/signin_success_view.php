<div class="content"><p>

<?php
	foreach($signin as $user){
		echo "Welcome " . html_escape($user->first_name);
	}

?>

, you are now signed in</p>
<p>Where would you like to go next?</p>



<a class="btn btn-dark" href="<?php echo base_url() ?>index.php/show_profile">Show your profile</a>
<a class="btn btn-dark" href="<?php echo base_url() ?>index.php/connect">Connect</a>
</div>