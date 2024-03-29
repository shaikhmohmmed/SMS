<?php
    session_start();
    session_destroy();
 
    if (isset($_users["user"]) AND isset($_users["pass"])){
        setusers("user", '', time() - (3600));
        setusers("pass", '', time() - (3600));
    }
 
    header('location:index.php');
 
?>
