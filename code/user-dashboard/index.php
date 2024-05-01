<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/dbcon.php');
?>



<script type= "text/javascript">
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
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Check if $id is numeric
    if(is_numeric($id)) {
        // Assuming you have already established a database connection

        // Make sure $conn is your mysqli connection variable

        // Prepare and bind the SQL query
        $query = "SELECT * FROM registration WHERE id = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "i", $id);
        
        // Execute the query
        mysqli_stmt_execute($stmt);
        
        // Get the result
        $result = mysqli_stmt_get_result($stmt);

        // Check if a row was returned
        if(mysqli_num_rows($result) > 0) {
            // Fetch the row
            $row = mysqli_fetch_assoc($result);
?>
            <table>
                <tr>
                    <td>ID: <?php echo $row['id']; ?></td>
                    <td>Name: <?php echo $row['Name']; ?></td>
                    <td>Flat Number: <?php echo $row['Flat_Number']; ?></td>
                    <td>Phone: <?php echo $row['Phone']; ?></td>
                    <td>Email: <?php echo $row['Email']; ?></td>
                </tr>
            </table>
<?php
        } else {
            // If no row was returned, display a message
            echo "No Record Found for ID: " . $id;
        }
    } else {
        echo "ID must be numeric";
    }
} else {
    echo "ID not provided in the URL";
}
?>


        <p> <br>
          Documentation:
        </p>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <!-- <img style= "width: 180px; height: 180px; border-radius: 50%; margin-top: 40px; margin-bottom: 30px; margin-left: 10px"  src="images/user.png" alt="user-image" id="profile-pic"> -->
            <input style="" type="file" name="my_image">
            <input type="submit" name="submit" value="Upload">
            <div class="row">
                <div class="card-body">

                </div>
            </div>
        </form>

       <div>
        
       </div>
        <div class="content-wrapper">



<!-- Content Header (Page header) -->

         <!-- /.card -->
  <?php
    if(isset($_SESSION['status'])){
      echo "<h4>".$_SESSION['status']."</h4>";
      unset($_SESSION['status']);
    }
  ?>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Bank Statment
        </h3>
    </div>
   <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Sr No.</th>
          <th>Date and Time</th>
          <th>Credit/Debit/Cash</th>
          <th>Amount</th>
          
        </tr>
        </thead>
        <tbody>

            <?php
            // Assuming you have already established a database connection

            // Make sure $conn is your mysqli connection variable
            $query = "SELECT * FROM user_detail"; // Replace "your_table" with your actual table name

            // Perform the query using mysqli_query with the connection object and SQL query
            $query_run = mysqli_query($conn, $query);

            // Check if the query was successful
            if ($query_run) {
                // Check if any rows were returned
                if(mysqli_num_rows($query_run) > 0) {
                    // Fetch each row and display the 'name' field
                    while($row = mysqli_fetch_assoc($query_run)) {
                        ?>
                        <tr>
                          <td><?php echo $row['id'];  ?></td>      
                          <td><?php echo $row['datetime'];  ?></td>      
                          <td><?php echo $row['payment_method'];  ?></td>      
                          <td><?php echo $row['amount'];  ?></td>      
                    </tr>
                    <?php
                    }
                } else {
                    // If no rows were returned, display a message
            ?>
                <tr>
                    <td>No Record Found</td>
                </tr>
            <?php
                }
            } else {
                // If the query failed, handle the error here
                echo "Error executing query: " . mysqli_error($conn);
            }
            ?>


        
     </tbody>
       </table> 
  </div>
</div>

</div>