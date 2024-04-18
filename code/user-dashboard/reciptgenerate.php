<?php
$conn = mysqli_connect('localhost', 'root', '','user');
mysqli_select_db($conn, 'bankstatement');
?>

<html>
<head>
    <title>Invoice Generator</title>
</head>
<body>
    select invoice:
    <form action='invoice-db.php' method='get'>
        <select name="sid">
        <?php
            $query = mysqli_query($conn, "SELECT * FROM bankstatement");
            while($invoice = mysqli_fetch_array($query)){
                echo "<option value='".$invoice['sid']."'>".$invoice['sid']."</option>";
            }
        ?>  

        </select>
        <input type="submit" value="Generate">
    </form>
</body>
</html>
