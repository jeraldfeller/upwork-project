<?php 
include '../session.php';
include '../Controller/DataController.php';

$dataController = new DataController();

$ids = (isset($_POST['selected'])) ? $_POST['selected'] : null;
$used = (isset($_POST['used'])) ? $_POST['used'] : null;

$dataController->bulkUpdateUsed($ids, $used);

echo json_encode(
            array(
                "success" => true
            )
);
?>