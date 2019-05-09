<?php
echo "<pre>";
echo "<br>============================= Fill ================================= <br>";

$a1=array_fill(5,4,"blue");
print_r($a1);	

echo "<br>============================= Pad ================================= <br>";
$a=array("red","green","Blue");
print_r(array_pad($a,5,"TOPS"));




$age=array("a"=>"35","abbbbs"=>"37","acc"=>"43");





print_r($age);
$newArray = array_keys($age);
print_r($newArray);
print_r(array_values($age));

?> 