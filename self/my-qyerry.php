<?php

$conn = mysqli_connect('localhost', 'pythonless', "pythonless", "623030") or die("Connection failed");

// var_dump(mysqli_get_connection_stats($conn));

$query = mysqli_query($conn, "select * from listovki");

$response = [];

foreach ($query as $q) {
	$response[] = $q;
}

// var_dump($response);
// echo mysqli_fetch_all($query);
// echo ["empty" => "empty"];
$response_json = json_encode($response);

echo $response_json ;

// var_dump($response_json);
mysqli_close($conn);