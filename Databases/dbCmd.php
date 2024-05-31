<?php
include("koneksi.inc.php");

// $sql = "CREATE TABLE pesanan(
//         id INT (4) AUTO_INCREMENT PRIMARY KEY,
//         no_antrian INT NOT NULL,
//         stat SMALLINT DEFAULT 0
//     )";
//         // $sql =  "ALTER TABLE pesanan CHANGE COLUMN stat SMALLINT DEFAULT 0";
//         // $sql = "DROP TABLE pesanan;";
            //     if ($conn->query($sql) === TRUE) {
            //     echo "Tabel berhasil dibuat!";
            // } else {
            //     echo "Error: ". $conn->error;
            // }

            // $sql = "ALTER TABLE pesanan ADD COLUMN jml_pesanan SMALLINT default 1";
            // if ($conn->query($sql) === TRUE) {
            //     echo "Tabel berhasil dibuat!";
            // } else {
            //     echo "Error: ". $conn->error;
            // }

            // $nomor_antrian = isset($_POST['nomor_antrian']) ? intval($_POST['nomor_antrian']) : 0;
            // $jumlah_pesanan = isset($_POST['jumlah_pesanan']) ? intval($_POST['jumlah_pesanan']) : 0;

            // $sql = "INSERT INTO pesanan (no_antrian, jml_pesanan, stat) VALUES ($nomor_antrian, $jumlah_pesanan, 0)";
            // if ($conn->query($sql) === TRUE) {
            //     echo "Data berhasil ditambahkan. Nomor antrian anda adalah: " . $nomor_antrian;
            // } else {
            //     echo "Error: " . $sql . "<br>" . $conn->error;
            // }
            
            // Menutup koneksi
            $conn->close();

?>

