<?php
include '../session.php';
include '../Controller/LoginController.php';
$loginController = new LoginController();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($loginController->login($username, $password)) {
        // Login success
        echo json_encode(array('success' => 1));
       
    } else {
        // Login failed
        echo json_encode(array('success' => 0));
        
    }
} else {
    // Login failed
    echo json_encode(array('success' => 0));
  
}
?>