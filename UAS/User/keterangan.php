<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seblak BDR</title>
    <link rel="stylesheet" href="../src/output.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-image: url('/Pictures/BG.png');
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<?php
include('C:\xampp\htdocs\SI\Databases\variables.php');
$sisa_antrian = $nomor_antrian - 1;
$estimasi = $nomor_antrian * 7;
?>

<body>
    <header class="bg-[#B55353] p-10 flex justify-center">
        <span class="text-white text-3xl font-semibold">SEBLAK BDR!</span>
    </header>
    <div class="flex flex-col items-center gap-10 mt-[60px] ">
        <div class="border-2 border-[#B55353] bg-white p-10 rounded-lg flex flex-col gap-5 mx-14">
            <p class="font-bold text-xl">Seblak BDR</p>
            <p>Jl. Mugarsari, Kec. Tamansari, Kab. Tasikmalaya, Jawa Barat 46196.</p>
            <p>Hari/Tanggal : <span><?php echo date("l")  ?></span>, <span><?php echo date("d")  ?></span>/<span><?php echo date("m")  ?></span>/<span><?php echo date("Y")  ?></span>
                Jam Operasional : 08.00 - 20.00
            </p>
            <p>Pesanan : Seblak - <span><?php echo $jml_pesanan_terakhir; ?></span></p>
            <div class="ml-14 flex items-center justify-center gap-5 text-center mt-10">
                <div>
                    <p class="font-semibold">Sisa Antrian</p>
                    <p class="font-bold text-2xl"><?php echo $sisa_antrian; ?></p>
                </div>
                <div class="border-l border-black px-5">
                    <p class="font-semibold">Nomor Antrian Kamu</p>
                    <p class="font-bold text-2xl"><?php echo $nomor_antrian; ?></p>
                </div>
            </div>
            <div class="flex items-center justify-center gap-7 font-semibold bg-[#B55353] py-5 rounded-xl px-10 text-center mt-10">
                <div class="bg-white px-5 py-4 text-4xl font-bold rounded-lg">0<?php echo $nomor_antrian; ?></div>
                <div class="bg-white px-5 py-3 rounded-lg">Estimasi: <br><span><?php echo $estimasi; ?></span> Menit</div>
            </div>
            <a href="../User/pesanan-siap.html">Pesanan</a>
        </div>
    </div>
</body>

</html>