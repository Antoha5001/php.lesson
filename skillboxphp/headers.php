<?php 

echo "Location: file://{$_SERVER["DOCUMENT_ROOT"]}/{$_GET["file_name"]}";
// header("Location: file://{$_SERVER["DOCUMENT_ROOT"]}/{$_GET["file_name"]}");
// http_response_code(404);
// echo $_SERVER["DOCUMENT_ROOT"];

?>

<form action="" method="get">
<input name="myFile" type="file" value="empty.xslx">
</form>
