<?php 
// error_reporting(E_ALL);
// ini_set('display_errors',true);

$a = 11;

switch($a){
	case $a == 10:
	case $a+5 == 10: echo "Равно 10 или 5"; break;
	case $a == 11:
	case $a+5 == 11: echo "Равно 11"; break;
	default: echo "Default";

}

if($g){
	echo "13";
}

$a = [1,2];
$a[] = "45";
echo " <br>"; //
var_dump($a); //


echo " <br>"; //

$b = [
	"title" => "Заголовок1",
	"category" => 1
];

echo array_key_exists($key='title', $array = $b);


echo " <br>"; //

$c = [
	['title' => 'визитки'],
	['title' => 'визитки'],
	['title' => 'листовки'],
];

$d = [];
foreach($c as $ck => $cv){
	// echo $cv[];
	// var_dump($cv);
	array_push($d, $cv["title"]);
}

echo htmlspecialchars("<script>");
?>