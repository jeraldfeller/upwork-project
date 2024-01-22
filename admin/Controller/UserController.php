<?php
include_once '../config/database.php';
include_once '../Model/UserModel.php';

class UserController {
    private $userModel;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->userModel = new UserModel($db);
    }

    public function create($username, $password) {
        $this->userModel->username = $username;
        $this->userModel->password = $password;

        if ($this->userModel->createUser()) {
            return true;
        }

        return false;
    }
}
?>
