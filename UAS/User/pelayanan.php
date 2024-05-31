<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanggal Pelayanan</title>
    <link rel="stylesheet" href="../src/output.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<?php
include('C:\xampp\htdocs\SI\Databases\variables.php');
?>

<body>
    <header class="bg-[#B55353] p-10 flex justify-center">
        <span class="text-white text-3xl font-semibold">SEBLAK BDR!</span>
    </header>
    <div class="flex flex-col items-center gap-10 mt-[60px]">
        <div class="text-center border-2 border-[#B55353] p-10 rounded-lg">
            <p class="font-bold text-gray-700 text-3xl">Tanggal Pelayanan:</p>
            <div class="flex justify-center items-center mt-5 bg-[#B55353] text-white py-2 rounded-xl text-xl font-semibold">
                <span id="day" class="mr-2"><?php echo date("l")  ?>,</span><span id="tgl"><?php echo date("d")  ?></span>/<span id="bln"><?php echo date("m")  ?></span>/<span><?php echo date("Y")  ?></span>
                <img class="w-5 ml-3" src="../Pictures/calendar-white.png" alt="tgl">
            </div>
            <p class="font-bold text-gray-700 text-3xl mt-5">Nomor antrian: <span><?php echo $nomor_antrian; ?></span></p>
            <p class="font-bold text-gray-700 text-xl mt-5">Jumlah Pesanan: <span><?php echo $jml_pesanan_terakhir; ?></span></p>
            <p class="font-bold text-gray-700 text-2xl mt-20">Tambah pesanan?</p>

        </div>
        <div class="flex gap-10">
            <a href="../User/no-antrian.php" class="bg-[#B55353] py-2 px-10 rounded-xl text-white hover:bg-[#792d2d]">YA</a>
            <a href="../User/keterangan.php" class="bg-[#B55353] py-2 px-10 rounded-xl text-white hover:bg-[#792d2d]">TIDAK</a>
        </div>
    </div>
    </div>
</body>

</html>