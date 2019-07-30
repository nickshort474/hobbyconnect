<div class="content">
	<h2>Search for Hobby</h2><br />
	


<?php

	$hobbiesArray = array();
	

	if(isset($hobbies)){
		foreach($hobbies as $hobby){
			
			$hobbiesArray = array_push_assoc($hobbiesArray,$hobby->name,$hobby->name);
			
		};
	}
	
	function array_push_assoc($array, $key, $value){
		$array[$key] = $value;
		return $array;
	}


	$dropDown = 'class="hobbyDropdown form-control"';

	echo form_open('Connect_controller/get_locations');
	echo form_label('Hobby');
	echo form_dropdown('Hobby', $hobbiesArray, 'large', $dropDown);

	

	echo form_submit(array('id'=>'submit','value'=>'Search this hobby','class'=>'btn btn-dark'));
	echo form_close();

?>

   
</div>
