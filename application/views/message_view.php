<div class="content">

	<h2>Message View</h2><br />
<?php
	foreach($this->session->userdata('requests') as $message){
		
		if($message->message_from === $this->session->userdata('username')){
			echo '<div class="messageBoxOwn">';
			echo '<p>To: '.  html_escape($message->message_to) .'</p>';
			echo '<p>' .  html_escape($message->message_body) . '</p>';
			echo '<p class="pushRight">Date: ' .  html_escape($message->date_created) . '</p>';
			/*echo '<a href="' . base_url() . 'index.php/Request_controller/reply/' . $message->message_from . '" class="btn btn-dark">Send Message</a>';*/
			echo '<a href="' . base_url() . 'index.php/Request_controller/delete_message/' .  html_escape($message->id) . '" class="btn btn-dark"><span class="fa fa-times-circle"></span></a></div>';
		}else{

			echo '<div class="messageBoxOther">';
			echo '<p>From: '.  html_escape($message->message_from) .'</p>';
			echo '<p>' .  html_escape($message->message_body) . '</p>';
			echo '<p class="pushRight">Date: ' .  html_escape($message->date_created) . '</p>';
			echo '<a href="' . base_url() . 'index.php/Request_controller/reply/' .  html_escape($message->message_from) . '" class="btn btn-dark"><span class="fa fa-send"></span></a>';
			echo '<a href="' . base_url() . 'index.php/Connect_controller/show_user/' .  html_escape($message->message_from) . '" class="btn btn-dark"><span class="fa fa-user-circle"></span></a>';
			echo '<a href="' . base_url() . 'index.php/Request_controller/delete_message/' . html_escape($message->id) . '" class="btn btn-dark"><span class="fa fa-times-circle"></span></a></div>';
		}

		
	}


?>

</div>


