<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>View</title>
</head>
<body>
      <a href="index.php">&#8592;</a>
      <?php
        $sql = " SELECT * FROM images ORDER BY id DESC";
        $res = mysqli_query($conn,  $sql);

        if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) {  ?>
        
            <div class="alb">
            <img src="images/<?=$images['img_url']?>" >
        </div>

  <?php } }?>        
</body>
</html>