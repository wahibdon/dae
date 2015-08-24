<?php
	if ( is_user_logged_in() ) { 
		echo "logged in";
		if(isset($_GET['file'])){
			$file = __DIR__."/../../uploads/".$_GET['file'];
			if (file_exists($file)) {
			    header('Content-Description: File Transfer');
			    header('Content-Type: application/octet-stream');
			    header('Content-Disposition: attachment; filename="'.basename($file).'"');
			    header('Expires: 0');
			    header('Cache-Control: must-revalidate');
			    header('Pragma: public');
			    header('Content-Length: ' . filesize($file));
			    readfile($file);
			    exit;
			}
		}else{
			print_r($_REQUEST);
		}
	}else{
		header("Location: /wp-login.php");
	}
?>