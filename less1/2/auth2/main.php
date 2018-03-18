<?php
	session_start();



	if ($_SESSION['is_auth'] !== true) {
		header("Location: login.php");
	}

?>
<h1>Закрытая страница</h1><br>

<a href="login.php">Выход</a>
<?php
	 echo md5("qwerty")."<br>";
	 echo hash("sha256", "qwerty"."pref");
	 ?>


