<?php
include '../session.php';
include '../Controller/DataController.php';

$dataController = new DataController();

$start = $_GET['start'];
$length = $_GET['length'];
$order = $_GET['order'][0]['dir'];
$used = $_GET['used'];
$data = $dataController->getAllData($start, $length, $order, $used);
$totalData = $dataController->getDataCount($used);

echo json_encode(
    array(
        "draw" => intval($_GET['draw']),
        "recordsTotal" => (int) $totalData,
        "recordsFiltered" => (int) $totalData,
        "data" => $data
    )
);
?>