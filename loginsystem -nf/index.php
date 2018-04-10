<?php
	session_start();

	include('login_action.php');
	if(isset($_SESSION['username'])) {
		include('dashboard.php');
		var_dump($_SESSION);
	} else {
		include('login.php');
	}
?>
