<?php

	

	
	if(isset($error)){
		echo "<div class='passwordError'>" . $error . "</div><br />";
	}

	echo '<div class="form content">';
	echo '<h2>Password reset</h2>';
	echo form_open('Authentication_controller/send_password_email');
	echo validation_errors();
	
	echo form_label('Email');
	echo form_input(array('id'=>'email','name'=>'email','class'=>'form-control', 'value'=> set_value('email')));
	
	echo '<br />';

	echo form_submit(array('id'=>'submit','value'=>'Reset password','class'=>'btn btn-dark'));

	echo '</div>'
?>