<?php

require $_SERVER['DOCUMENT_ROOT'] . "/app/AuthUser/User.php";
require $_SERVER['DOCUMENT_ROOT'] . "/app/SocialUser/User.php";

// class User
// {
// 	private $name = "Ivan";
// 	private $money = 5;

// 	const LEGS = 2;

// 	public function getMoney($borrow = 0)
// 	{
// 		return $this -> money + $borrow . "<br>";
// 	}
	
// 	public function getName()
// 	{
// 		return $this -> name . "<br>";
// 	}

// 	public function getLegs()
// 	{
// 		return self::LEGS . "<br>";
// 	}
// }


// $user = new App\AuthUser\User();

// echo $user -> getClassName();
// echo $user::LEGS;




// $user = new App\SocialUser\User();

// echo $user -> getClassName();

class Animals
{
	public function say()
	{		
		echo "Йо-хохо";
	}

	public function walk()
	{		
		echo "Шырк-Шырк_шырк";
	}

	public function sleep()
	{
		echo "zZZZZZZZZzz".'<br>';
	}
}

class Cat extends Animals
{
	
	public function walk()
	{		
		echo "Топ-Топ-Топ".'<br>';
	}

	public function say()
	{		
		echo "Мяу-Мяу";
	}
	
}

class TalcativeCat extends Cat
{
	
	public function say()
	{		
		echo "Мяу-Мяу Мяу-Мяу";
	}

	public function walk()
	{		
		self::say();
		parent::walk();
	}
}

class Tiger extends TalcativeCat
{
	
	public function say()
	{		
		echo "РРРРРРРРР".'<br>';
	}
}


$tiger = new Tiger();
$tiger->say();
$tiger->walk();
$tiger->sleep();

echo '<br>';
echo number_format(12580, 0, ',', ' ');