<?php

function checkTitle($title){
	return ctype_digit($title);
}

function isAuth(){
	$is_auth = false;

	if($_SESSION['is_auth'] == true){
		$is_auth = true;
	}
	elseif ($_COOKIE['login'] == hash("sha256", 'admin') &&
		$_COOKIE['password'] == hash('sha256', 'qwerty')){

		$_SESSION['is_auth'] = true;
		$is_auth = true;
	}

	return $is_auth;
}