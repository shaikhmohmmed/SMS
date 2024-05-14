
<?php
 
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

         <form action="" method = "post" class="login__form" autocomplete="off">
            <h1 class="login__title">Login</h1>

            <div class="login__inputs">
               <div class="login__box">
                  <input type="email" name ="email"  placeholder="Email ID" required class="login__input">
                  <i class="ri-mail-fill"></i>
               </div>

               <div class="login__box">
                  <input type="password" name = "password" placeholder="Password" required   class="login__input">
                  <i class="ri-lock-2-fill"></i>
               </div>
            </div>

            <input type="submit" class="login__button" name="login" value="Login" >
            

         </form>
      </div>
   </body>
</html>

<?php
    include("dbcon.php");
    
    if(isset($_POST["login"])){
        $email =  $_POST['email'];   
        $password =  $_POST['password'];   

        $query = "SELECT * FROM registration WHERE email = '$email' && password = '$password' ";
        $data = mysqli_query($conn, $query);

        $total = mysqli_num_rows($data);
        echo $total;
    }
?>