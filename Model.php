<?php
ob_start();
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
            $baseUrl = "https://";   
        else  
        $baseUrl = "http://";   
        $baseUrl.= $_SERVER['HTTP_HOST'];   


    
        if(isset($_SESSION['id'])){
            $savedId = $_SESSION['id'];
        }else{
            $savedId = 0;
        }
       
        if(isset($_SESSION['randomID'])){
            $randomId = $_SESSION['randomID'];
        }else{
            $randomId = 0;
        }



 $ipEntryCount = checkIpCount(getVisitorIP());

function generateRandomString($length = 13) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function getVisitorIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function checkIpCount($ip) {
    include 'connection.php';
    $sql = "SELECT COUNT(*) as ipCount FROM ip_address WHERE ip = INET_ATON('$ip')";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['ipCount'];
    } else {
        return 0;
    }
}

?>