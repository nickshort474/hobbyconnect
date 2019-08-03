<div class="content">
	<h2>Locations</h2><br />
	


<?php

	$arrayEmpty = false;

	$locationsArray = array();
	
	if(empty($locations)){
		$arrayEmpty = true;
	};


	
		
	foreach($locations as $location){
		$locationsArray = array_push_assoc($locationsArray, html_escape($location->location), html_escape($location->location));
	}
	
	function array_push_assoc($array, $key, $value){
		$array[$key] = $value;
		return $array;
	}

	if(!$arrayEmpty){
		$dropDown = 'class="hobbyDropdown form-control"';

		echo form_open('Connect_controller/show_people');
			
		echo form_label('Locations');
		echo form_dropdown('Locations', $locationsArray, 'large',$dropDown);
		
		

		echo form_submit(array('id'=>'submit','value'=>'search this location','class'=>'btn btn-dark'));
		echo form_close();
	}else{
		echo 'Nobody listed for this hobby yet, please try another hobby or come back later<br />';
	}
?>
<a href="<?php echo base_url() ?>index.php/Connect_controller" class="btn btn-dark">Go back</a>
   
</div>