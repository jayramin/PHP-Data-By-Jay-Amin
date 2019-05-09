<?php
class Foo
{
	public static $my_static = 'foo';
	public $my_dm = 'Data Member';
	public function staticValue() 
	{
	echo $this->my_dm;	
	return self::$my_static;
	}
}
class Bar extends Foo
{
	public function fooStatic() 
	{
		return parent::$my_static;
	}
}
print Foo::$my_static . "\n";
$foo = new Foo();
print $foo->staticValue() . "\n";
//print $foo->my_static . "\n";        
print Bar::$my_static . "\n";
$bar = new Bar();
print $bar->fooStatic() . "\n"; 
?>