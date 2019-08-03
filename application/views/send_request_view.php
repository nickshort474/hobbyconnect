<div class="content">
	<h2>Request connection</h2><br />
	<form method="post" action="<?php echo base_url() ?>index.php/Request_Controller/send_request">
		<label html="message" >Message to <?php echo  html_escape($id) ?></label>
		
		<textarea name="message" class="form-control" rows="3" cols="28" placeholder="Hi there <?php echo  html_escape($id) ?> would you like to connect?"></textarea>
		<input type="hidden" value="<?php echo  html_escape($id) ?>" name="username">
		<button type="submit" id="submit" class="btn btn-dark">Send Request</a>
	</form>
	


</div>