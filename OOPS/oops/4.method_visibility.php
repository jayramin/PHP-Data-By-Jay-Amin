<?php
class MyClass
{
	// Contructors must be public
	 function __construct() 
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
$myclass = new MyClass;
$myclass->MyPublic(); // Works
$myclass->MyProtected(); // Fatal Error
$myclass->MyPrivate(); // Fatal Error
$myclass->Foo(); // Public, Protected and Private work