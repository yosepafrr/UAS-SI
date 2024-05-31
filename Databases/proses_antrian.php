<?php
include("./koneksi.inc.php");

$sql = "SELECT COUNT(*) AS jumlah FROM pesanan";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
$nomor_antrian = $row["jumlah"] + 1;

$sql = "INSERT INTO pesanan (no_antrian, stat) VALUES ('$nomor_antrian', 0)";
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan. Nomor antrian anda adalah: " . $nomor_antrian;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
