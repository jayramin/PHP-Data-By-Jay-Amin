<?php 
// What : costructor is a method wich is invocked by default when objects are created & constructor never return 

// when : for initilize

// where : within class 

// why  : to initite values (Set DataMember values for all function within class) 

// How : Exapmle
class ConstructExample{
	public $AuthorName = "";
	public $AuthorName1 = "";
	//Old style constructors are DEPRECATED in PHP 7.0 START
	// function ConstructExample()
	// {
	// 	// return "Jay Amin"; never return
	// 	// echo "Jay Amin";
	// 	$this->AuthorName1 = "testing"; // $this it is a key word
	// }
	//Old style constructors are DEPRECATED in PHP 7.0 END
	//New style constructors STATR
	function __construct()
	{
		// return "Jay Amin"; never return
		// echo "Jay Amin";
		echo $this->AuthorName = "Jay Amin"; // $this it is a key word
	}
	//New style constructors END
	function test()
	{
		return "Test method calling";
	}
}

$objOfConstClass = new ConstructExample;
// print_r($objOfConstClass);

?>