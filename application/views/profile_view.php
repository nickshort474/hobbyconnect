<?php

	echo '<h2>Profile</h2>';
	
	echo '<div class="form content">';

	echo form_open('Authentication_controller/update_profile');
	
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
	
	
	
	echo form_submit(array('id'=>'update','value'=>'Update','class'=>'btn btn-primary', 'disabled'));

	echo '</div>'

?>