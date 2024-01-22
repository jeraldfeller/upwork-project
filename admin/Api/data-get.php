<?php
include '../session.php';
include '../Controller/DataController.php';

$dataController = new DataController();

$action = $_POST['action'];
$id = $_POST['id'];
switch ($action) {
    case 'image':
        echo json_encode(
            array(
                "success" => true,
                "src" => '/picture/'.$dataController->getUploadedImageByLoginId($id)
            )
        );
    
        break;
    case 'getComment':
        echo json_encode(
            array(
                "success" => true,
                "comment" => $dataController->getCommentByLoginId($id)
            )
        );
        break;
   
    default:
        break;
}
?>