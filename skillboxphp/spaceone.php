<?php
 
namespace spaceOne;


function getSum(int $a, int $b) : int 
{
	// echo func_num_args();
	// $b = func_get_arg(1) ?? false;
	function getSumInner($a, $b){
		return $a+$b;
	}
	$c = 'Я $c из функции';
	return  getSumInner($a, $b);
}