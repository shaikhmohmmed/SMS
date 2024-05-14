<?php
session_start();
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/dbcon.php'); // Include the database connection file

// Start the session

?>

<script type="text/javascript">
    window.history.forward();
</script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="height: 100px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">User Data</h3>
        </div>
        <?php
// Check if user information is available in session
if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
    // Fetch user data from the database
    $email = $_SESSION['email'];

    // Prepare and bind the SQL query
    $query = "SELECT * FROM registration WHERE name= '$name' , username= '$username', email = '$email', flatnumber='$flatnumber', phonenumber='$phonenumber', address='$address'";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);

    // Execute the query
    if(mysqli_stmt_execute($stmt)) {
        // Get the result
        $result = mysqli_stmt_get_result($stmt);

        // Check if a row was returned
        if (mysqli_num_rows($result) > 0) {
            // Fetch the row
            $row = mysqli_fetch_assoc($result);

            // Display user information
            if ($row["usertype"] == "user") 
            echo "<p>Name: " . $_SESSION['name'] . "</p>";
            echo "<p>Username: " . $_SESSION['username'] . "</p>";
            echo "<p>Email: " . $_SESSION['email'] . "</p>";
            echo "<p>Flat Number: " . $_SESSION['flatnumber'] . "</p>";
            echo "<p>Phone Number: " . $_SESSION['phonenumber'] . "</p>";
            echo "<p>Address: " . $_SESSION['address'] . "</p>";
            // Add more fields as needed
        } else {
            echo "No user found with the provided email.";
        }
    } else {
        echo "Error executing query: " . mysqli_error($conn);
    }
} else {
    echo "User information not found in session.";
}

// Debugging statements
var_dump($_SESSION); // Check session variables
?>




    <?php
    include 'includes/footer.php';
    ?>
</div>
