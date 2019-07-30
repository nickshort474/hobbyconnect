<div class="content">
	


<?php

	foreach($profileData as $profile){
		echo '<h2>'. $profile->first_name . ' ' . $profile->last_name . '</h2><br />';
		echo '<div id="userProfile">';
		echo '<h3>AKA: ' . $profile->username . '</h3>';
		echo '<p>Location: ' . $profile->general_location . '</p><br />';
		
		if($profile->profileImageSrc !== NULL){
			echo '<img src="' . base_url() . '/uploads/' . $profile->profileImageSrc . '" class="profileImage" /><br />';
		}else{
			echo '<img src="' . base_url() . '/uploads/default.png" class="profileImage" /></div><br />';
		}

		if($profile->about_me){
			echo $profile->about_me;
		};
		
	}	
	


?>

</div>
<a href="<?php echo base_url() ?>index.php/Request_controller" class="btn btn-dark">Send connection request</a><br />
<a href="<?php echo base_url() ?>index.php/Connect_controller/show_people" class="btn btn-dark">Go back</a>  
</div>