<?php
	define('USERNAME','admin');
	define('PASSWORD','admin');
	$params = array();
	$params['USERNAME'] = '';
	$params['PASSWORD'] = '';

	if(isset($_POST['submit'])) {
		if(isset($_POST['username'])) {
			$params['USERNAME'] = $_POST['username'];
		}
		if(isset($_POST['password'])) {
			$params['PASSWORD'] = $_POST['password'];
		}
		
		
		
		if(USERNAME == $params['USERNAME'] && PASSWORD == $params['PASSWORD']) {
			$_SESSION['username'] = $params['USERNAME'];
			$_SESSION['userid'] = '1';
		}
	}
?>
