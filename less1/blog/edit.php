<?php
	session_start();
	if($_SESSION['is_auth'] !== true){
		if(($_COOKIE['login'] !== hash("sha256",'admin') && $_COOKIE['password'] !== hash('sha256', 'qwerty'))){
			header("Location: index.php");
		}
	}
include_once("functions.php");


	if(count($_GET) > 0){

		$title = trim($_GET['fname']);

		echo $_GET['title'];

		$content = file_get_contents("data/$title");
//		$content = trim($_POST['content']);



//		elseif (file_exists("data/$title")){
//
//		  $msg = "Такая новость уже существует!";
//
//		}
//		elseif (!checkTitle($title)){
//
//		  $msg = "Не верный формат!";
//		}

		if(count($_POST) >0){

			if($title == "" || $content == ""){
				$msg = "Заполните все поля";
			}

			$title = trim($_POST['title']);

			if(preg_match("/^[a-z0-9_]+$/m",$title)){

				$content = trim($_POST['content']);
				$file = fopen("data/$title","w");

				fwrite($file, $content);

				fclose($file);
				header("Location: edit.php");
				exit();

			} else{
				$msg = "Символы не верные в названии используются!";
			}

		}


	}
	else{

		$title = "";
		$content = "";
		$msg = "";
	}



	$list = scandir('data');

	foreach($list as $fname){
		if(is_file("data/$fname")){
			echo "<a href=\"edit.php?fname=$fname\">$fname</a><br>";
		}
	}
?>


<form method="post">
	<br>Название <br>
	<input type="text" name="title" value="<?php echo $title ?>"><br>
	Контент <br>
	<textarea  id="" cols="30" rows="10" name="content"><?php echo $content ?></textarea><br>
	<input type="submit" value="Добавить">
</form>
<br>
<?php echo $msg; ?><br><br>
<a href="index.php">На главную</a><br><br>
<?php

	echo "data/".$title;
echo file_exists("data/../index.php");
echo checkTitle("indexphp");
echo preg_match("/^[a-z0-9_]+$/m",$title);
echo $_POST['fname'];


