<?php
session_start();
include('config/dbcon.php'); // Make sure this file establishes a database connection

// UPDATE USER CONNECTION
if(isset($_POST['updateUser'])) {
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $flatnumber = $_POST['flatnumber'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];
    $password = $_POST['password'];

    $query = "UPDATE registration SET name='$name', username='$username', email='$email', flatnumber='$flatnumber', phonenumber='$phonenumber', address='$address', password='$password' WHERE id='$user_id'";   
    $query_run = mysqli_query($conn, $query);

    if($query_run) {
        $_SESSION['status'] = "User Updated Successfully"; 
        header("Location: registered.php");
    } else {
        $_SESSION['status'] = "User Updating Failed"; 
        header("Location: registered.php");
    }
    die();
}
?>
