<div class="content">
	


<?php

foreach($profileData as $profile){
		
		if($profile->username == $this->session->userdata('username')){
			echo '<h4>This is you!</h4>';	
		}else{
			echo '<h2>' . $profile->first_name . ' ' . $profile->last_name . '</h2>';
		}
		
		echo '<div id="userProfile">';

		if(isset($profile->profileImageSrc)){
			echo '<img src="' . base_url() . '/uploads/' . $profile->profileImageSrc .'" class="profileImage" /><br />';
		}else{
			echo '<img src="' . base_url() . '/assets/default.png" class="profileImage" /><br />';
		}
			
		echo '<div class="profileInfo">';
				
		echo '<p><span class="profileTitles">AKA: </span>' . $profile->username . '</p>';
		echo '<p><span class="profileTitles">Location: </span>' . $profile->general_location .  ' </p>';
		echo '<p><span class="profileTitles">Bio: </span>' . $profile->about_me . '</p>';
				
		echo '</div><br /></div>';
			
		if($profile->username !== $this->session->userdata('username')){	
			echo '<a href="' . base_url() . 'index.php/Request_controller/add_message/' . $profile->username . '" class="btn btn-dark">Send connection request</a><br />';
		}


	}	

	


?>








<a href="<?php echo base_url() . $this->session->userdata('current_page') ?>" class="btn btn-dark">Go back</a>  
</div>