<?php
require('C:\xampp\htdocs\SMS\code\fpdf\fpdf.php');

// Database connection 
// $conn = mysqli_connect('localhost', 'root', '');
// mysqli_select_db($conn, 'user');

// // Check if 'sid' parameter is set
// if(isset($_GET['sid'])) {
//     // Escape the input to prevent SQL injection
//     $sid = mysqli_real_escape_string($conn, $_GET['sid']);
    
//     // Query database
//     $query = mysqli_query($conn, "SELECT * FROM bankstatement
//         INNER JOIN registration using (id)
//         WHERE sid = '$sid'");
    
//     // Check if query executed successfully
//     if($query) {
//         // Fetch data
//         $invoice = mysqli_fetch_array($query);
        
//         // Proceed with PDF generation...
//     } else {
//         // Handle query execution failure
//         echo "Error: " . mysqli_error($conn);
//     }
// } else {
//     // Handle 'sid' parameter not being set
//     echo "Error: 'sid' parameter is not set";
// }


$pdf = new FPDF('P', 'mm', 'A4');

$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 14);

$pdf->Cell(130, 5, 'GEMUL APPLICATION.CO',0,0);
$pdf->Cell(59, 5, 'Invoice',0,1);

$pdf->SetFont('Arial', '',12);

$pdf->Cell(130, 5, '[Street Address]',0,0 );
$pdf->Cell(59, 5, '',0,1);

$pdf->Cell(130, 5, '[City, Country, ZIP]', 0,0);
$pdf->Cell(25, 5, 'Date', 0,0);
$pdf->Cell(34, 5, '[dd/mm/yy]', 0,1);

$pdf->Cell(130, 5, 'Phone [+91 -------]', 0,0);
$pdf->Cell(25, 5, 'Invoice #', 0,0);
$pdf->Cell(34, 5, '[123456]', 0,1);

$pdf->Cell(130, 5, '[City, Country, ZIP]', 0,0);
$pdf->Cell(25, 5, 'Date', 0,0);
$pdf->Cell(34, 5, '[dd/mm/yy]', 0,1);

$pdf->Cell(25, 5, 'Customer ID',0,0);
$pdf->Cell(34, 5, '[12345]',0,1);

$pdf->Cell(100, 5, 'Bill to', 0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,'[Name]',0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,'[Company Name]',0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,'[Address]',0,1);

$pdf->Output();
?>