<?php
include '../session.php';
include '../Controller/DataController.php';

$dataController = new DataController();

$action = $_POST['action'];

switch ($action) {
    case 'set':
        $loginId = (isset($_POST['loginId'])) ? $_POST['loginId'] : null;
        $commentId = (isset($_POST['commentId'])) ? $_POST['commentId'] : null;
        $comment = (isset($_POST['comment'])) ? $_POST['comment'] : null;


        if($commentId == ''){
            $dataController->createComment($loginId, $comment);
        }else{
            $dataController->updateComment($commentId, $comment);
        }

        echo json_encode(
            array(
                "success" => true
            )
        );
        break;
   
    case 'set-used':
        $id = (isset($_POST['id'])) ? $_POST['id'] : null;
        $used = (isset($_POST['used'])) ? $_POST['used'] : null;

        $dataController->updateUsed($id, $used);

        echo json_encode(
            array(
                "success" => true
            )
        );
        break;
    default:
        break;
}
?>