<?php

class Futures
{

	private $futures = [];

	public function __get($name) {
		return $this->futures[strtolower($name)];
		
	}
	public function __set($name, $value) {
		$this->futures[strtolower($name)] = $value;
	}

	public function __isset($name) {
		return array_key_exists(strtolower($name), $this->futures);
	}
	public function __unset($name) {
		...
	}
	
}

$test1 = new Futures();
$test2 = new Futures();


$test1->name = "Name1";
$test2->nAmE = "Name2";

echo $test1->name."<br>";
echo $test2->nAmE."<br>";

echo isset($test1->name) ? "Yes<br>" : "No<br>";
echo isset($test2->nAmE) ? "Yes<br>" : "No<br>";




