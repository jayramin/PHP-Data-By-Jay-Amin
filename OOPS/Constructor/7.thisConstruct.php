<?php
Class Foo {
  var $test = "Just Jay";	
  public $Name = "Jay Amin";	
  function Foo() {
  	echo $test;
  	echo $this->Name;
    // return $this->__construct();
  }
  function __construct() {
    // whatever
    echo "calling";
  }
}
$ob = new Foo;
?>