<?php 

$conn = mysqli_connect("127.0.0.1", "phplesson", "phplesson", "phplesson");

if ($conn == false){
	echo "Не удалось подключиться к БД";
	exit();
}
// print_r($conn);

$name = $_POST["name"];
$password = $_POST["password"];

$query = mysqli_query($conn, "SELECT name, password FROM users WHERE name ='$name' AND password = '$password'");
// echo $name;
// echo "<br>";

echo mysqli_num_rows($query);
// $query = mysqli_query($conn, "SELECT name, password FROM users WHERE name = 'admin'");

// $query = mysqli_query($conn, "SELECT name, password FROM users where id=1");



// print_r(mysqli_fetch_assoc($query));

// echo "$query";
if (mysqli_num_rows($query) > 0){
	$user = mysqli_fetch_assoc($query);
	echo  "\$user: ".$user['name'];
	echo "\$_POST: ".$_POST["name"];
	echo $user['name'] == $_POST["name"];
	echo "Yes" ? $user['name'] == $_POST["name"]  : false;
	echo "Что-то есть";
} else {
	echo "Нет такого  пользователя";
}

// echo $_POST["name"];
// echo "select name, password from users where name = {$_POST["name"]} ";


echo "<br>";
echo $_POST["password"];
?>