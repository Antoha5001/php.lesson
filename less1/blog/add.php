<?php
	session_start();
	if(($_COOKIE['login'] !== hash("sha256",'admin') && $_COOKIE['password'] !== hash('sha256', 'qwerty'))){
		header("Location: index.php");
	}
include_once("functions.php");

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
	if($_SESSION['is_auth'] == true || ($_COOKIE['login'] == hash("sha256",'admin') && $_COOKIE['password'] == hash('sha256', 'qwerty'))){
		echo "
<a href=\"add.php\">Добавить статью</a>
<br><a href=\"edit.php\">Правка статей</a>
<br><a href=\"index.php\">На главную</a>
<br><a href=\"index.php?logout=1\">Выход</a>";
	}
?>


