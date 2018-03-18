<?php
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


