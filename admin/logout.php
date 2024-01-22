<?php
include 'session.php';
// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to login page or home page
header("Location: /admin"); // Adjust the redirection location as needed
exit;
?>