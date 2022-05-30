<?php
session_start();

if (isset($_SESSION['is_auth'])){
	unset($_SESSION['is_auth']);
}
if(isset($_COOKIE['login'])){
	setcookie('login',"", time() -1);
}
if(isset($_COOKIE['password'])){
	setcookie('password',"", time() -1);
}


if(count($_POST) > 0){
	if($_POST['login'] == "admin" && $_POST['password'] == "qwerty"){
		$_SESSION['is_auth'] = true;

		if(isset($_POST['remember'])){
			setcookie('login', hash('sha256', 'admin'), time() + 3600);
			setcookie('password', hash('sha256', 'qwerty'), time() + 3600);
		}
		if(isset($_SESSION['returnUrl'])){
//		  header("Location: {$_SESSION['returnUrl']}");
			 $url = $_SESSION['returnUrl'];
			 unset($_SESSION['returnUrl']);
		  echo $url;
		  exit();
		}
		else{

		  header("Location: index.php");
		  exit();
		}
//	   header("Location: index.php");
//	   exit();
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
<br><a href="index.php">На главную</a>