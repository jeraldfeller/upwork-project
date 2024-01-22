<?php

include 'Model.php';
include 'connection.php';

$ip = getVisitorIP();

if (empty($_POST['phone'])) {
    echo "Error: One or more required fields are missing.";
} else {
    $randomID = uniqid();
    $loginid = $savedId;
    $phoneno = $_POST['phone'];

    $sql = "INSERT INTO telefonummer (randomID, login_id, Telefonummer) 
            VALUES ('$randomID', '$loginid', '$phoneno')";

    if ($conn->query($sql) === TRUE) {


        $sql_ip = "INSERT INTO ip_address (login_id, ip) 
                    VALUES ('$loginid', INET_ATON('$ip'))";

        if ($conn->query($sql_ip) !== TRUE) {
            // echo "Error: " . $sql_ip . "<br>" . $conn->error;
        }

          $response = array(
            'status' => 'success',
            'message' => 'Data saved successfully!',
        );
        echo json_encode($response);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
