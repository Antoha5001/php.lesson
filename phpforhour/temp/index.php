<!doctype html>

<html lang="en"><head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">


<title>The HTML5 Herald</title>
<meta name="description" content="The HTML5 Herald">
<meta name="author" content="SitePoint">

<link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>
	<h1><?php

use function PHPSTORM_META\type;

	try{
		$conn = mysqli_connect("localhost", "phplesson", "phplesson", "phplesson");

		$query = mysqli_query($conn, "select * from articles_categories");

		echo mysqli_num_rows($query);

		// foreach(get_class_methods($query) as $a){
		// 	echo $a . "<br>";

		// print_r(mysqli_fetch_assoc($query));
		// print_r($query->fetch_all());

		// }
		// $r = mysqli_fetch_assoc($query);
		while ($r = mysqli_fetch_assoc($query)){
			// print_r($r);
			$q = mysqli_query($conn, "select count(id) as total_count from articles where categories_id = {$r['id']}");
			$total_count = mysqli_fetch_assoc($q);
			echo "<h3>" . $r['title'] . " (" . $total_count['total_count'] . ")</h3>";
			// echo "<p style='margin-bottom:0;'>".$r['text']."</p>";
			// echo "<p style='font-size:12px;margin-top:5px;'>Дата публикации: ".$r['pubdate']." / Количество просмотров: ".$r['views']."</p>";
			// $r = mysqli_fetch_assoc($query);
		}

	

	} catch (Exception $e){
		exit();
	}
	mysqli_close($conn);
	?>
	<form method="post" action="/handler.php">
		<input type="text" name="name">
		<input type="text" name="password">
		<button type="submit">Отправить</button>
	</form>
</div>
	<?php 
	// date_default_timezone_set("Europe/Moscow",);
	echo date("Y-m-d H:i:s");
	echo "<br>";
	echo mktime("1986-07-31");
	echo "<br>";
	echo date("d-m-Y", time()-strtotime("31-07-1986"));
	echo "<br>";
	echo strtotime("1986-07-31 00:00:00");
	echo "<br>";
	$time = (((time()-strtotime("2021-05-08 00:00:00"))/60)/60)/24;
	echo $time;
	echo "<br>";
	echo time();
	echo "<br>";
	echo date("d-m-Y", $time);
	echo "<br>";
	echo date("d-m-Y", strtotime("1986-07-31 00:00:00"));
	echo "<br>";
	echo date("d-m-Y", time());
	echo "<br>";
	echo date("d-m-Y", time()-strtotime("31-07-1986"));
	echo "<br>";
	echo date("d-m-Y", time());
	
	?>
<script src="js/scripts.js"></script>
</body>
</html>