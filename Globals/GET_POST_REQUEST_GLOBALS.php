<?php
echo "<pre>";
echo "========== Get Method =============<br>";
print_r($_GET);
echo "========== POST Method =============<br>";
print_r($_POST);

echo "========== REQUEST Method =============<br>";
echo $_REQUEST;

$GLOBALS["userdata"]="Something";
print_r($GLOBALS);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
	<form method="post">
		<input type="text" name="UserName"><br>	
		<input type="Password" name="Password"><br>	
		<input type="Submit" name="Test"><br>	
	</form>	
</body>
</html>