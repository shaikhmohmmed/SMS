<?php
session_start();
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
// include('config.php');
?>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $userName = $_POST["userName"];
  $flatNumber = $_POST["flatNumber"];
  $maintenanceCharge = 5000; // Fixed maintenance charge
  
  // Payment verification
  $paymentReference = $_POST["paymentReference"];
  $validPaymentReferences = array("123456", "789012", "345678"); // Example valid payment references
  
  if (!in_array($paymentReference, $validPaymentReferences)) {
    die("Invalid payment reference. Please verify your payment and try again.");
  }
  
  // Fetch previous dues from file or database (for demonstration, let's assume it's fetched from a file)
  $previousDuesFile = "previous_dues.txt";
  $previousDues = 0;
  if (file_exists($previousDuesFile)) {
    $previousDues = floatval(file_get_contents($previousDuesFile));
  }
  
  // Deduct any extra payment from previous dues
  $paidAmount = $maintenanceCharge + $previousDues; // Add previous dues to paid amount
  
  // Calculate penalty if paid after deadline (e.g., 10% of maintenance charge per day)
  $deadlineDate = strtotime("2024-05-01"); // Example deadline date
  $currentDate = time();
  $penalty = 0;
  if ($currentDate > $deadlineDate) {
    $daysLate = ceil(($currentDate - $deadlineDate) / (60 * 60 * 24));
    $penalty = $maintenanceCharge * 0.01 * $daysLate; // 2% penalty per day for late payment
  }

  $totalAmountDue = $maintenanceCharge + $penalty;
  $dues = $totalAmountDue - $paidAmount;
  
  // Check if the user has paid the full amount
  if ($dues > 0) {
    // Calculate deadline for next month
    $nextMonthDeadline = strtotime("+1 month", $deadlineDate);
    $formattedNextMonthDeadline = date('d-m-Y', $nextMonthDeadline);
    
    // Generate reminder message
    $reminderMsg = "Reminder: You have pending dues of ₹$dues. Please make the payment by $formattedNextMonthDeadline to avoid penalties.";
  }
  
  // Save remaining dues for next month
  if ($dues < 0) {
    $remainingDues = abs($dues);
    file_put_contents($previousDuesFile, $remainingDues);
  } else {
    // If there are no dues, clear the previous dues file
    file_put_contents($previousDuesFile, "");
  }
  
  // Output receipt as PDF
  require('fpdf/fpdf.php');

  class PDF extends FPDF {
    function Header() {
      $this->SetFont('Arial','B',15);
      $this->Cell(0,10,'Society Maintenance Receipt',0,1,'C');
      $this->Ln(10);
    }

    function Footer() {
      $this->SetY(-15);
      $this->SetFont('Arial','I',8);
      $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
  }

  $pdf = new PDF();
  $pdf->AliasNbPages();
  $pdf->AddPage();
  $pdf->SetFont('Arial','',12);
  $pdf->Cell(0,10,"User Name: $userName",0,1);
  $pdf->Cell(0,10,"Flat Number: $flatNumber",0,1);
  $pdf->Cell(0,10,"Date and Time: ".date('d-m-Y H:i:s'),0,1);
  $pdf->Cell(0,10,"Maintenance Charge: ₹$maintenanceCharge",0,1);
  if ($penalty > 0) {
    $pdf->Cell(0,10,"Late Payment Penalty: ₹$penalty",0,1);
  }
  $pdf->Cell(0,10,"Total Amount Due: ₹$totalAmountDue",0,1);
  $pdf->Cell(0,10,"Paid Amount: ₹$paidAmount",0,1);
  if ($dues > 0) {
    $pdf->Cell(0,10,"Dues: ₹$dues",0,1);
    // Add reminder message to receipt
    $pdf->SetTextColor(255, 0, 0); // Set text color to red
    $pdf->Cell(0,10,$reminderMsg,0,1);
    $pdf->SetTextColor(0, 0, 0); // Reset text color
  } else {
    $pdf->Cell(0,10,"No Dues",0,1);
  }

  $pdf->Output('D', "Receipt_$flatNumber.pdf");
}
?>

<?php
include('includes/footer.php');
?>