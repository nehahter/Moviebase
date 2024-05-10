<?php
session_start();
session_unset(); // Remove all session variables
session_destroy(); // Destroy the session
// On your logout logic
echo "<script>localStorage.removeItem('userLoggedIn');</script>";

header("Location: index.php"); // Redirect to the home page
exit;
?>
