<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "si_uas";


    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        echo"Error: ". $conn->connect_error;
    }
?>