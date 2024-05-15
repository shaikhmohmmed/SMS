<?php
session_start();
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/dbcon.php'); // Include the database connection file

// Check if user information is available in session
if (isset($_SESSION['username']) && isset($_SESSION['name']) && isset($_SESSION['phonenumber']) && isset($_SESSION['address']) && isset($_SESSION['email']) && isset($_SESSION['flatnumber'])) {
    // Display user information
    echo "<div class='content-wrapper'>";
    echo "<div class='content-header'>";
    echo "<div class='container-fluid'>";
    echo "<div class='row mb-2'>";
    echo "<div class='col-sm-6'>";
    echo "<h1 class='m-0'>Dashboard</h1>";
    echo "</div>";
    echo "<div class='col-sm-6'>";
    echo "<ol class='breadcrumb float-sm-right'>";
    echo "<li class='breadcrumb-item'><a href='#'>Home</a></li>";
    echo "<li class='breadcrumb-item active'>Dashboard</li>";
    echo "</ol>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

    echo "<div class='card'>";
    echo "<div class='card-header'>";
    echo "<h3 class='card-title'>User Data</h3>";
    echo "</div>";
    echo "<div class='card-body'>";
    if (["usertype"] == "user") 
    
    echo "<p>Name: " . $_SESSION['name'] . "</p>";
    echo "<p>Username: " . $_SESSION['username'] . "</p>";
    echo "<p>Email: " . $_SESSION['email'] . "</p>"; // Make sure email is set in session
    echo "<p>Flat Number: " . $_SESSION['flatnumber'] . "</p>"; // Make sure flatnumber is set in session
    echo "<p>Phone Number: " . $_SESSION['phonenumber'] . "</p>";
    echo "<p>Address: " . $_SESSION['address'] . "</p>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

} else {
    // User information not found in session
    echo "User information not found in session.";
}

include 'includes/footer.php';
?>