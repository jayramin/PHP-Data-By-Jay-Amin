<?php
class myclass
{
	function __set($data,$value)
	{
		echo "__set is called<br>";
		echo "Variable= ".$data." ";
		echo "Value= ".$value;
	}
}
$myclassobj = new myclass();
$myclassobj->x=30;
class myget
{
function __get($data)
{
//note: variable 'x' is not defined in myclass
$data = "<br>__get is called<br>undefined attributes ";
return $data;
}
} 
$mygetobj = new myget();
echo $mygetobj->getdata;
?>