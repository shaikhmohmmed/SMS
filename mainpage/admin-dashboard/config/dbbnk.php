<?php

$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "user"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $INSERT = "INSERT INTO bankstatement (sid, fid, fmid, month, credit/debit, cash, imageurl) VALUES (?, ?, ?, ?, ?, ?, ?)";
    if (mysqli_connect_error()) {
        die('Connection Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    } else {
        $INSERT = "INSERT INTO bankstatement (sid, fid, fmid, month, credit/debit, cash, imageurl) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($INSERT);
        
        if (!$stmt) {
                        echo "data Connect";
                    die('Error: ' . $conn->error);
                }
}
}
//Step 3: Display Data
$conn->close();
?>