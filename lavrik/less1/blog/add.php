<?php
	session_start();

//	if($_SESSION['is_auth'] !== true){
//	   if(($_COOKIE['login'] !== hash("sha256",'admin') && $_COOKIE['password'] !== hash('sha256', 'qwerty'))){
//		   header("Location: index.php");
//	   }
//	}
	if (count($_GET) > 0) {
		if ($_GET['logout'] == "1") {
			unset($_SESSION['is_auth']);
			setcookie('login', "", time() - 1);
			setcookie('password', "", time() - 1);

		  header("Location: index.php");
		  exit();
		}
	}

	include_once("functions.php");
	if(!isAuth()){
		$_SESSION['returnUrl'] = $_SERVER["SCRIPT_NAME"];
		header("Location: login.php");
		exit();
	}



	if(count($_POST) >0){
		$title = trim($_POST['title']);
		$content = trim($_POST['content']);

		if($title == "" || $content == ""){
		  $msg = "Заполните все поля";
		}
		elseif (file_exists("data/$title")){

		  $msg = "Такая новость уже существует!";

		}
//		elseif (!checkTitle($title)){
//
//		  $msg = "Не верный формат!";
//		}
		else{
			$file = fopen("data/$title","a");

			fwrite($file, $content);

			fclose($file);
			header("Location: index.php");
			exit();
		}
	}
	else{

		$title = "";
		$content = "";
		$msg = "";
	}

?>


<form method="post">
	Название <br>
	<input type="text" name="title" value="<?php echo $title ?>">
	Контент <br>
	<textarea  id="" cols="30" rows="10" name="content"><?php echo $content ?></textarea>
	<input type="submit" value="Добавить">
</form>

<?php echo $msg; ?>

<?php
//	if($_SESSION['is_auth'] == true || ($_COOKIE['login'] == hash("sha256",'admin') && $_COOKIE['password'] == hash('sha256', 'qwerty'))){
//		echo "
//<a href=\"add.php\">Добавить статью</a>
//<br><a href=\"edit.php\">Правка статей</a>
//<br><a href=\"index.php\">На главную</a>
//<br><a href=\"index.php?logout=1\">Выход</a>";
//	}
	if(isAuth()){
		echo "
<a href=\"add.php\">Добавить статью</a>
<br><a href=\"edit.php\">Правка статей</a>
<br><a href=\"index.php\">На главную</a>
<br><a href=\"add.php?logout=1\">Выход</a>";
	}
	echo "<pre>";
	echo print_r($_SERVER);
	echo "</pre>";
?>


