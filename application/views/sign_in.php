<?php
	echo '<h2>Please sign in</h2>';
	if(isset($error)){
		echo "<div class='signinError'>" . $error . "</div><br />";
	}

	echo '<div class="form content">';

	echo form_open('Sign_in_controller/signin');
	
	
	echo form_label('Email');
	echo form_input(array('id'=>'email','name'=>'email','class'=>'form-control'));
	echo '<br />';
	echo form_label('password');
	echo form_input(array('id'=>'password','name'=>'password','class'=>'form-control'));
	echo '<br />';
	echo form_submit(array('id'=>'submit','value'=>'Sign in','class'=>'btn btn-primary'));

	echo '</div>'
?>