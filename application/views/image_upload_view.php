<div class="content">
	<h2>Upload Image</h2><br />
	


<?php	echo  form_open_multipart('Image_controller/upload'); ?>

	<form action="" method="">
		<input type="file" name="profileImage" size="20" class="btn btn-dark" onchange="loadImage(this)"/>
		<br /><br />
		<img src="" id="image"/><br /><br />
		<p id="errorMsg" class="hidden">This image is too big please choose a smaller one</p>
		<input type="submit" id="submit" value="upload" class="btn btn-dark" disabled="disabled" />

	</form>
	<br />

<?php 

if(isset($error)){
	echo $error ;
}

?>


<script>
	function loadImage(e){
		
		
		let elem = document.getElementById('image');
		let submit = document.getElementById('submit');
		let errorMsg = document.getElementById('errorMsg');

		let fileReader = new FileReader();

		fileReader.onload = function(e){
			/*compressImage(e.target.result,(result)=>{
				
				console.log(result);
			})*/
			elem.setAttribute('src', e.target.result);
			
		}
		if(e.files[0].size <= 100000){
			
			errorMsg.classList.add('hidden');
			submit.removeAttribute('disabled');
			fileReader.readAsDataURL(e.files[0]);

		}else{
			errorMsg.classList.remove('hidden');
			elem.setAttribute('src','');
			submit.setAttribute('disabled', true);
			
		}

		
	}
</script> 


</div>