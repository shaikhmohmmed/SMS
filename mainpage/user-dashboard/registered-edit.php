<?php
session_start();
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/dbcon.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Edit-Registered Users</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>

                <!-- /.card -->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Edit-Registered Users
                </h3>
                <a href="registered.php" class="btn btn-primary btn-sm float-right btn-danger">Back</a>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <form action="code.php" method="POST">
                            <div class="modal-body">
                                    <?php
                                    if(isset($_GET['user_id'])) {
                                        $user_id = $_GET['user_id'];
                                        $query = "SELECT * FROM registration WHERE id='$user_id' LIMIT 1";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0) {
                                            $row = mysqli_fetch_assoc($query_run); // Fetch the row
                                    ?>
                                    <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                                            <div class="form-group">
                                                <label for="">Name</label>
                                                <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Username</label>
                                                <input type="text" name="username" value="<?php echo $row['username']; ?>" class="form-control" placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Email ID</label>
                                                <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" placeholder="Email ID">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Flat Number</label>
                                                <input type="text" name="flatnumber" value="<?php echo $row['flatnumber']; ?>" class="form-control" placeholder="Flat Number">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Phone No.</label>
                                                <input type="text" name="phonenumber" value="<?php echo $row['phonenumber']; ?>" class="form-control" placeholder="Phone No.">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Address</label>
                                                <input type="text" name="address" value="<?php echo $row['address']; ?>" class="form-control" placeholder="Address">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input type="password" name="password" value="<?php echo $row['password']; ?>" class="form-control" placeholder="Password">
                                            </div>
                                    <?php
                                        } else {
                                            echo "<h4>No Record Found!</h4>";
                                        }
                                    }
                                    ?>

                            <div class="modal-footer">
                                <button type="submit" name= "updateUser "class="btn btn-info">Update</button>
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