<?php
class a
{
	public function adisplay()
	{
		echo "Good";
	}
}
class b extends a
{
	public function bdisplay()
	{
		echo "Morning";
	}
}
$b = new b();
$b->bdisplay();
$b->adisplay();
?>