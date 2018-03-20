<?php
include_once("functions.php");

	if(count($_GET) >0){
		$title = trim($_GET['fname']);
		$content = file_get_contents("data/$title");
//		$content = trim($_POST['content']);

		if($title == "" || $content == ""){
		  $msg = "Заполните все поля";
		}
//		elseif (file_exists("data/$title")){
//
//		  $msg = "Такая новость уже существует!";
//
//		}
//		elseif (!checkTitle($title)){
//
//		  $msg = "Не верный формат!";
//		}


	}
	else{

		$title = "";
		$content = "";
		$msg = "";
	}

	if(count($_POST) >0){
		$content = trim($_POST['content']);
		$file = fopen("data/$title","w");

		fwrite($file, $content);

		fclose($file);
		header("Location: edit.php");
		exit();
	}

	$list = scandir('data');

	foreach($list as $fname){
		if(is_file("data/$fname")){
			echo "<a href=\"edit.php?fname=$fname\">$fname</a><br>";
		}
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


