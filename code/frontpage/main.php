<?php
session_start(); // Starting the session

include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/dbcon.php'); // Make sure this file establishes a database connection

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
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-xl-3 col-md-6">

                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                            New User
                            <?php
                            $dash_category_query = "SELECT * from regis";
                            $dash_category_query_run = mysqli_query($conn, $dash_category_query);
                            if ($dash_category_query_run) {
                                $category_total = mysqli_num_rows($dash_category_query_run);
                                echo '<h4 class="mb-0">' . $category_total . '</h4>';
                            } else {
                                echo '<h4 class="mb-0"> No Data </h4>';
                            }
                            ?>


                            <!-- <h4 class="mb-0">2</h4> -->
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">

                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                          Inciting
                          <?php
                            $dash_category_query = "SELECT * from inciting";
                            $dash_category_query_run = mysqli_query($conn, $dash_category_query);
                            if ($dash_category_query_run) {
                                $category_total = mysqli_num_rows($dash_category_query_run);
                                echo '<h4 class="mb-0">' . $category_total . '</h4>';
                            } else {
                                echo '<h4 class="mb-0"> No Data </h4>';
                            }
                            ?>

                            <!-- <h4 class="mb-0"></h4> -->
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">

                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">
                          User Registrations
                          <?php
                            $dash_category_query = "SELECT * from bankstatement";
                            $dash_category_query_run = mysqli_query($conn, $dash_category_query);
                            if ($dash_category_query_run) {
                                $category_total = mysqli_num_rows($dash_category_query_run);
                                echo '<h4 class="mb-0">' . $category_total . '</h4>';
                            } else {
                                echo '<h4 class="mb-0"> No Data </h4>';
                            }
                            ?>

                            <!-- <h4 class="mb-0">2</h4> -->
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">

                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">
                          Visiters
                          <?php
                            $dash_category_query = "SELECT * from visitors";
                            $dash_category_query_run = mysqli_query($conn, $dash_category_query);
                            if ($dash_category_query_run) {
                                $category_total = mysqli_num_rows($dash_category_query_run);
                                echo '<h4 class="mb-0">' . $category_total . '</h4>';
                            } else {
                                echo '<h4 class="mb-0"> No Data </h4>';
                            }
                            ?>

                            <!-- <h4 class="mb-0">2</h4> -->
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <div>
        <div class="adminprofile">
            <p>
                Name: Mohammad Shaikh
                <br>
                Role: Society Admin
                <br>
                Documentation:
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload File" name="submit">
                </form>
            </p>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>
