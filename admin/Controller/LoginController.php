<?php
include_once '../config/database.php';
include_once '../Model/UserModel.php';

class LoginController {
    private $db;
    private $userModel;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->userModel = new UserModel($this->db);
    }

    public function login($username, $password) {
        $this->userModel->username = $username;
        $stmt = $this->userModel->login();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $row['password'])) {
                // Login success
                $_SESSION['user_id'] = $row['id'];
                return true;
            }
        }
        return false;
    }

   
}
?>
