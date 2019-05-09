<?php 
class ConstructExample{
	public $AuthorName = "";
	
	function __construct()
	{
		echo $this->AuthorName = "Jay Amin"; // $this it is a key word
	}
	function test()
	{
		return "Test method calling";
	}
}

class SecondClass extends ConstructExample{
	
	function __construct()
	{
		# code...
		parent::__construct(); // calling parent constructor with the help of :: Scope Resolution Operator parent is a key word for accessing parent property in child 
		echo "called";
	}
}

$objOfSecondClass = new SecondClass;
// print_r($objOfSecondClass);

?>