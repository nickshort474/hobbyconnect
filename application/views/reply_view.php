<div class="content">

	<h2>Reply</h2><br />
	<form method="post" action="<?php echo base_url() ?>index.php/Request_Controller/send_reply">
		<label html="message" >Reply to: <?php echo $from['from'] ?></label>
		
		<textarea name="message" class="form-control" rows="3" cols="28" placeholder="Hi there <?php echo $from['from'] ?> i'd be happy to connect"></textarea>
		<input type="hidden" name="username" value="<?php echo $from['from'] ?>" />
		<button type="submit" id="submit" class="btn btn-dark">Send Reply</button>
	</form>
<?php
	
	
		
	

?>

</div>
