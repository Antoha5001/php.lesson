<?php

$conn = mysqli_connect("localhost", "skillbox", 'skillbox', "skillbox");

if (mysqli_connect_errno()) {
	echo mysqli_connect_errno();
} else {
	
	$querry = mysqli_query($conn, "
	INSERT into print_categories (title) values ('Листовка')
	");
	echo $querry;
	
	// $querry = mysqli_query($conn, "
	// INSERT into products set title='Стол', price=95, count=3, stock_id=3 
	// ");
	// echo $querry;



	// $querry = mysqli_query($conn, "
	// select * from stoks
	// ");

	// foreach ($querry as $q){
	// 	echo "<p>";
	// 	echo $q['title'];
	// 	echo "</p>";
	// }




}