<?php
session_start();
include 'includes/header.php';
include 'includes/topbar.php';
include 'includes/sidebar.php';
include ('config/dbcon.php');
?>
<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Receipt</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .receipt-section {
      display: none;
      border: 2px solid #007bff;
      border-radius: 10px;
      padding: 20px;
      margin-top: 20px;
      font-family: Arial, sans-serif;
    }
    .receipt-section h2 {
      color: #007bff;
      text-align: center;
      margin-bottom: 20px;
      font-size: 24px;
    }
    .receipt-details {
      font-size: 18px;
      line-height: 1.6;
    }
    .receipt-details p {
      margin-bottom: 10px;
    }
    .file-icon {
      width: 20px;
      height: 20px;
      margin-right: 5px;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <h1 class="text-center mb-4">Receipt</h1>
  <form id="receiptForm" onsubmit="event.preventDefault(); generateReceipt();" action = "#" method = "POST">
    <div class="form-group">
      <label for="memberName">Member Name:</label>
      <input type="text" class="form-control" id="memberName" name = "memberName" placeholder="Enter member name" required>
    </div>
    <div class="form-group">
      <label for="flatNumber">Flat Number:</label>
      <input type="text" class="form-control" name="flatnumber" id="flatNumber"  placeholder="Enter flat number" required>
    </div>
    <div class="form-group">
        <label for="paymentReference">Payment Reference:</label>
        <select class="form-control" name= "method" id="paymentReference" required>
          <option value="">Select payment reference</option>
          <option value="online">Online</option>
          <option value="cash">Cash</option>
        </select>
      </div>
    <div class="form-group">
      <label for="paymentProof">Payment Proof:</label>
      <input type="file" class="form-control-file" name="proof" id="paymentProof" accept="image/*,.pdf" required>
    </div>
    <div class="form-group">
        <label for="amount">Amount Paid:</label>
        <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter amount" required>
    </div>
    <button type="submit" class="btn btn-primary">Generate Receipt</button>
  </form>

  <div class="receipt-section" id="receiptSection">
    <h2>Receipt Details</h2>
    <div class="receipt-details">
      <p>Date & Time: <span id="displayDateTime"></span></p>
      <p>Member Name: <span id="displayMemberName"></span></p>
      <p>Flat Number: <span id="displayFlatNumber"></span></p>
      <p>Payment Reference: <span id="displayPaymentReference"></span></p>
      <p>Amount Paid: <span id="displayAmountPaid"></span></p>
      <p>Total Amount Due: <span id="displayTotalAmountDue">3500</span></p> <!-- Fixed total amount due -->
      <p>Payment Proof: <span id="displayPaymentProof"></span></p>
      <p>Payment Delay Charges: <span id="displayDelayCharges"></span></p>
      <p>Pending Amount: <span id="displayPendingAmount"></span></p>
    </div>
  </div>
</div>
<!-- script -->
<script>
function generateReceipt() {
    var memberName = document.getElementById('memberName').value;
    var flatNumber = document.getElementById('flatNumber').value;
    var paymentReference = document.getElementById('paymentReference').value;
    var amountPaid = parseFloat(document.getElementById('amount').value);
    var paymentProof = document.getElementById('paymentProof').files[0]; // Get the selected file
    var totalAmountDue = 3500; // Fixed total amount due
    var pendingAmount = totalAmountDue - amountPaid;
    var delayCharges = 0;

    if (pendingAmount < 0) {
        delayCharges = Math.min(Math.abs(pendingAmount) * 0.07, 70); // Example delay charges: 7% of pending amount capped at 70
        pendingAmount = 0;
    }

    var currentDateTime = new Date(); // Get the current date and time

    var formattedDate = currentDateTime.getDate() + '/' + (currentDateTime.getMonth() + 1) + '/' + currentDateTime.getFullYear(); // Format the current date in "dd/mm/yyyy" format
    var formattedTime = currentDateTime.getHours() + ':' + currentDateTime.getMinutes() + ':' + currentDateTime.getSeconds(); // Format the current time in "hh:mm:ss" format

    var formattedDateTime = formattedDate + ' ' + formattedTime; // Combine date and time

    document.getElementById('displayDateTime').innerText = formattedDateTime;
    document.getElementById('displayMemberName').innerText = memberName;
    document.getElementById('displayFlatNumber').innerText = flatNumber;
    document.getElementById('displayPaymentReference').innerText = paymentReference;
    document.getElementById('displayAmountPaid').innerText = amountPaid.toFixed();
    document.getElementById('displayTotalAmountDue').innerText = totalAmountDue.toFixed();
    document.getElementById('displayDelayCharges').innerText = delayCharges.toFixed();
    document.getElementById('displayPendingAmount').innerText = pendingAmount.toFixed();

    // Display the filename or any relevant information about the payment proof
    if (paymentProof) {
        var proofDisplay = document.getElementById('displayPaymentProof');
        var fileType = paymentProof.type;
        if (fileType.includes('image')) {
            // If it's an image file, display the image icon
            proofDisplay.innerHTML = '<img src="image-icon.png" class="file-icon" alt="Image Icon">' + paymentProof.name;
        } else if (fileType.includes('pdf')) {
            // If it's a PDF file, display the PDF icon
            proofDisplay.innerHTML = '<img src="pdf-icon.png" class="file-icon" alt="PDF Icon">' + paymentProof.name;
        } else {
            // Display the file name if it's not an image or PDF
            proofDisplay.innerText = paymentProof.name;
        }
    } else {
        document.getElementById('displayPaymentProof').innerText = "Not provided";
    }

    document.getElementById('receiptSection').style.display = "block";
    
    // Scroll to the top of the receipt section
    document.getElementById('receiptSection').scrollIntoView({ behavior: 'smooth' });
}
</script>


</body>
</html>
    <?php
include 'includes/footer.php';
?>
