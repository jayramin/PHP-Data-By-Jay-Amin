<?php

echo $marks1 =15;
echo "<br>";
echo $marks2 =18;
echo "<br>";
echo $marks3 =20;
echo "<br>";
echo $marks4 =15;
echo "<br>";
echo $marks5 =18;
echo "<br>";
echo $sum  = $marks5+$marks4+$marks3+$marks2+$marks1;
echo "<pre>";
echo "===================== Numeric Array ======================";
$marsks = array(15,18,18,20,18);
$marsks1 = array(15,18,'4001'=>18,20,18);
  print_r($marsks);
  print_r($marsks1);
  echo "<br>".array_sum($marsks)."<br>";

echo "===================== Associative Array ======================";
$Assoc_marks_array = array("Maths"=>20,"Hindi"=>15,"Gujarati"=>18,"Comp"=>20);
$Assoc_marks_array1 = array(20,"Hindi"=>15,"Gujarati"=>18,"Comp"=>20,50,50,5.5,true,'TOPS');
print_r($Assoc_marks_array);
print_r($Assoc_marks_array1);
echo "<br>".array_sum($Assoc_marks_array)."<br>";
echo "<br>===================== Multidimension Array ======================<br>";
$arr = array("Food"=>array('Fruits'=>array('Apple',"Banana","Orange"),array("Vegi"=>array('Potato','soemthing'))));
print_r($arr);
?>