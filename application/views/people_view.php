<div class="content">
	<h2>People to connect with</h2><br />
	


<?php

		
	foreach($people as $person){
		echo '<div class="userBox">';
		echo '<p>User name: ' . $person->username . '</p>';
		echo '<p>Location: ' .$person->location . '</p>';
		echo '<a href="' . base_url() . 'index.php/Show_user/' . $person->userID . '" class="btn btn-primary">Show users profile</a>';
		echo '</div>';
	}


?>
<a href="<?php echo base_url() ?>index.php/Connect_controller/get_locations" class="btn btn-primary">Go back</a>
   
</div>