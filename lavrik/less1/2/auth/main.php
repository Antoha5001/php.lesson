<?php

	session_start();

	// проверка на сессию либо куки
	if(!(isset($_SESSION['is_auth']) && $_SESSION['is_auth'])){
		header('Location: login.php');
		exit();
	}
	
	/*
	echo md5('qwerty') . '<br>';
	echo md5('qwerty') . '<br>';
	echo hash('sha256', 'qwerty' . '843htongf') . '<br>';
	echo hash('sha256', 'qwerty' . '843htongf') . '<br>';
	
	echo myhash('qwerty1') . '<br>';
	echo myhash('qwerty1') . '<br>';
	
	
	function myhash($str){
		return hash('sha256', $str . '843htongf');
	}
	*/
?>

Секретное содержимое<br>
<a href="login.php">Выход</a>
	