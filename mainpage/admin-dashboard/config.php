<?php
// session_start(); // Start the session

// $name = $_POST['name'];
// $date = $_POST['date'];
// $lastdate = $_POST['lastdate'];
// $flatnumber = $_POST['flatnumber'];
// $buildnumber = $_POST['buildnumber'];
// $fee = $_POST['fee'];
// $latefee = $_POST['latefee'];
// $total = $_POST['total'];

// if (!empty($name) || !empty($date) || !empty($lastdate) || !empty($flatnumber) || !empty($buildnumber) || !empty($fee) || !empty($latefee)) {
//     $servername = "localhost";
//     $dbUsername = "root";
//     $dbPassword = "";
//     $dbname = "user";

//     // Create connection
//     $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

//     if (mysqli_connect_error()) {
//         die('Connection Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
//     } else {
//         $INSERT = "INSERT INTO invoice (name, date, lastdate, flatnumber, buildnumber, fee, latefee, total) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
//         $stmt = $conn->prepare($INSERT);

//         if (!$stmt) {
//             die('Error: ' . $conn->error);
//         }

//         $stmt->bind_param("sssiiddd", $name, $date, $lastdate, $flatnumber, $buildnumber, $fee, $latefee, $total);
//         $stmt->execute();

//         if ($stmt->affected_rows > 0) {
//             $_SESSION['status'] = "Bill made Successfully";
//         } else {
//             $_SESSION['status'] = "Bill cannot be made";
//         }

//         $stmt->close();
//         $conn->close();

//         header("Location: registered.php"); // Redirect after processing
//         exit(); // Exit to prevent further execution
//     }
// } else {
//     echo "All fields are required";
//     die(); // Terminate script execution
// }


// Successfull Connection


// Step 1: Connect to the database
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
    $INSERT = "INSERT INTO invoice (name, date, lastdate, flatnumber, buildnumber, fee, latefee, total) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    if (mysqli_connect_error()) {
        die('Connection Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    } else {
        $INSERT = "INSERT INTO invoice (name, date, lastdate, flatnumber, buildnumber, fee, latefee, total) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
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

