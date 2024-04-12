

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
     <div class="login">
       <img src="assets/img/login-bg.png" alt="image" class="login__bg">
       
       <h1 class="login__title">Enquiry</h1>
       
       <form action="conn.php" class="login__form" method="post">
       <div class="login__inputs">
         
            <label >Society Name</label>   
            <div class="login__box">
                 <input type="text" placeholder="Society Name" required class="login__input" >    
            </div>

            <!-- <label >No.of Members</label>  
            <div class="login__box"> 
              <input type="text" placeholder="Members" required class="login__input">                  
            </div> -->

            <label >Location</label>  
            <div class="login__box">
              <input type="text" placeholder="Mumbai,pune,Satara" required class="login__input" >                  
            </div>
            
            <label >Name</label>  
            <div class="login__box">
              <input type="text" placeholder="Name" required class="login__input" >                  
            </div>

            <label >Email</label>  
            <div class="login__box">
              <input type="text" placeholder="Email Address" required class="login__input" >                  
            </div>                  
          
            <label >Contact</label>  
            <div class="login__box">
              <input type="text" placeholder="Phone no." required class="login__input" >                  
            </div>                  
                        
            </div>
            <br>
            <button type="submit" class="login__button">Submit</button>

          </form>
          </div>
   </body>
</html>