<?php


$str_array = array( "I", "Love", "PHP" );
$serialized_str = serialize($str_array);
echo $serialized_str;


$unserialized = unserialize('a:3:{i:0;s:1:"I";i:1;s:4:"Love";i:2;s:3:"PHP";}');
print_r($unserialized);