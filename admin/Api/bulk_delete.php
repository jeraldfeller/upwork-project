<?php
include '../session.php';
include '../Controller/DataController.php';

$dataController = new DataController();

$ids = $_POST['selected'];

$dataController->bulkDeleteByIds($ids);
?>