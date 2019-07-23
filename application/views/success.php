<?php

	echo '<div class="content">';
	foreach($signin as $user){
		echo "Welcome " . $user->first_name;
	}
	echo ' you are signed in</div>';
	
	//echo $signin;
	
?>