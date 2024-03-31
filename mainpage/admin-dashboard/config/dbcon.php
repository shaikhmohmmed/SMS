<?php  
 $servername = "localhost";
 $dbUsername = "root";
 $dbPassword = "";
 $dbname = "user";

// Connection
$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

// Check Connection
if(!$conn)
{
    header("Location: ../errors/db.php");
    die();
}
else{
    echo "Database Connected.!";
}
?>
