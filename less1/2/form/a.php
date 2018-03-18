<?php

	session_start();

	if(count($_POST) > 0){
		$_SESSION['name'] = $_POST['name'];
		header('Location: main.php');
		exit();
	}
?>
<form method="post">
	Имя<br>
	<input type="text" name="name"><br>
	<input type="submit" value="Добавить">
</form>