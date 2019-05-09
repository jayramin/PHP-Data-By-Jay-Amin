<?php
// echo "<pre>";
// print_r(getenv());

function test(){
	// global $testvar;
	 $GLOBALS['testvar'] = "TOPS";
}
$a = 10;
// eCHo $a;
// echo $A;

// print_r($_ENV);
echo $testvar;
$a = 1;
$b = 2;

function Sum()
{
    global $a, $b;

    $b = $a + $b;
} 

Sum();
echo $b;

$a = 1;
$b = 2;

function Sum1()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
} 

Sum1();
echo $b;



// $GLOBALS
// $_ENV
// $_SERVER
// $_GET
// $_POST
// $_REQUEST
// $_FIELS
// $_SESSION
// $_COOKIES

?>