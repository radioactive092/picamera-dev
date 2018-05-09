<?php
	session_start();

	include('action/login_action.php');
	if(isset($_SESSION['username'])) {
		include('dashboard.php');
//		var_dump($_SESSION);
	} else {
		include('login.php');
	}
?>
