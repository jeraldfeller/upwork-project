<?php
include '../session.php';
include '../Controller/DataController.php';

$dataController = new DataController();

$id = $_POST['id'];

$dataController->deleteDataById($id);
?>