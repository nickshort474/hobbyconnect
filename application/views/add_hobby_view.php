<div class="content">
	<h1>Add hobby</h1><br /><br />
	


<?php



	echo form_open('Add_controller/add');
	


	echo form_label('hobby');
	echo 'hobby';
	echo form_input(array('name'=>'hobby', 'class'=> 'form-control'));
	echo 'hobby_table';
	echo form_input(array('name'=>'hobby_table', 'class'=> 'form-control'));
	echo form_submit(array('id'=>'submit','value'=>'add','class'=>'btn btn-primary'));
	echo form_close();

?>


	

</div>