<?php
include 'includes/header.php';
include 'includes/sidebar.php';
include 'includes/topbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        .receiptContainer {
            padding-left: 40px;
        }
    </style>
</head>
<body>
    <div style="margin-left: 300px;" id="receiptContainer"></div>
    <script>
        // Retrieving table content from sessionStorage
        let tableContent = sessionStorage.getItem('tableContent');
        
        // Displaying table content
        document.getElementById('receiptContainer').innerHTML = tableContent;
    </script>
</body>
</html>

<?php
include 'includes/footer.php';
?>
