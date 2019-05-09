<?php
echo "<pre>";
echo "======================== GET Data ============================<br>";
print_r($_GET);
echo "======================== POST Data ============================<br>";
print_r($_POST);
echo "======================== _REQUEST Data ============================<br>";
print_r($_REQUEST);
echo "======================== FILES Data ============================<br>";
print_r($_FILES);
echo "======================== GLOBALS Data ============================<br>";
$GLOBALS['TestVar'] = "Test value";
print_r($GLOBALS);

$tmpname = $_FILES['Image']['tmp_name'];
$fname = $_FILES['Image']['name'];
move_uploaded_file($tmpname,$fname);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<FORM method="post" enctype="multipart/form-data">
	
	<input type="text" name="UserName">
	<input type="Password" name="Password">
	<input type="file" name="Image">
	<input type="submit" value="Send" name="Save">
	<input type="reset" value="Cancel">

</FORM>

</body>
</html>