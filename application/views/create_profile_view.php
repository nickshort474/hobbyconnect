<?php

	$hobbiesArray = array();
	
	
	foreach($hobbies as $hobby){
			
		$hobbiesArray = array_push_assoc($hobbiesArray,$hobby->name,$hobby->name);
			
	};
	
	
	function array_push_assoc($array, $key, $value){
		$array[$key] = $value;
		return $array;
	}

	$dropDown = 'class="hobbyDropdown form-control"';

	echo '<div class="form content">';
	echo form_open('Profile_controller/create');

	echo form_label('First Name');
	echo form_input(array('id'=>'first_name','name'=>'first_name','class'=>'form-control'));
	echo '<br />';
	echo form_label('Last Name');
	echo form_input(array('id'=>'last_name','name'=>'last_name','class'=>'form-control'));
	echo '<br />';
	echo form_label('Username');
	echo form_input(array('id'=>'username','name'=>'username','class'=>'form-control'));
	echo '<br />';
	echo form_label('Email');
	echo form_input(array('id'=>'email','name'=>'email','class'=>'form-control'));
	echo '<br />';
	echo form_label('Password');
	echo form_input(array('id'=>'password','name'=>'password','class'=>'form-control'));
	echo '<br />';
	echo form_label('General Location');
	echo form_input(array('id'=>'general_location','name'=>'general_location','class'=>'form-control'));
	echo '<br />';
	echo form_label('About you');
	echo form_textarea(array('id'=>'about_you','name'=>'about_you','class'=>'form-control', 'rows'=>'4'));
	echo '<br />';

	echo form_label('Hobby');
	echo form_dropdown('hobby', $hobbiesArray, 'surfing',$dropDown);
	echo '<br />';
	echo form_submit(array('id'=>'submit','value'=>'add','class'=>'btn btn-primary'));

	echo '</div>'


?>


