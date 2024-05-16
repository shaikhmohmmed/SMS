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
                            $dash_category_query = "SELECT * from registration";
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
                            
                           
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">

                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                          Iniciting
                          <?php
                            $dash_category_query = "SELECT * from inciting_detail";
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
                            
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">

                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">
                          Payment Completed
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
                
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">

                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">
                          Visitors
                          <?php
                            $dash_category_query = "SELECT * from visitor_detail";
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
                            
                        </div>
                    </div>
                </div>

                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

    <div>
        <?php
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
        ?>
    </div>
</div>

<?php
include('includes/footer.php');
?>
