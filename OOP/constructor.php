<?php
class House{
	public $name;
	public $color;

	public function __construct($name,$color){
		$this -> name = $name;
		$this -> color = $color;
		
	
	}
}

$blackHouse = new House("my house", " black");

echo "The color of " . $blackHouse -> name  . " is :". $blackHouse -> color . "<br>" ;


?>