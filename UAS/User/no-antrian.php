<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor Antrian</title>
    <link rel="stylesheet" href="../src/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
            /* Menghilangkan margin jika diperlukan */
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
            <p class="font-bold text-gray-700 text-3xl">No Antrian Kamu:</p>
            <p id="nomorAntrian" class="font-bold text-[#B55353] text-3xl mt-5"><?php echo $nomor_antrian; ?></p>
        </div>
        <img src="Pictures/SEBLAK.png" alt="">
            <div class="flex flex-col items-center gap-10">
                <p class="font-semibold text-2xl">Jumlah Pesanan: </p>
                <form action="tambahPesanan.php" method="post">
                    <div class="flex gap-10 justify-center items-center">
                        <button id="decreaseBtn" type="button" onclick="decreaseQty()" class="font-semibold text-[#B55353]">-</button>
                        <input name="jmlPesanan" type="number" class="ml-3 max-w-5 outline-none cursor-default" value="1" id="jmlPesanan">
                        <button id="increaseBtn" type="button" onclick="increaseQty()" class="font-semibold text-[#B55353]">+</button>
                    </div>
                    <input type="submit" value="OK" class="bg-[#B55353] py-2 px-10 rounded-xl text-white hover:bg-[#792d2d] mt-10 ml-5"></input>
                </form>
            </div>
    </div>
    <script>
        function increaseQty() {
            let jumlah = document.getElementById('jmlPesanan').value;
            jumlah = parseInt(jumlah) + 1;
            document.getElementById('jmlPesanan').value = jumlah;

        }

        function decreaseQty() {
            let jumlah = document.getElementById('jmlPesanan').value;
            if (jumlah > 1) {
                jumlah = parseInt(jumlah) - 1;
                document.getElementById('jmlPesanan').value = jumlah;
            }
        }
    </script>
</body>

</html>