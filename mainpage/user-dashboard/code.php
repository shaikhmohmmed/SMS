
<?php
  session_start();
  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $flatnumber = $_POST['flatnumber'];
  $phonenumber = $_POST['phonenumber'];
  $address = $_POST['address'];
  $password = $_POST['password'];

  if(!empty($name) || !empty($username) || !empty($email) || !empty($flatnumber) ||!empty($phonenumber) ||!empty($address) ||!empty($password) )
  {
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "user";

    //create connection
    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

    if(mysqli_connect_error()){
      die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
    }else{
      $SELECT = "SELECT email From registration Where email = ? Limit 1 ";
      $INSERT = "INSERT Into registration (name, username, email, flatnumber, phonenumber, address, password) values(? ,? ,? ,?, ?, ?, ?)";
      
      //Prepare statement
      $stmt = $conn->prepare($SELECT);
      $stmt->bind_param("s",$email);
      $stmt->execute();
      $stmt->bind_result($email);
      $stmt->store_result();
      $rnum = $stmt->num_rows;

      if($rnum==0){
        $stmt->close();
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sssiiss",$name,$username,$email,$flatnumber,$phonenumber,$address,$password);
        $stmt->execute();
        $_SESSION['status'] = "User Added Successfully"; 
        header("Location: registered.php");
      }else{
        $_SESSION['status'] = "User Registration Failed"; 
        header("Location: registered.php");
      }
      $stmt->close();
      $conn->close();
    }
  }else{
    echo "All field are required";
    die();
  }


// UPDATE USER CONNECTION{NOT WORKING}

if(isset($_POST['updateUser']))
{
  $user_id = $_POST['name'];
  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $flatnumber = $_POST['flatnumber'];
  $phonenumber = $_POST['phonenumber'];
  $address = $_POST['address'];
  $password = $_POST['password'];


  

  $query = "UPDATE registration SET name='$name', username='$username', email='$email', flatnumber= '$flatnumber', phonenumber= '$phonenumber', address= '$address', password= '$password' WHERE id='user_id' ";   
  $query_run = mysqli_query($conn, $query);

  if($query_run){
    $_SESSION['status'] = "User Updated  Successfully"; 
    header("Location: registered.php");
  }else{
    $_SESSION['status'] = "User Updating Failed"; 
    header("Location: registered.php");
  }
}

  ?>


