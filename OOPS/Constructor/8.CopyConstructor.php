<?php

class Person{
    public $name;
    public $address;
	
    public function __construct($name){ // parameterized constructor with name argument
        $this->name = $name; 
    }
    public function __clone(){ 
    } 
}
$perObj1 = new Person("Full Stack Tutorials"); // parameterized constructor with name argument
$perObj2 = clone $perObj1; // copy constructor initialize $perObj2 with the values of $perObj1
echo $perObj2->name;

//Output:
Full Stack Tutorials