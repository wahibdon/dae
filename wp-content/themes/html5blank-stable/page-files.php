<?php
	if ( is_user_logged_in() ) { 
		echo "logged in";
	}else{
		header("Location: /wp-login.php");
	}
?>