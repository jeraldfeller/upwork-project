<?php
class UserModel {
    private $conn;
    private $table_name = "admin_login";

    public $id;
    public $username;
    public $password;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Method to check user login
    public function login() {
        $query = "SELECT id, username, password FROM " . $this->table_name . " WHERE username = :username";
        $stmt = $this->conn->prepare($query);

        $this->username = htmlspecialchars(strip_tags($this->username));

        $stmt->bindParam(':username', $this->username);

        $stmt->execute();
        return $stmt;
    }

    // Create new user
    public function createUser() {
        $query = "INSERT INTO " . $this->table_name . " SET username=:username, password=:password";

        $stmt = $this->conn->prepare($query);

        // sanitize
        $this->username = htmlspecialchars(strip_tags($this->username));
        $this->password = htmlspecialchars(strip_tags($this->password));

        $hashed_password = password_hash($this->password, PASSWORD_DEFAULT);

        // bind values
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":password", $hashed_password);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    // Method to check the current password
    public function checkPassword($userId, $password) {
        $query = "SELECT password FROM " . $this->table_name . " WHERE id = :userId";

        $stmt = $this->conn->prepare($query);

        // Binding parameters
        $stmt->bindParam(':userId', $userId);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verify the password
            return password_verify($password, $row['password']);
        } else {
            return false;
        }
    }

    // Method to update the password
    public function updatePassword($userId, $newPassword) {
        $query = "UPDATE " . $this->table_name . " SET password = :newPassword WHERE id = :userId";

        $stmt = $this->conn->prepare($query);

        // Hash the new password
        $newHashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // Binding parameters
        $stmt->bindParam(':newPassword', $newHashedPassword);
        $stmt->bindParam(':userId', $userId);

        // Execute the query
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
?>
