<?php
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Validate and sanitize input data
    $fmid = $_POST['fmid'];
    $memberid = $_POST['memberid'];
    $payment = $_POST['payment'];
    $amount = $_POST['amount'];
    $imageurl = $_POST['imageurl'];

    // Validate input fields (You can add more validation as needed)
    if (empty($fmid) || empty($memberid) || empty($payment) || empty($amount) || empty($imageurl)) {
        echo "All fields are required";
        exit;
    }

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare insert query
    $sql = "INSERT INTO bankstatement (fmid, memberid, payment, amount, imageurl) 
            VALUES (?, ?, ?, ?, ?)";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssis", $fmid, $memberid, $payment, $amount, $imageurl);

    // Execute the query
    if ($stmt->execute()) {
        echo "New record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Form data not submitted";
}
?>
