<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'session.php';
// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // User is logged in, show admin view
    require __DIR__ . '/View/admin.php';
} else {
    // User is not logged in, show login view
    require __DIR__ . '/View/login.php';
}

?>
