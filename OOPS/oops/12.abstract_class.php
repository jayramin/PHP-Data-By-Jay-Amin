<?php


interface Ainterface
{
	function functioname();
	function functioname1();
	// function check();
	// function name(){
	// 	echo "call";
	// }
}

interface Ainterface123
{
	// function functioname();
	// function functioname1();
	function test123();
	// function name(){
	// 	echo "call";
	// }
}

abstract class A
{
	abstract function foo();
	abstract function bar();
	function test()
	{
		echo "In abstract Class A(test)";
	}
}
//This Will work
class B extends A implements Ainterface,Ainterface123
{
	function foo(){
		echo "In class B(foo)";
	}
	function bar(){
		echo "In class B(bar)";
	} 
	function functioname(){
		echo "In interface functioname";
	}
	function functioname1(){
		echo "In interface functioname1";
	}
	function test123(){
		echo "In interface functioname1";
	}
}

$OBJ = new B;
//This will not work
//give the fetal error 
//Class C contains 1 abstract method and must 
//therefore be declared abstract or implement 
//the remaining methods (A::bar)
// class C extends A
// {
// function foo()
// {
// echo "In Class C(foo)";
// }
// }
?>