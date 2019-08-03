<?php

	$hobbiesArray = array();
	
	if(isset($hobbies)){
		foreach($hobbies as $hobby){
			
			$hobbiesArray = array_push_assoc($hobbiesArray,$hobby->hobby_table_name,$hobby->hobby_name);
			
		};
	}else{
		//coming back from form_validation error
		foreach($this->session->userdata('hobbies') as $hobby){
			
			$hobbiesArray = array_push_assoc($hobbiesArray,$hobby->hobby_table_name,$hobby->hobby_name);
			
		};
	}
	
	
	
	function array_push_assoc($array, $key, $value){
		$array[$key] = $value;
		return $array;
	}

	$dropDown = 'class="hobbyDropdown form-control"';



	echo '<h2>Profile</h2>';
	
	echo '<div class="form content">';

	echo form_open('Profile_controller/update_profile');
	echo validation_errors();
	echo form_label('First Name');
	echo form_input(array('id'=>'first_name','name'=>'first_name','class'=>'form-control','value'=> $this->session->userdata('first_name') ));
	echo '<br />';
	echo form_label('Last Name');
	echo form_input(array('id'=>'last_name','name'=>'last_name','class'=>'form-control','value'=> $this->session->userdata('last_name')));
	echo '<br />';
	echo form_label('Username');
	echo form_input(array('id'=>'username','name'=>'username','class'=>'form-control','value'=> $this->session->userdata('username')));
	echo '<br />';
	echo form_label('Email');
	echo form_input(array('id'=>'email','name'=>'email','class'=>'form-control','value'=> $this->session->userdata('email')));
	echo '<br />';
	echo form_label('General Location');
	echo form_input(array('id'=>'general_location','name'=>'general_location','class'=>'form-control','value'=> $this->session->userdata('general_location')));
	echo '<br />';
	echo form_label('About me');
	echo form_textarea(array('id'=>'about_me','name'=>'about_me','class'=>'form-control', 'rows'=>'4','value'=> $this->session->userdata('about_me')));
	echo '<br />';

	echo form_label('Hobby');
	echo form_dropdown('hobby', $hobbiesArray, $this->session->userdata('hobby'),$dropDown);
	echo '<br />';
	
	
	echo form_submit(array('id'=>'update','value'=>'Update','class'=>'btn btn-dark', 'disabled'));

	echo '</div>';
	echo '<div class="contentSmall">';


	if(null !== $this->session->userdata('profileImageSrc')){
		echo '<img src="' . base_url() . 'uploads/' . $this->session->userdata("profileImageSrc") . '" class="profileViewImage" /><br />';
	}


?>






	<a href="<?php echo base_url() ?>index.php/Image_controller" class="btn btn-dark">Upload new picture</a>
	
</div>
<div class="content">
	<a href="<?php echo base_url() ?>index.php/Authentication_controller/change_password" class="btn btn-dark">Change password</a>
</div>