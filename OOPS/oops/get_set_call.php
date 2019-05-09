<?php

class ClassName {
	function __get($data){
		echo $data;
	}
	function __set($var,$val){
		echo "Variable is  : ".$var."<br>";
		echo "Value is  : ".$val."<br>";

	}
	function __call($method,$array){
		echo $method;
		echo "<pre>";
		print_r($array);
	}

}

$objClass = new ClassName;
$objClass->name;
$objClass->name123;
$objClass->name=50;
$objClass->name1=55;
$objClass->name(50,'name',123,123.123);

?>