<?php
class A
{
	public function A() //Old Method
	{
		echo "<br>Constructor of class A";
	}
}
class B extends A
{
	public function __construct() //New Magic Method
	{
		parent:: __construct();
		//parent::A();
		echo "<br> Constructor of class B";
	}
	public function B() {
		
		echo "<br>Constructor of class Old method B";
	}
}
$ob = new B;

?>