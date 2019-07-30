<?php

	$this->output->delete_cache();

	
	if(isset($error)){
		echo "<div class='signinError'>" . $error . "</div><br />";
	}

	echo '<div class="form content">';
	echo '<h2>Please sign in</h2>';
	echo form_open('Authentication_controller/signin');
	
	
	echo form_label('Email');
	echo form_input(array('id'=>'email','name'=>'email','class'=>'form-control'));
	echo '<br />';
	echo form_label('password');
	echo form_input(array('id'=>'password','name'=>'password','class'=>'form-control'));
	echo '<br />';
	echo form_submit(array('id'=>'submit','value'=>'Sign in','class'=>'btn btn-dark'));

	echo '</div>'
?>