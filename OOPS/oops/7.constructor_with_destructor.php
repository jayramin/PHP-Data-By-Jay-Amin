<?php
class MyDestructableClass 
{
	// public $name = "";
function __construct() 
{
// print "In constructor\n";
$this->name = "MyDestructableClass";
}
function __destruct() 
{
print "Destroying " . $this->name . "\n";
}
function name(){
	echo $this->name;
}
}
$obj = new MyDestructableClass();
$obj->name();
?> 