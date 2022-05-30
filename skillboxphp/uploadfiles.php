<?php 
 
$path = $_SERVER['DOCUMENT_ROOT'].'/upload/';
$path_for_logs = $_SERVER['DOCUMENT_ROOT'].'/files/temp.log';
$dir = $_SERVER['DOCUMENT_ROOT'].'/files/temp.log';
$uploadedFiles =scandir ($path);

// echo getcwd();
// echo dirname($path);

// $a = "0";
// echo empty($a);

if (isset($_POST['submit'])){
	
	if(empty($_FILES['file']['error'])){

		print_r($_FILES );

		if($_FILES['file']['type'] == "image/jpeg") {
			move_uploaded_file($_FILES['file']['tmp_name'], $path.$_FILES['file']['name']);
			
			$uploadedFiles =scandir ($path);

		}

		$error = $_FILES['file']['type'] == "image/jpeg" ? false : "Вы загрузили не jpeg";
	}

}


if (isset($_POST['delete'])){
	
	foreach ($_POST as $k => $post) {
		if ($k == 'delete') continue;

		unlink($path.$post);
		$uploadedFiles =scandir ($path);
	}
	// print_r($_POST);
	
}

// print_r(scandir ($path) );
?>
<p>Загрузите изображение. Принимаются только jpeg до 5 мегабайт</p>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
<input type="file" name="file">
<button type="submit" name='submit'>Отправить</button>

<p style="color:red;"><?php if (!empty($error)) echo $error;?></p>


</form>

<?php
	if (count($uploadedFiles) > 2) {?>

		<form action="<?=$_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">
				
		<?php 
		foreach ($uploadedFiles as $k => $file) {
			if ($k == 1 || $k == 0) continue; ?>
		<label style="display: block;"><input type="checkbox" name="<?=$file?>" value="<?=$file?>"><?=$file?></label>

		<?php }
		?>
		<br>
		<button type="submit" name='delete'>Отправить</button>

		<p style="color:red;"><?php if (!empty($error)) echo $error;?></p>


		</form>

<?php	}
?>

