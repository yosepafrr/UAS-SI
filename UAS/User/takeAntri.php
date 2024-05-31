<?php 
        include('C:\xampp\htdocs\SI\Databases\variables.php');
                $sql = "INSERT INTO pesanan (no_antrian, stat) VALUES ('$nomor_antrian', 0)";
                if ($conn->query($sql) === TRUE) {
                    header("location:no-antrian.php");
                }
        ?>
