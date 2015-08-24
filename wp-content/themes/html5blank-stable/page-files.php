<?php
	if ( is_user_logged_in() ) { 
		echo "logged in";
		ehco site_url( 'wp-login.php', 'login_post' );
	}else{
		header("Location: /wp-login.php");
	}
?>