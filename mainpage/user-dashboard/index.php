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
       <!-- /.card-header -->
       <img style= "width: 200px; height: auto"  src="images/sample.jpg" alt="user-image">
        <div class="card-body">
          <h4>Name: Mohammad Shaikh</h4>
          <h4>Details</h4>

      </div>
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
              <th>Sr No.</th>
              <th>Name</th>
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





