<?php

// echo  "<pre>";
// print_R($_ENV);
echo "<pre>";
print_r($GLOBALS);
$_ENV = getenv();
print_r($_ENV);
print_r($_SERVER);

?>