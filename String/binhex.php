<?php


// \b  Backspace (ascii code 08)
// \f  Form feed (ascii code 0C)
// \n  New line
// \r  Carriage return
// \t  Tab
// \"  Double quote
// \\  Backslash character
echo $MyString = "this is the demo for the string is can hold Alphanumeric value and symbals too like A-Z,a-z,
0-9 and !@#$%^&*() ";
$str = bin2hex($MyString);
echo ($str); 
echo "<br>";
$newString = "a";
echo bin2hex("A");


echo "<br>====================Chop====================<br><br>";

$str = " Hello World! This User";
echo $str . "<br>Chop : ";
echo chop($str,"User");
echo "<br>Trim : ";

echo trim($str,"World");
echo "<br>RTrim : ";
echo rtrim($str,"User");
echo "<br>LTrim : ";
echo ltrim($str,"Hello");
echo "<br>====================Different values====================<br><br>";

echo chr(41) . "<br>"; // Decimal value
echo chr(0101) . "<br>"; // Octal value
echo chr(0x52) . "<br>"; // Hex value

?>
