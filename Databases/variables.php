<?php
    include('koneksi.inc.php');

    $sql = "SELECT COUNT(*) AS jumlah FROM pesanan";
    $result = mysqli_query($conn, $sql);
    $row = $result->fetch_assoc();
    $nomor_antrian = intval($row["jumlah"]);



    $sql = "SELECT jml_pesanan FROM pesanan ORDER BY id DESC LIMIT 1"; 
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mengambil hasil query
        $row = $result->fetch_assoc();
        $jml_pesanan_terakhir = $row['jml_pesanan']; // Menyimpan nilai jml_pesanan pada baris terakhir ke dalam variabel
    } else {
        echo "Tidak ada data ditemukan";
    }

    $sql = "SELECT stat FROM pesanan"; 
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mengambil hasil query
        $row = $result->fetch_assoc();
        $status = $row['stat'];
    } else {
        echo "Tidak ada data ditemukan";
    }

    
    date_default_timezone_set("Asia/Jakarta");

    ?>
