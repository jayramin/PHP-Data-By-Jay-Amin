<?php 
class ConstructExample{
	public $AuthorName = "";
	
	function __construct($AuthorNamePara)
	{
		echo $this->AuthorName = $AuthorNamePara; // $this it is a key word
	}
	function test()
	{
		return "Test method calling";
	}
}

$objOfSecondClass = new ConstructExample('Jay Amin');
$objOfSecondClass = new ConstructExample('Jatin');
$objOfSecondClass = new ConstructExample('test');
// print_r($objOfSecondClass);

?>