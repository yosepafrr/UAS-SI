<?php
include('C:\xampp\htdocs\SI\Databases\variables.php');
    $sql = "UPDATE pesanan SET stat = 1 ORDER BY id ASC LIMIT 1";
    if ($conn->query($sql) === TRUE) {
        header("location:kitchen.php");
    }

