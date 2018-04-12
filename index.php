<?php
	session_start();

	include('./loginsystem/login_action.php');
	if(isset($_SESSION['username'])) {
		include('./loginsystem/dashboard.php');
//		var_dump($_SESSION);
	} else {
		include('./loginsystem/login.php');
	}
?>
