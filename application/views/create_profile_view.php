<?php

	$hobbiesArray = array();
	
	if(isset($hobbies)){
		//first call to profile view so geting hobbies from database
		foreach($hobbies as $hobby){
			
			$hobbiesArray = array_push_assoc($hobbiesArray,$hobby->name,$hobby->name);
			
		};
	}else{
		//coming back from form_validation error
		foreach($this->session->userdata('hobbies') as $hobby){
			
			$hobbiesArray = array_push_assoc($hobbiesArray,$hobby->name,$hobby->name);
			
		};
	}
		
	
	function array_push_assoc($array, $key, $value){
		$array[$key] = $value;
		return $array;
	}

	$dropDown = 'class="hobbyDropdown form-control"';

	echo '<div class="form content">';
	echo form_open('Profile_controller/create');
	echo validation_errors();
	echo form_label('First Name');
	echo form_input(array('id'=>'first_name','name'=>'first_name','class'=>'form-control', 'value' => set_value('first_name') ));
	echo '<br />';
	echo form_label('Last Name');
	echo form_input(array('id'=>'last_name','name'=>'last_name','class'=>'form-control', 'value' => set_value('last_name') ));
	echo '<br />';
	echo form_label('Username');
	echo form_input(array('id'=>'username','name'=>'username','class'=>'form-control', 'value' => set_value('username') ));
	echo '<br />';
	echo form_label('Email');
	echo form_input(array('id'=>'email','name'=>'email','class'=>'form-control', 'value' => set_value('email') ));
	echo '<br />';
	echo form_label('Password');
	echo form_password(array('id'=>'pass_word','name'=>'pass_word','class'=>'form-control', 'value' => set_value('pass_word') ));
	echo '<br />';
	echo form_label('General Location');
	echo form_input(array('id'=>'general_location','name'=>'general_location','class'=>'form-control', 'value' => set_value('general_location') ));
	echo '<br />';
	echo form_label('About me');
	echo form_textarea(array('id'=>'about_me','name'=>'about_me','class'=>'form-control', 'rows'=>'4', 'value' => set_value('about_me') ));
	echo '<br />';

	echo form_label('Hobby');
	echo form_dropdown('hobby', $hobbiesArray, 'surfing',$dropDown);
	echo '<br />';
	echo form_submit(array('id'=>'submit','value'=>'add','class'=>'btn btn-primary'));

	echo '</div>'


?>


