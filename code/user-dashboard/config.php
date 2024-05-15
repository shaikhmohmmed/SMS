<?php
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Validate and sanitize input data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $card = $_POST['card'];
    $address = $_POST['address'];
    $img = $_POST['img'];

    // Validate input fields (You can add more validation as needed)
    if (empty($name) || empty($phone) || empty($card) || empty($address) || empty($img)) {
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
    $sql = "INSERT INTO inciting_detail (name, phone, card, address, img) 
            VALUES (?, ?, ?, ?, ?)";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssis", $name, $phone, $card, $address, $img);

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
    echo "";
}
?>
