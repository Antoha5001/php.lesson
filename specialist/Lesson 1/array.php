<?php
/*
������� 1
- �������� ������ $bmw � ��������:
	"model"
	"speed"
	"doors"
	"year"
- ��������� ������ ����������: "X5", 120, 5, "2006"	
- �������� ������� $toyota � $opel ����������� ������� $bmw.
- ��������� ������ $toyota ����������: "Carina", 130, 4, "2007"
- ��������� ������ $opel ����������: "Corsa", 140, 5, "2007"*/
	
	
	$cars ['bmw'] = array(
			model => "X5",
			speed => 120,
			doors => 5,
			year =>	"2006",);
			
			
	$cars ['toyota'] = array(
			model => "Carina",
			speed => 130,
			doors => 4,
			year =>	"2007",);
			
	$cars ['opel'] = array(
			model => "Corsa",
			speed => 140,
			doors => 4,
			year =>	"2007",
	);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<title>�������</title>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
</head>
<body>
	<h1>�������</h1>
	<?php
	/*
	������� 2
	- �������� �������� ���� ��� �������� � ����: name - model - speed - doors -year,  ��������: bmw - 120 - 5 - 2006
	*/
		/*echo 'BMW - ',$bmw[model],' - ',$bmw[speed],' - ',$bmw[doors],' - ',$bmw[year],'<br>';	
		echo 'Toyota - ',$toyota[model],' - ',$toyota[speed],' - ',$toyota[doors],' - ',$toyota[year],'<br>';*/
		echo "BMW - {$cars['bmw'][model]} : {$cars['bmw'][speed]} : {$cars['bmw'][doors]} : {$cars['bmw'][year]}<br>";
		echo $cars['toyota'][model],' : ',$cars['toyota'][speed],' : ',$cars['toyota'][doors],' : ',$cars['toyota'][year],'<br>';
		echo $cars['opel'][model],' : ',$cars['opel'][speed],' : ',$cars['opel'][doors],' : ',$cars['opel'][year],'<br>';
		echo '<pre>';
		var_dump($cars);
		echo '</pre>';		
	?>
</body>
</html>
