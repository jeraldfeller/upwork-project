<?php
include '../session.php';
include_once '../config/database.php';
include_once '../Model/UserModel.php'; // User model

$database = new Database();
$db = $database->getConnection();

$user = new UserModel($db);

// Check if the form is submitted
if (isset($_POST['currentPassword'])) {
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    
    // Validate passwords and check if they match
    if (empty($currentPassword) || empty($newPassword) || empty($confirmPassword)) {
        echo json_encode(array("error" => "Please fill all the fields."));
        exit();
    }

    if ($newPassword !== $confirmPassword) {
        echo json_encode(array("error" => "Passwords do not match."));
        exit();
    }
    // Check current password
    if (!$user->checkPassword($_SESSION['user_id'], $currentPassword)) {
        echo json_encode(array("error" => "Current password is incorrect."));
        exit();
    }

    // Update password
    if ($user->updatePassword($_SESSION['user_id'], $newPassword)) {
        echo json_encode(array("success" => "Password changed successfully."));
    } else {
        echo json_encode(array("error" => "Something went wrong. Please try again."));
    }
}
?>
