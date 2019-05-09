<?php 

class SumOfNumbers{
	
	function SumOfTwo($a,$b){
		// $a = 50;
		// $b = 50;
		return $c= $a+$b;
	} 
	function SumOfThree($a,$b,$c){
		// $a = 50;
		// $b = 50;
		return $sum= $a+$b+$c;
	} 
}

class ClassAvg extends SumOfNumbers{
	
	function AvgOfTow($a,$b){
		$resVal =  $this->SumOfTwo($a,$b);
		return $resVal/2;
	}
	function AvgOfTree($a,$b,$c){
		$resVal =  $this->SumOfThree($a,$b,$c);
		return $resVal/3;
	}
}

$Object = new ClassAvg;
echo $Object->AvgOfTow(55,33);
echo "<br>";
echo $Object->SumOfThree(55,33,45);
echo "<br>";
echo $Object->AvgOfTree(55,33,33);
// echo $Object->SumOfTwo(45,78);
// echo "<br>";
// echo $Object->SumOfTwo(546,456);
// echo "<br>";
// echo $Object->SumOfTwo(6548,1);
 ?>