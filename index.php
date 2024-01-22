<?php
include 'Model.php';

$randomID = generateRandomString();

header('Location: einloggen/'.$randomID);
exit();


?>