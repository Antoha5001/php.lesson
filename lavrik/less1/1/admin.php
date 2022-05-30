<?php

	$data = file("log.txt");

	echo "<table>";
	foreach ($data as $v){
		$info = explode("@@",rtrim($v));
		echo "<tr>";
		foreach ($info as $v){
			echo "<td style=''>".$v."</td>";
		}
		echo "<tr>";

	}
	echo "</table>";

	?>

<style>
	table, tr, td{
		border: 1px solid black;
		border-collapse: collapse;
		padding: 5px;
	}
</style>
