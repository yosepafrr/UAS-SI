<?php
include('C:\xampp\htdocs\SI\Databases\variables.php');
if ($status == 1) {
    $sql = "DELETE from pesanan ORDER BY id DESC LIMIT 1;";
    if ($conn->query($sql) === TRUE) {
        header("location:kitchen.php");
    }
}
