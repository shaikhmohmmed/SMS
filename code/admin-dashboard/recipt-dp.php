<?php
session_start();
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
// include('config.php');
?>
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
          <li class="breadcrumb-item active">Receipt</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Society Maintenance Receipt</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    .container {
      max-width: 500px;
      margin: 50px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
      color: #343a40;
      margin-bottom: 20px;
    }
    .form-group label {
      color: #495057;
    }
    .form-group input[type="text"],
    .form-group input[type="number"],
    .form-group select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 20px;
      border: 1px solid #ced4da;
      border-radius: 5px;
      box-sizing: border-box;
    }
    .form-group select {
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg viewBox='0 0 64 64' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M20 18l14 14 14-14z' fill='%23777'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 10px top 50%;
      background-size: 15px auto;
    }
    .form-group medium {
      color: #6c757d;
    }
    .form-group input[type="file"] {
      border: none;
    }
    button[type="submit"] {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button[type="submit"]:hover {
      background-color: #0056b3;
    }
    #receiptContainer{
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      }

  </style>
</head>
<body>
  <div class="container">
    <h2 class="text-center">Society Maintenance Receipt </h2>
    <form id="billForm" method="POST" action="generate_receipt.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="societyName">Society Name:</label>
        <input type="text" id="societyName" name="societyName" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="userName">User Name:</label>
        <input type="text" id="userName" name="userName" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="flatNumber">Flat Number:</label>
        <input type="text" id="flatNumber" name="flatNumber" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="paymentReference">Payment Reference:</label>
        <select id="paymentReference" name="paymentReference" class="form-control" required>
          <option value="" disabled selected>Select a payment reference</option>
          <option value="reference1">ONLINE</option>
          <option value="reference2">CASH</option>
        </select>
        <medium>Please provide the payment reference as proof of payment.</medium>
      </div>
      <div class="form-group">
        <label for="paymentProof">Proof of Payment (Image):</label>
        <input type="file" id="paymentProof" name="paymentProof" class="form-control" accept="image/*" required>
      </div>
      <div class="form-group">
        <label for="paidAmount">Paid Amount:</label>
        <input type="number" id="paidAmount" name="paidAmount" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Generate Receipt</button>
    </form>
  </div>
  <div id="receiptContainer"></div>
</div>
<script  src="script.js"></script>



</body>

</html>
<?php
include('includes/footer.php');
?>