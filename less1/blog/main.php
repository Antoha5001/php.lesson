<?php
	session_start();

	$is_auth = false;

	if($_SESSION['is_auth'] == true){
		$is_auth = true;
	}
	elseif ($_COOKIE['login'] == hash("sha256", 'admin') &&
		$_COOKIE['password'] == hash('sha256', 'qwerty')){

		$_SESSION['is_auth'] = true;
		$is_auth = true;
	}
	if(!$is_auth){
		header("Location: login.php");
		exit();
	}