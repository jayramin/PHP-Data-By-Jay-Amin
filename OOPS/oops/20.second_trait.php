<?php
trait first_trait
{
	function tops()
	{
		echo "surat center";
	}
}  
trait second_trait
{
	function  tech()
	{
		echo "sandeep sir";
	}
} 
Class  first_class
{
//now using more than one trait
use first_trait,second_trait;
// use second_trait;
}
$obj=new first_class();
$obj->tops();
$obj->tech()
?>