<?php
class MyClass
{
	// Contructors must be public
	public function __construct() 
	{ 
		echo "This is Constructor";
	}
	// Declare a public method
	public function MyPublic() 
	{ 
		echo "This is My Public";
	}
	// Declare a protected method
	protected function MyProtected() 
	{ 
		echo "This is My Protected";
	}
	// Declare a private method
	private function MyPrivate() 
	{ 
		echo "This is My Private";
	}
	// This is public
	function Foo()
	{
		$this->MyPublic();
		$this->MyProtected();
		$this->MyPrivate();
	}
}
class MyClass2 extends MyClass
{
	// This is public
	function Foo2()
	{
		$this->MyPublic();
		$this->MyProtected();
		$this->MyPrivate(); // Fatal Error
	}
}
$myclass2 = new MyClass2;
$myclass2->MyPublic(); // Works
$myclass2->Foo2(); // Public and Protected work, not Private