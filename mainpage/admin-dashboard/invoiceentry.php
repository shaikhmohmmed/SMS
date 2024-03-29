<?php
session_start();
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config.php');
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
                <li class="breadcrumb-item active">Maintance Bill</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>

                <!-- /.card -->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Maintance Bill
                </h3>
                <a href="index.php" class="btn btn-primary btn-sm float-right btn-danger">Back</a>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <form action="config.php" method="POST">
                            <div class="modal-body">
                                            <div class="form-group" >
                                                <label for="">Name</label>
                                                <input type="text" name="name"  class="form-control" placeholder="Name">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="">Flat Number</label>
                                                <input type="text" name="flatnumber"  class="form-control" placeholder="Flat Number">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Due Date</label>
                                                <input type="text" name="flatnumber"  class="form-control" placeholder="Due date">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Building Number</label>
                                                <input type="text" name="phonenumber"  class="form-control" placeholder="Building Number">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Fees</label>
                                                <input type="text" name="address"  class="form-control" placeholder="Maintance Fee">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Penalty</label>
                                                <input type="text" name="address"  class="form-control" placeholder="Penalty">
                                            </div>
                            <div class="modal-footer">
                                <button type="submit" name= "maintanceUser "class="btn btn-info">Submit</button>
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