<?php
class ClassName{ // creating class 
	//class is a keyword followd by class keyworld we should give class name and after that we initalize class body with { body } 
	//->it contain data member and member function

	public $testDataMem = "Jatin"; // Declare DataMember
	function test(){ //Member function withn class
		// function body
		return $this->testDataMem;
		$var = 'test var';
		return "test function calling"; 
	}
	function test($a){
		return $this->testDataMem;
		return $var ;
	}
}
$ClassObj = new ClassName;
echo $ClassObj->test(); 
echo $ClassObj->test(12); 
 ?>
