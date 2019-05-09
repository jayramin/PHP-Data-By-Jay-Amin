<?php 

// class A{
// 	abstract function foo(); // simple class does not allow to create abstracted methods
// 	function test()
// 	{
// 		echo "In abstract Class A(test)";
// 	}
// }
abstract class A{
	// abstract function foo(){ // abstracted method cant have body part when declaration
	// 	echo "test";
	// }

	abstract function foo();
	// abstract function foo1();
	function test()
	{
		echo "In abstract Class A(test)";
	}
}

class ClassName extends A{
	function foo()
	{
		echo "In abstract Class A(test)";
	}	
}

$Ob = new ClassName;
?>