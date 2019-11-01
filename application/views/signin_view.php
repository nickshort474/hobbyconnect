<?php

	$this->output->delete_cache();

	
	if(isset($error)){
		echo "<div class='signinError'>" . $error . "</div><br />";
	}

	echo '<div class="form content">';
	echo '<h2>Please sign in</h2>';
	echo form_open('Authentication_controller/signin');
	echo validation_errors();
	
	echo form_label('Email');
	echo form_input(array('id'=>'email','name'=>'email','class'=>'form-control', 'value'=> set_value('email')));
	echo '<br />';
	echo form_label('password');
	echo form_password(array('id'=>'pass_word','name'=>'pass_word','class'=>'form-control', 'value' => set_value('pass_word')));
	echo '<br />';
	echo '<a href="' . base_url(). 'index.php/forgotten_password" >Forgotten Password?</a>';
	echo '<br /><br />';
	echo form_submit(array('id'=>'submit','value'=>'Sign in','class'=>'btn btn-dark'));

	echo '</div>'
?>