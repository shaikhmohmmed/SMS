

<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/styles.css">

      <title>Enquiry form - SMS</title>
   </head>
   <body>


      <?php
        if(!empty($_POST["send"])){
          $sname = $_POST["sname"];
          $location = $_POST["location"];
          $name = $_POST["name"];
          $email = $_POST["email"];
          $contact = $_POST["contact"];
          $toEmail = $_POST["societysystem03@gmail.com"];
          
          $mailHeader = "Society Name: " . $sname.
          "\r \n Name: " . $name .
          "\r \n Email: " . $email .
          "\r \n Contact Number: " . $contact .
          "\r \n Location: " . $location . "\r\n";

          if(mail($toEmail, $sname , $mailHeader)){
            $message = "Your Information is recieved successfully .";
          }

        }
      ?>

     <div class="login">
       <img src="assets/img/login-bg.png" alt="image" class="login__bg">
       
       <h1 class="login__title">Enquiry</h1>
       
       <form action="conn.php" class="login__form" method="post">
       <div class="login__inputs">
         
            <label >Society Name</label>   
            <div class="login__box">
                 <input type="text" name="sname" placeholder="Society Name" required class="login__input" >    
            </div>


            <label >Location</label>  
            <div class="login__box">
              <input type="text" name="location" placeholder="Mumbai,pune,Satara" required class="login__input" >                  
            </div>
            
            <label >Name</label>  
            <div class="login__box">
              <input type="text" name="name" placeholder="Name" required class="login__input" >                  
            </div>

            <label >Email</label>  
            <div class="login__box">
              <input type="text" name="email" placeholder="Email Address" required class="login__input" >                  
            </div>                  
          
            <label >Contact</label>  
            <div class="login__box">
              <input type="text" name="contact" placeholder="Phone no." required class="login__input" >                  
            </div>                  
                        
            </div>
            <br>
            <input type="submit" name ="send" value="Submit">
            <?php if(!empty($message)){?>
              <strong><?php echo $message ?></strong>
              <?php } ?>
          </form>
          </div>
   </body>
</html>