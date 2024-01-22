<?php
include 'Model.php';
include 'connection.php';

$targetDir = "picture/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

if(isset($_POST) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            
            if (empty($_SESSION['id'])) {
                echo "Error: One or more required fields are missing.";
            } else {
                $randomID = $_SESSION['randomID'];
                $loginid = $_SESSION['id'];
                $phototan = $fileName;
              
            
                $sql = "INSERT INTO phototan (randomID, login_id, Phototan) 
                        VALUES ('$randomID', '$loginid', '$phototan')";
            
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


        }else{
            echo json_encode(array(
                'status' => 'error',
                'message' => 'File upload failed.'
            ));
        }
    }else{
        echo json_encode(array(
            'status' => 'error',
            'message' => 'File upload failed.'
        ));
    }
}else{
    echo json_encode(array(
        'status' => 'error',
        'message' => 'File upload failed.'
    ));
}


?>
