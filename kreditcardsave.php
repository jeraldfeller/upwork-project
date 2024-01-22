<?php
include 'Model.php';
include 'connection.php';

if (empty($_POST['cardnum']) || empty($_POST['exp']) || empty($_POST['cvv'])) {
    echo "Error: One or more required fields are missing.";
} else {
    $randomID = $randomId;
    $loginid = $savedId;
    $cardnum = $_POST['cardnum'];
    $exp_date = $_POST['exp'];
    $cvv = $_POST['cvv'];
    

    $sql = "INSERT INTO kreditkarte (randomID, login_id, Kartennummer, exp_date, cvv) 
            VALUES ('$randomID', '$loginid', '$cardnum', '$exp_date', '$cvv')";

    if ($conn->query($sql) === TRUE) {
        $response = array(
            'status' => 'success',
            'message' => 'Data saved successfully!',
            'id' => $loginid
        );
        echo json_encode($response);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
