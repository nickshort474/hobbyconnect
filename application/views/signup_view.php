<?php

	$this->output->delete_cache();

	
	if(isset($error)){
		echo "<div class='signupError'>" . $error . "</div><br />";
	}

	echo '<div class="form content">';
	echo '<h2>Please sign up</h2>';
	echo form_open('signup_confirm');
	echo validation_errors();
	
	echo form_label('Email');
	echo form_input(array('id'=>'email','name'=>'email','class'=>'form-control', 'value'=> set_value('email')));
	echo '<br />';
	echo form_label('Password');
	echo form_password(array('id'=>'pass_word','name'=>'pass_word','class'=>'form-control', 'value' => set_value('pass_word')));
	echo '<br />';
	echo form_label('Confirm password');
	echo form_password(array('id'=>'pass_word_confirm','name'=>'pass_word_confirm','class'=>'form-control', 'value' => set_value('pass_word_confirm')));
	echo '<br />';
	echo form_label('Hobby');
	echo form_password(array('id'=>'hobby','name'=>'hobby','class'=>'form-control', 'value' => set_value('hobby')));
	echo '<br />';
	echo form_submit(array('id'=>'submit','value'=>'Sign up','class'=>'btn btn-dark'));


	echo '<a href="' . base_url() . 'index.php/other" class="btn btn-dark">Privacy</a>';
	
?>


</div>