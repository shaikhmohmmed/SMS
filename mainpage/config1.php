<?php


if (isset($_POST['name'], $_POST['username'], $_POST['email'], $_POST['flatnumber'], $_POST['phonenumber'], $_POST['address'], $_POST['password'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $flatnumber = $_POST['flatnumber'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $password = $_POST['password']; 

    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "user";

    // Create connection
    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    } else {
        // session_start();
        $SELECT = "SELECT email FROM registration WHERE email = ? LIMIT 1";
        $INSERT = "INSERT INTO registration (name, username, email, flatnumber, phonenumber, address, password) VALUES (?, ?, ?, ?, ?, ?, ?)";

        // Prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        $rnum = $stmt->num_rows;
        
        if ($rnum == 0) {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssiiss", $name, $username, $email, $flatnumber, $phonenumber, $address, $password); // Changed to match the number of parameters
            $stmt->execute();
            echo "New record inserted successfully";
        } else {
            echo "Someone already registered using this email";
        }
        $stmt->close();
        $conn->close();
    }
} else {
    echo "All fields are required";
}

?>

