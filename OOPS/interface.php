<?php 
interface Ainterface123 //interfaces are 100% abstract
{
	// function functioname();
	// function functioname1();
	function test123();
	// function name(){ // we cant define simple method with body part wihtin interface
	// 	echo "call";
	// }
}
class ClassName implements Ainterface123{
	function test123(){
		echo "ok";
	}
}


$on  = new ClassName;
$on->test123();
?>