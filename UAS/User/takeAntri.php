<?php 
        include('C:\xampp\htdocs\SI\Databases\variables.php');
                $sql = "INSERT INTO pesanan (stat, nomor_antrian) VALUES (0, $nomor_antrian)";
                if ($conn->query($sql) === TRUE) {
                header("location:no-antrian.php");
                }
        ?>
