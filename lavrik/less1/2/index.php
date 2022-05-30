<?php

	$cookie = $_COOKIE['login'];

	if(!$cookie){

		setcookie("login","admin", time() + 3600);
	}
	else {
		echo $cookie;
	}
