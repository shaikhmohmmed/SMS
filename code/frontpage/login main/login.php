<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "user";

session_start();

$data = mysqli_connect($host, $user, $password, $dbname);
if ($data == false) {
    die("Connection Error");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Prepared statement to prevent SQL injection
    $sql = "SELECT * FROM registration WHERE email=? AND password=?";
    $stmt = mysqli_prepare($data, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        if ($row["usertype"] == "user") {
         $_SESSION["username"]= $username;
         header("Location: /SMS/code/user-dashboard/index.php");
         exit;
         
        } elseif ($row["usertype"] == "admin") {
         header("Location: /SMS/code/admin-dashboard/index.php");
         exit;
        } 
    } else {
        echo "Email ID or Password Incorrect";
    }
}
?>






<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/styles.css">

      <title>Login form - SMS</title>

      <script type= "text/javascript">
         window.history.forward();
      </script>
   </head>
   <body>
      <div class="login">
         <img src="assets/img/login-bg.png" alt="image" class="login__bg">

         <form action="" method = "post" class="login__form">
            <h1 class="login__title">Login</h1>

            <div class="login__inputs">
               <div class="login__box">
                  <input type="email" name ="email"  placeholder="Email ID" required class="login__input">
                  <i class="ri-mail-fill"></i>
               </div>

               <div class="login__box">
                  <input type="password" name = "password" placeholder="Password" required class="login__input">
                  <i class="ri-lock-2-fill"></i>
               </div>
            </div>

            

            <button type="submit" va class="login__button">Login</button>

         </form>
      </div>
   </body>
</html>