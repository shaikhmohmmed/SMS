<?php
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    // $sname = $_POST['sname'];
    // $location = $_POST['location'];
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $phone = $_POST['phone'];

    // Validate input fields (You can add more validation as needed)
    if (empty($sname) || empty($location) || empty($name) || empty($email) || empty($phone)) {
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
    $sql = "INSERT INTO enquiry (sname, location, name, email, phone) 
            VALUES (?, ?, ?, ?, ?)";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $sname, $location, $name, $email, $phone);

    // Execute the query
    if ($stmt->execute()) {
        echo "New record inserted successfully";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Form data not submitted";
}
?>
