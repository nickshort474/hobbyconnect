<div class="content">

	<h2>Message View</h2><br />
<?php
	foreach($this->session->userdata('requests') as $message){
		


		echo '<div class="messageBox">';
		echo '<p>From: '. $message->message_from .'</p>';
		echo '<p>' . $message->message_body . '</p>';
		echo '<p class="pushRight">Date: ' . $message->date_created . '</p>';
		echo '<a href="' . base_url() . 'index.php/Request_controller/reply/' . $message->message_from . '" class="btn btn-dark">Send Message</a>';
		echo '<a href="' . base_url() . 'index.php/Connect_controller/show_user/' . $message->message_from . '" class="btn btn-dark">View ' . $message->message_from . '\'s profile</a>';
		echo '<a href="' . base_url() . 'index.php/Request_controller/delete_message/' . $message->id . '" class="btn btn-dark">Delete Message</a></div>';
	}


?>

</div>


