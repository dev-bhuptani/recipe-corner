<?php
	ob_start();
	session_start();
	if(isset($_SESSION['u_id'])) {
		session_destroy();
		unset($_SESSION['u_id']);
		unset($_SESSION['name']);
		unset($_SESSION['mobile_no']);
		unset($_SESSION['email']);
		header("Location: index.php");

	} else {
		header("Location: login.php");
	}
?>