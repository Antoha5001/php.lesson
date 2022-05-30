<?php
	$info = [];
	$info[] = date("d-m-Y H:i:s");
	$info[] = $_SERVER['REMOTE_ADDR'];
	$info[] = $_SERVER['REQUEST_URI'];
	$info[] = $_SERVER['HTTP_REFERER'] ?? "Прямой заход";
	$info[] = $_SERVER['HTTP_USER_AGENT'];

	$str = implode("@@", $info)."\n";

	echo $str;

	$file = fopen('log.txt','a');

	fwrite($file,$str);
//	$str = fgets($file);

//	while ($str = fgets($file)){
//
//		echo $str;
//	}
//fread($file);

fclose($file);




