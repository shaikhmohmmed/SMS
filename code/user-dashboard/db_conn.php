<?php

$sname = "localhost"; // Corrected typo here
$uname = "root";
$password = "";
$db_name = "user";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
   echo "Connection failed!";
   exit();
}

?>
