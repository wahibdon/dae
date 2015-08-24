<?php
	if ( is_user_logged_in() ) { 
		echo "logged in";
		echo __FILE__;
		echo exec(ll);
		/*if (__FILE__) {
		    header('Content-Description: File Transfer');
		    header('Content-Type: application/octet-stream');
		    header('Content-Disposition: attachment; filename="'.basename($file).'"');
		    header('Expires: 0');
		    header('Cache-Control: must-revalidate');
		    header('Pragma: public');
		    header('Content-Length: ' . filesize($file));
		    readfile($file);
		    exit;
		}*/
	}else{
		header("Location: /wp-login.php");
	}
?>