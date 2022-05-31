<?php

$conn = mysqli_connect('localhost', 'pythonless', "pythonless", "623030") or die("Connection failed");

$data = [];
$data[] = [
	"id" => 1
];
if (empty($_GET['id'])) {
	
	echo json_encode(["error" => "error"]);
} else {

	$category_id = htmlspecialchars($_GET['id']);

	

	// var_dump(mysqli_get_connection_stats($conn));

	$query = mysqli_query($conn, "select * from ofset where category_id = {$category_id} order by title");

	$response = [];
		// echo "<pre>";
	foreach ($query as $q=>$v) {
		$good = [];
		foreach ($v as $kv => $vv) {
			if ($kv == "category_id" || $kv == "index" || strpos($kv, 'sborka') === 0) continue;
			// array_push($good, [$kv => $vv]) ;
			$good[$kv] = $vv;
		}
		$response[] = $good;
		
	}
	
	// var_dump($response) ;

	// var_dump($response);
	// echo mysqli_fetch_all($query);
	// echo ["empty" => "empty"];
	$response_json = json_encode($response);

	echo $response_json ;

	// var_dump($response_json);
	mysqli_close($conn);
}

