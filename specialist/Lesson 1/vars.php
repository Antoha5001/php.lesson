<?php
	$name = '�����';
	$age = '26';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>���������� � �����</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>���������� � �����</h1>
	<?php
	echo '���� ����� ', $name;
	echo '<br> ��� ', $age, ' ���';
	unset($age);
	?>
</body>
</html>
