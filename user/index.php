<?php
    session_start();
    include('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Using Cookie with Logout</title>
</head>
<body>
    <h2>Login Form</h2>
    <form method="POST" action="success.php">
    <label>Username:</label> <input type="text" value="<?php if (isset($_users["user"])){echo $_users["user"];}?>" name="username">
    <label>Password:</label> <input type="password" value="<?php if (isset($_users["pass"])){echo $_users["pass"];}?>" name="password"><br><br>
    <input type="checkbox" name="remember"> Remember me <br><br>
    <input type="submit" value="Login" name="login">
    </form>
 
    <span>
    <?php
        if (isset($_SESSION['message'])){
            echo $_SESSION['message'];
        }
        unset($_SESSION['message']);
    ?>
</span>
</body>
</html>
