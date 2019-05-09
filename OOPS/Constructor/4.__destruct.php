<?php
// Destructors called during the script shutdown have HTTP headers already sent. The working directory in the script shutdown phase can be different with some SAPIs (e.g. Apache).
class MyDestructableClass 
{
	public $AuthorName = "";
    function __construct() {
    	$this->AuthorName = "Jay Amin";
        print "In constructor<br>";
    }
    function testCall(){
    	echo "calling datamember after __construct and value is :".$this->AuthorName."<br>";
    	// exit;
    }
    function __destruct() {
    	$this->AuthorName = null;
        print "Destroying " . __CLASS__ . "<br>";
    }
    function testCallAfterDestructor(){
    	echo "calling datamember after __destruct and value is :".$this->AuthorName."<br>";
    }
}

$obj = new MyDestructableClass();
$obj->testCall(); 
$obj->testCallAfterDestructor(); 