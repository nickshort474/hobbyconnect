<div class="content">

	<h2>Message View</h2><br />
<?php
	foreach($this->session->userdata('requests') as $message){
		


		echo '<div class="messageBox">';
		echo '<h3>Message Title</h3>';
		echo '<p>From: '. $message->message_from .'</p>';
		echo '<p>' . $message->message_body . '</p>';
		echo '<p class="pushRight">Date: ' . $message->date_created . '</p>';
		echo '<a href="' . base_url() . 'index.php/reply" class="btn btn-dark">Reply</a>';
		echo '<a href="' . base_url() . 'index.php/Connect_controller/show_user/' . $message->message_from . '" class="btn btn-dark">View ' . $message->message_from . '\'s profile</a></div>';
		
	}


?>

</div>


