<?php
session_start();
// include("start.php");
echo $Id;
echo $_SESSION["UserName"];
echo "<pre>";
print_r($_SESSION);
echo $_SESSION["UserData"]['UserName'];

?>