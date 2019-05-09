<?php
$st = "Welcome To The TOPS Techno";
// explode(' ', $st);
$arr = explode(' ', $st);
echo "<pre>"; 
print_r($arr);
echo $str_imp = implode(',',$arr);
// implode(glue, pieces)
?>