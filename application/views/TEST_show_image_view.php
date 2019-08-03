<div class="content">
	<h2>Upload success</h2><br />
	<?php 
		forEach($upload_data as $item => $val){
			if($item == 'file_name'){
				$imageSrc = $val;
			}
			echo $item . '=' . $val . '<br />';
		} 

		
	?>
	<img src="<?php echo base_url() . 'uploads/' .  html_escape($imageSrc) ?>" />
</div>