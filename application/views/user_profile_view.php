<div class="content">
	<h2>User profile</h2><br />
	


<?php

	foreach($profileData as $profile){
		echo $profile->first_name;
		echo $profile->last_name;
		echo $profile->username;
		echo $profile->general_location;
		
		if(isset($profile->profileImageSrc)){
			echo '<img src="./uploads/' . $profile->profileImageSrc . '" class="profileImage" />';
		}else{
			echo '<img src="' . base_url() . '/uploads/default" class="profileImage" />';
		}
		
	}	
	


?>
<a href="<?php echo base_url() ?>index.php/Request_controller" class="btn btn-primary">Send connection request</a>
   
</div>