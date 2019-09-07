<?php
class Person{
	public $name;
	public $age;

	public function __construct($name, $age){
		$this -> name = $name;
		$this -> age  = $age;
	}

	public function introduce(){
		echo "My name is {$this->name}. <br> My age is {$this->age}.";
	}
}

class Nahid extends Person {
	public function sayHello(){
		echo "Hello, PHP <br>";
	}
}

$Nahid = new Nahid('Nahid', 24);
$Nahid -> sayHello();
$Nahid -> introduce();

?>