<div class="content">

	<h2>Reply</h2><br />
	<form method="post" action="<?php echo base_url() ?>index.php/Request_Controller/send_reply">
		<label html="message" >Reply to: </label>
		
		<textarea name="message" class="form-control" rows="3" cols="28" placeholder="Hi there id love to connect"></textarea>
		<!-- <input type="hidden" value="<?php echo $id ?>" name="username"> -->
		<button type="submit" id="submit" class="btn btn-dark">Send Reply</a>
	</form>
<?php
	


?>

</div>
