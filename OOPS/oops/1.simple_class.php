<?php
class simpleclass
{
	public $var = "Hello i am just Value";
	function display()
	{
		echo $this->var;
	}
}
$s= new simpleclass();
$s->display();
?>