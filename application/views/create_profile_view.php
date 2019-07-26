<?php
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
	echo form_label('password');
	echo form_input(array('id'=>'password','name'=>'password','class'=>'form-control'));
	echo '<br />';
	echo form_submit(array('id'=>'submit','value'=>'add','class'=>'btn btn-primary'));

	echo '</div>'


?>


