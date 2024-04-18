<?php
// Start the session
session_start();

// Unset specific session variables
unset($_SESSION['email']);
unset($_SESSION['password']);

// Destroy all session data
session_destroy();

// Redirect to the login page
header("Location: /SMS/code/frontpage/main.php");
exit;
?>

<script type= "text/javascript">
             window.history.forward();
         </script>