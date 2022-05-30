<?php
	session_start();

	if ($_SESSION['is_auth'] == true) {
		unset($_SESSION['is_auth']);
	}

	if (count($_POST) > 0) {
		if ($_POST['login'] == "admin" && $_POST['password'] == "qwerty") {

			$_SESSION["is_auth"] = true;

			if(isset($_POST['remember'])){
				setcookie("login", hash("sha256", "admin"), time() + 3600, "/");
				setcookie("password", hash("sha256", "qwerty"), time() + 3600, "/");
			}

			header("Location: main.php");
			exit();
		}


	}

?>


<form method="post">
	Логин <br>
	<input type="text" name="login" value="<?php ?>"><br>
	Пароль <br>
	<input type="password" name="password" value="<?php ?>"><br>
	<input type="checkbox" name="remember" >запомнить
	<br>
	<input type="submit" value="Добавить">
</form>

<?php ?>


