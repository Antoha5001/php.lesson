<?php 
namespace App\Mailer;

class Client
{
	private $client;

	function __construct(string $name)
	{
		$this -> name = $name;
	}

	public function getName(){
		return $this -> name;
	}
}