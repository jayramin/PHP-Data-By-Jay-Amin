<?php
$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$a))
  {
  echo "Key exists!<br>";
  }
else
  {
  echo "Key does not exist!<br>";
  }

  $people = array("Peter", "Joe", "Glenn", "Cleveland");

if (in_array("Glenn1", $people))
  {
  echo "Match found<br>";
  }
else
  {
  echo "Match not found<br>";
  }


  $a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);
?>