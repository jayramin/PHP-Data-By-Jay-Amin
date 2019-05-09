<?php 


$a = 500;
$b = 50;
$c = 5000;

// echo $a = $a+$b;
echo $a+=$b;
echo "<br>";

// if ($a > $b) {
// 	echo "a is bigger than b";
// }




// if ($a > $b) {
// 	echo "a is bigger than b";
// }else{
// 	echo "b is bigger";
// }

// if ($a > $b) {
// 	echo "a is bigger than b";
// }elseif ($a < $b) {
// 	echo "a is bigger than b";
// }else{
// 	echo "equal";
// }
if ($a > $b) {
	if ($a > $c) {
		echo "a is bigger than b";
	}else{
		echo "c is greter";
	}
}elseif ($a < $b) {
	echo "a is bigger than b";
}else{
	echo "equal";
}


$favcolor = "red";
echo "<PRE>";
print_r($_POST);	
if (!isset($_POST['Check'])) {
	echo "Plese press button";
}else{
	# code...
	$favcolor = $_POST['Color'];
	switch ($favcolor) {
	    case "red":
	        echo "Your favorite color is red!";
	        break;
	    case "blue":
	        echo "Your favorite color is blue!";
	        break;
	    case "green":
	        echo "Your favorite color is green!";
	        break;
	    default:
	        echo "Your favorite color is neither red, blue, nor green!";
	}
}

?>
<form method="post">
	<input type="text" name="Color">
	<input type="submit" name="Check">
</form>