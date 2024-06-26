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
                <li class="breadcrumb-item active">Inciting Details</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>

                <!-- /.card -->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Data Entry
                </h3>
                <br>
                <br>
                <a href="index.php" class="btn btn-primary btn-sm float-right btn-danger">Back</a>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                        <form action="config.php" method="POST">
                            <div class="modal-body">
                                            <div class="form-group" >
                                                <label for="">Name </label>
                                                <input type="text" name="name"  class="form-control" placeholder="Member Name" required>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="">Phone Nummber</label>
                                                <input type="text" name="phone"  class="form-control" placeholder="Phone Number" required>
                                            </div>
    
                                            <div class="form-group">
                                                <label for="">Adhar Number/ PAN-CARD number</label>
                                                <input type="text" name="card"  class="form-control" placeholder="Member ID" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Address</label>
                                                <input type="text" name="address"  class="form-control" placeholder="Address" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Image of Document</label>
                                                <input type="file" name="img"  class="form-control" placeholder="imageurl" >
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