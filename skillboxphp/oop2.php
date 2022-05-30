<?php

class Tik 
{
	public static $time = 0;

	public static function addTime()
	{
		static::$time++;
	}

	public function getStaticTime()
	{
		echo static::$time."<br>";
	}

	public function getThisTime()
	{
		echo self::$time."<br>";
	}
}

class TikA extends Tik
{
	static $time = 0;
}

class TikB extends Tik
{

}

$tikA = new TikA();
$tikB = new TikB();


$tikA->getStaticTime();
$tikB->getStaticTime();

$tikA::addTime();

$tikA->getStaticTime();
$tikB->getStaticTime();
echo Tik::$time;

$tikA->getThisTime();
$tikB->getThisTime();
