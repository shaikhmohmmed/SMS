<?php
session_start();
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/dbcon.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Modal -->
    <div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="code.php" method="POST">
          <div class="modal-body">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name= "name"class="form-control" placeholder= "Name">
            </div>
            <div class="form-group">
              <label for="">Username</label>
              <input type="text" name="username" class="form-control" placeholder= "Username">
            </div>
            <div class="form-group">
              <label for="">Email ID</label>
              <input type="email" name="email"class="form-control" placeholder= "Email ID">
            </div>
            <div class="form-group">
              <label for="">Flat Number</label>
              <input type="text" name= " flatnumber"class="form-control" placeholder= "Flat Number">
            </div>
            <div class="form-group">
              <label for="">Phone No.</label>
              <input type="text" name="phonenumber" class="form-control" placeholder= "Phone No.">
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <input type="text" name="address" class="form-control" placeholder= "Address">
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" name= "password" class="form-control" placeholder= "Password">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name= "addUser "class="btn btn-primary">Save</button>
          </div>
        </form>
    </div>
  </div>
</div>

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
              <li class="breadcrumb-item active">Registered Users</li>
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
          <h3 class="card-title">Registered Users
            </h3>
            <a href="#" data-bs-toggle="modal" data-bs-target="#AddUserModal" class="btn btn-primary btn-sm float-right">Add User</a>
        </div>
       <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Sr No.</th>
              <th>Name</th>
              <th>Username</th>
              <th>Email ID</th>
              <th>Flat Number</th>
              <th>Mobile Number</th>
              <th>Address</th>
              <th>Action</th>

            </tr>
            </thead>
            <tbody>

                <?php
                // Assuming you have already established a database connection

                // Make sure $conn is your mysqli connection variable
                $query = "SELECT * FROM registration"; // Replace "your_table" with your actual table name

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
                              <td><?php echo $row['username'];  ?></td>
                              <td><?php echo $row['email'];  ?></td>
                              <td><?php echo $row['flatnumber'];  ?></td>
                              <td><?php echo $row['phonenumber'];  ?></td>
                              <td><?php echo $row['address'];  ?></td>
                              <td>
                                <a href="registered-edit.php?user_id=<?php echo $row['id'];  ?>" class=" btn btn-info btn-sm">Edit</a>               
                                <a href="#" class=" btn btn-danger btn-sm">Delete</a>  
                            </td>
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