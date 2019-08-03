<div class="content">
	


	<?php
		echo form_open('Authentication_controller/update_password');
		echo validation_errors();
		echo form_label('Old password');
		echo form_password(array('id'=>'old_password','name'=>'old_password', 'class'=>'form-control', set_value('old_password')));
		echo '<br />';

		echo form_label('New password');
		echo form_password(array('id'=>'new_password','name'=>'new_password', 'class'=>'form-control', set_value('new_password')));
		echo '<br />';

		echo form_label('Confirm new password');
		echo form_password(array('id'=>'confirm_password','name'=>'confirm_password', 'class'=>'form-control', set_value('confirm_password')));
		echo '<br />';

		echo form_submit(array('id'=>'update','value'=>'Update','class'=>'btn btn-dark'));
	?>

</div>