<?php

class ClosureExample 
{
	private $data = 0;

	public function __construct($data)
	{
		$this->data = $data;
	}

	private function getData(){
		return $this->data;
	}

	public function getClosureData(Closure $func) 
	{
		return $func->call($this);
	}
}


$func = function () {
	return $this->getData();
} ;

$obj = new ClosureExample(5);
echo $obj->getClosureData($func);
