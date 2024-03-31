
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap Links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <!-- Css -->
  <link rel="stylesheet" href="index.css">

  <!-- Boxicon -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  <!-- Googlefont -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  

  <title>Society Management System</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <img class="logo" src="images/logo.jpg" alt="logo">
        <a class="navbar-brand" href="#">Society Management System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
           
            <li class="nav-item dropdown">
              <a class="nav-link toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Discover</a>
              <ul class="dropdown-menu logo-s">
                <li><a class="dropdown-item" href="#"><box-icon  name='facebook-square' type='logo' color="blue"></box-icon></a></li>
                <li><a class="dropdown-item" href="#"><box-icon name='gmail' type='logo' color="red"></box-icon></a></li>
                <li><a class="dropdown-item" href="#"><box-icon name='youtube' type='logo' color="red"></box-icon></a></li>
                <li><a class="dropdown-item" href="#"><box-icon name='instagram' type='logo' color="violet"></box-icon></a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Feedback</a>
              <ul class="dropdown-menu">
                <li>
                  <label class="feedback"> Write your feedback</label>
                   <input type="feedback" placeholder="feedback"> 
                 </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Working</a>
                <ul class="dropdown-menu">
                  <p class="dropdown-item"> how its work</p>
                </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <box-icon name='world'></box-icon>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">English</a></li>
                <li><a class="dropdown-item" href="#">हिन्दी</a></li>
                <li><a class="dropdown-item" href="#">मराठी</a></li>
              </ul>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
  </header>
  
  
 



  <div class="row">
    <div class="col-xl-6 col-lg-6">
          <h1 class="heading">Navigating the Dyanamic to Modern Society.</h1>
          <form method="POST" action="#">
          <a href="#" class="btn btn-dark btn-md download-button" id="1-button" style = "margin-left: 400px">Login</a>
            <div class="popup">
              <div class="popup-content">
                <p class="close">x</p>
                <h2 class="log">Login</h2>
                <input  class="input" type="text" name="email" placeholder="Email ID" required values = "<?php if (isset($_user["registration"])){echo $_user["registration"];}?>" name="email">
                <input class="input" type="password" name="password" placeholder="Password" required values = "<?php if (isset($_user["registration"])){echo $_user["registration"];}?>" name="password">
                <br><br>
                <button style = "margin-left: 170px" type="submit" name= "submit">Login</button>
                </form>  
                <br>               
                <a href="#" class="signup" id="3-button"> Signup</a>
                
                <!-- Signup-popup -->
                <form action="config1.php" method="post">
                <div class="signup-popup">
                  <div class="signup-popup-content">
                    <p class="signup-close">x</p>
                    <h2 class="signup-log">Register</h2>
                    <input class="signup-in" type="text" placeholder="Name" name="name" required>
                    <input class="signup-in" type="text" placeholder="Username" name="username" required>
                    <input class="signup-in" type="text" placeholder="email" name="email" required>
                    <input class="signup-in" type="text" placeholder="Flat-Number" name="flatnumber" required>
                    <input class="signup-in" type="text" placeholder="Mobile Number" name="phonenumber" required>
                    <input class="signup-in" type="text" placeholder="Address" name="address" required>
                    <input class="signup-in" type="password" placeholder="password" name="password" required>
                    <input type="submit" class="button">
                  </div>
                </div>
              </form>
                <script>
                  document.getElementById("3-button").addEventListener("click", function(){
                    document.querySelector(".signup-popup").style.display = "flex";
                  })
    
                  
                  document.querySelector(".signup-close").addEventListener("click", function(){
                    document.querySelector(".signup-popup").style.display = "none";
                  })
                </script>

              </div>
            </div> 

            <!-- Script for login page -->
            <script>
              document.getElementById("1-button").addEventListener("click", function(){
                document.querySelector(".popup").style.display = "flex";
              })

              document.querySelector(".close").addEventListener("click", function(){
                document.querySelector(".popup").style.display = "none";
              })
            </script>
            <br><br>
          <form method = "post" autocomplete = "off" action="admin-dashboard/main.php">
          <a href="#" class="btn btn-light btn-md download-button" id="2-button" style = "margin-left: 400px">Admin Login</a>
            <div class="admin-popup">
              <div class="admin-popup-content">
                <p class="admin-close">x</p>
                <h2 class="admin-log">Login</h2>
                <input class="admin-in" type="text" placeholder="Email Id" values="<?php if (isset($_user["registration"])){echo $_user["registration"];}?>" name="email" required>
                <input class="admin-in" type="password" placeholder="Password" values="<?php if (isset($_user["registration"])){echo $_user["registration"];}?>" name="password" required>
                <br><br>
                <button style = "margin-left: 170px" type="submit" name= "submit">Login</button>
              </div>
            </div>
            </form>
            <!-- Script for Admin-log-->
            <script>
                document.getElementById("2-button").addEventListener("click", function(){
                  document.querySelector(".admin-popup").style.display = "flex";
                })

               document.querySelector(".admin-close").addEventListener("click", function(){
                document.querySelector(".admin-popup").style.display = "none";
               })
            </script>

          </div>
      <div class="col-xl-6 col-lg-6">
          <img class="img" src="images/heading.jpg" alt="image">
      </div>
    </div>
  </div>

<section class="container-fluid">
  <h1 class="s1">Services</h1>
  <div class="row">
    <div class="col-xl-6 col-lg-6">
      <img class="img-test" src="images/security.jpg" alt="soc-1">
    </div>
    <div class="col-xl-6 col-lg-6">
      <h2 class="s2">Security</h2>
      <p class="s3">Security and there requirements related to security. Hey write more</p>
    </div>
  </div>

  <div class="row">
    <div class="col-xl-6 col-lg-6" id="s4">
      <h2>Trust</h2>
      <p class="s3">Gain the trust here</p>
    </div>
    <div class="col-xl-6 col-lg-6">
      <img class="img-test2" src="images/trust.jpg" alt="hap-soc">
    </div>
  </div>
</section>


<section class="container-bottom">
  <div class="footer">
    <h2  class="s1">Contact</h2>
    <p class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3802.0372098938565!2d73.91880077586909!3d17.648396595232228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc23c106163b291%3A0xb12ae7cee0fc091a!2sDnyanshree%20Institute%20of%20Engineering%20and%20Technology!5e0!3m2!1sen!2sin!4v1705488609134!5m2!1sen!2sin" width="1903" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
  </div>
</section>


</body>


</html>

