<?php


$servername = 'localhost';
$username = 'u416483588_4';
$password = 'N+oeFTVq8';
$dbname = 'u416483588_4';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>