<div class="content">
	<h2>Locations with connections</h2><br />
	


<?php

	
	$locationsArray = array();
		
	foreach($locations as $location){
		$locationsArray = array_push_assoc($locationsArray, $location->location, $location->location);
	}
	
	function array_push_assoc($array, $key, $value){
		$array[$key] = $value;
		return $array;
	}


	$dropDown = 'class="hobbyDropdown form-control"';

	echo form_open('Connect_controller/show_people');
		
	echo form_label('Locations');
	echo form_dropdown('Locations', $locationsArray, 'large',$dropDown);
	
	

	echo form_submit(array('id'=>'submit','value'=>'search this location','class'=>'btn btn-primary'));
	echo form_close();

?>
<a href="<?php echo base_url() ?>index.php/Connect_controller" class="btn btn-primary">Go back</a>
   
</div>