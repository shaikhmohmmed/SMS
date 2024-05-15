<?php
session_start();
include('includes/header.php');
// include('includes/topbar.php');
// include('includes/sidebar.php');
include('config/dbcon.php');
?>



<?php
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $visit = $_POST['visit']; // Corrected variable name
    
    // Validate input fields (You can add more validation as needed)
    if (empty($name) || empty($contact) || empty($address) || empty($visit) ) {
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
    $sql = "INSERT INTO visitor_detail (name, contact, address, visit) 
            VALUES (?, ?, ?, ?)";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Error: " . $conn->error);
    }
    $stmt->bind_param("siss", $name, $contact, $address, $visit);

    // Execute the query
    if ($stmt->execute()) {
        echo "";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Form data not submitted";
}
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

   
                <!-- /.card -->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Visitor
                </h3>
                <br>
                <br>
                <!-- <a href="index.php" class="btn btn-primary btn-sm float-right btn-danger">Back</a> -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <form action="" method="POST">
                            <div class="modal-body">
                                            <div class="form-group" >
                                                <label for="">Name</label>
                                                <input type="text" name="name"  class="form-control" placeholder="Member ID" required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="">Phone Number</label>
                                                <input type="text" name="contact"  class="form-control" placeholder="Member Name" required>
                                            </div>
    
                                            <div class="form-group">
                                                <label for="">Address</label>
                                                <input type="text" name="address"  class="form-control" placeholder="address Method" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">To Whom</label>
                                                <input type="text" name="visit"  class="form-control" placeholder="address ID" required>
                                            </div>
                                                                        <div class="modal-footer">
                                <button type="submit" name= "#"class="btn btn-info">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
            </div>
    </div>
    </div>
  </div>
    
</div>


<?php
include('includes/footer.php');
?>