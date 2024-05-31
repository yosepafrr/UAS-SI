<?php 
    include('C:\xampp\htdocs\SI\Databases\variables.php');

    $jml_pesanan = $_POST['jmlPesanan'];

    $sql = "UPDATE pesanan SET jml_pesanan = '$jml_pesanan' ORDER BY id DESC LIMIT 1";
    if ($conn->query($sql) === TRUE) {
        header("location:pelayanan.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>
