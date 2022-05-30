<?php 
try{
	$conn = mysqli_connect("127.0.0.1", 'phplesson', 'phplesson', 'phplesson');
} catch (Exception $e) {
	echo "Error";
}

if(! empty($_POST["is_active"]) )  {

	echo "Post {$_POST["is_active"]}";
	mysqli_query($conn, "update settings set is_active = '{$_POST["is_active"]}' where id = 1");
}

echo "<br>";
$settings_querry = mysqli_query($conn, "select * from settings");
// echo "Location: file://{$_SERVER["DOCUMENT_ROOT"]}/{$_GET["file_name"]}";
// header("Location: file://{$_SERVER["DOCUMENT_ROOT"]}/{$_GET["file_name"]}");
// http_response_code(404);
// echo $_SERVER["DOCUMENT_ROOT"];
if (! empty($settings_querry)){
	$settings = mysqli_fetch_assoc($settings_querry);
	echo "не пусто в БД";
	if($settings["is_active"] == "yes"){
		
		echo "<br>";
		echo "<p style=\"color:green;\">Публичная часть включена</p>";?>

<p>Включить?</p>
<form action="/get_post.php" method="post">
	<select name="is_active" id="">
		<option value="yes"  selected="selected">yes</option>
		<option value="no">no</option>
	</select>
	<button type='submit'>Submit</button>
</form>

<?php	} elseif ($settings["is_active"] == "no"){
		echo "<br>";
		echo "<p style=\"color:red;\">Публичная часть выключена</p>";?>

<p>Включить?</p>
<form action="/get_post.php" method="post">
	<select name="is_active" id="">
		<option value="yes">yes</option>
		<option value="no"  selected="selected">no</option>
	</select>
	<button type='submit'>Submit</button>
</form>

<?php }
}
?>


