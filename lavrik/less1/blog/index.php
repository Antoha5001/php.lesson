<?php
	session_start();
	$list = scandir('data');
	if (count($_GET) > 0) {
		if ($_GET['logout'] == "1") {
			unset($_SESSION['is_auth']);
			setcookie('login', "", time() - 1);
			setcookie('password', "", time() - 1);
		  header("Location: index.php");
		  exit();
		}
	}
	foreach ($list as $fname) {
		if (is_file("data/$fname")) {
			echo "<a href=\"post.php?fname=$fname\">$fname</a><br>";
		}
	}


?>
	<br>

	<hr>
<?php
	if ($_SESSION['is_auth'] == true ||
		($_COOKIE['login'] == hash("sha256", 'admin') &&
			$_COOKIE['password'] == hash('sha256', 'qwerty'))) {
		echo "<a href=\"add.php\">Добавить статью</a>
<br><a href=\"edit.php\">Правка статей</a>
<br><a href=\"index.php?logout=1\">Выход</a>";
	}
?>
	<br>
	<a href="login.php">Вход</a>
	<br>


<?php
	echo $_COOKIE['login'] == hash("sha256", 'admin');
	echo file_exists("data/../index.php");
?>