<div class="content">
	<h2>Upload Image</h2><br />
	


<?php	echo  form_open_multipart('Image_controller/upload'); ?>

	<form action="" method="">
		<input type="file" name="profileImage" size="20" />
		<br /><br />
		<input type="submit" value="upload" />
	</form>

<?php 

if(isset($error)){
	echo $error ;
}

?>





</div>