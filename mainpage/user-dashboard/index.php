<?php
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style = "height: 100px;">
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
        <h3 class="card-title">User Data
          </h3>
        </div>
        <!-- /upload image -->
        <form action = "upload.php" method= "POST" enctype = "multipart/form-data">
      <!-- <img style= "width: 180px; height: 180px; border-radius: 50%; margin-top: 40px; margin-bottom: 30px; margin-left: 10px"  src="images/user.png" alt="user-image" id="profile-pic"> -->
      <input  style= "" type="file"  name = "my_image">
      <input type="submit" name = "submit" value = "Upload">
      <div class = "row"> 
       <div class="card-body">
        <div class="col-md-6">
        <h6>Name: Mohammad Shaikh</h6> 
        
          <h6>Flat Number: A103</h6>
          <h6>Building Number: A</h6>
          <h6>Phone Number: 9028790609</h6>
          </div>
          <div class="col-md-6 ">
            <h6>Documentation:
            <input type="img"  >

            </h6>
          </div>
          </div>
      </div>
      </form>


      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Maintance Fee Data
            </h3>
        </div>
       <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Name</th>
              <th>Number of Family</th>
              <th>Flat Number</th>
              <th>Building Number</th>
              <th>Bill</th>

            </tr>
            </thead>
            <tbody>

            
                            <tr>
                              <td>1</td>
                              <td>mohammad </td>
                              <td>A103</td>
                              <td>2</td>
                              <td>
                                <a href="recipt.php?user_id=<?php echo $row['id'];  ?>" class=" btn btn-info btn-sm">View</a>                 
                            </td>
                        </tr>
                  
                    <tr>
                        <td>No Record Found</td>
                    </tr>          
         </tbody>
           </table> 
      </div>
  </div>
    
</div>

  </div>
    
</div>
</div>





