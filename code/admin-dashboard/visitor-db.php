
<?php
session_start();
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/dbcon.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">



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
              <li class="breadcrumb-item active">Visitor Detail</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

             <!-- /.card -->
      <?php
        if(isset($_SESSION['status'])){
          echo "<h4>".$_SESSION['status']."</h4>";
          unset($_SESSION['status']);
        }
      ?>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Visitor Detail
            </h3>
        </div>
       <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Sr No.</th>
              <th>Name</th>
              <th>Date and Time</th>
              <th>Contact Number</th>
              <th>Address</th>
              <th>To whom</th>

            </tr>
            </thead>
            <tbody>

                <?php
                // Assuming you have already established a database connection

                // Make sure $conn is your mysqli connection variable
                $query = "SELECT * FROM visitor_detail"; // Replace "your_table" with your actual table name

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
                              <td><?php echo $row['name'];  ?></td>
                              <td><?php echo $row['datetime'];  ?></td>
                              <td><?php echo $row['contact'];  ?></td>
                              <td><?php echo $row['address'];  ?></td>
                              <td><?php echo $row['visit'];  ?></td>
                              
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



<?php
include('includes/footer.php');
?>