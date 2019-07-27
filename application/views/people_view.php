<div class="content">
	<h2>People to connect with</h2><br />
	


<?php

		
	foreach($profile_list as $profile){

		foreach ($profile as $user) {
			
			
			echo '<div class="userBox">';
			echo '<p>User name: ' . $user->username . '</p>';
			echo '<p>Location: ' .$user->general_location . '</p>';
			echo '<a href="' . base_url() . 'index.php/Connect_controller/show_user/' . $user->userID . '" class="btn btn-primary">Show users profile</a>';
			echo '</div>';
		}
		
		
		
	}


?>
<a href="<?php echo base_url() ?>index.php/Connect_controller/get_locations" class="btn btn-primary">Go back</a>
   
</div>