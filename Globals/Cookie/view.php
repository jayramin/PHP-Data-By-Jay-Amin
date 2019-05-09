<?php
session_start();
echo "<pre>";
print_r($_COOKIE);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Hello, <?php echo $_SESSION['UserData']['UserName']; ?></h1>
<a href="destroy.php">Logout</a>
</body>
</html>