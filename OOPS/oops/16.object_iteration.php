<?php
class MyClass
{
	public $var1 = 'value 1';
	public $var2 = 'value 2';
	public $var3 = 'value 3';
	protected $protected = 'protected var';
	private $private = 'private var';

	function iterateVisible() {
			echo "MyClass::iterateVisible:<br>";
			foreach($this as $key => $value) {
				print "$key => $value<br>";
			}
	}
}
$class = new MyClass();
echo "<br>================= Direct Throu Object ============<br>";
echo $class->var1."<br>";
echo $class->var2."<br>";
echo $class->var3."<br>";
echo "<br>=================  Object Iterate Out side of class ============<br>";
foreach($class as $key => $value) 
{
	print "$key => $value<br>";
}
// echo "\n";
echo "<br>=================  Object Iterate in side of class ia method ============<br>";
$class->iterateVisible(); 
?>