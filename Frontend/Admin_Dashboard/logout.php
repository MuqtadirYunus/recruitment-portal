<?php
// Start the session
session_start();

// Destroy all session data
session_unset();   // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to the login page
header("Location: ../admin_Dashboard/auth.php");
exit();