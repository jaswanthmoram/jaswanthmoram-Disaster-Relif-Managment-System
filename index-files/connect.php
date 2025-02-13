<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "disastermanagement";
    $conn = new mysqli($host,$user,$pass,$db);
    if($conn->connect_error) {
        echo "Failed to Connect Database".$conn->connect_error;
    }
?>