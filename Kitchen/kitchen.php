<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
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

            th,
            td {
                padding: 5px 15px;
                border: 1px #792d2d solid;
            }
        </style>
    </head>
    <?php
    include('C:\xampp\htdocs\SI\Databases\variables.php');

    $status_string = ($status == 1) ? "Siap" : "Belum Siap";

    ?>

    <body>
        <header class="bg-[#B55353] p-10 flex justify-center">
            <span class="text-white text-3xl font-semibold">SEBLAK BDR!</span>
        </header>
        <div class="flex flex-col justify-center gap-5 items-center mt-24">
            <h1 class="font-bold text-2xl">LIST ANTRIAN PESANAN</h1>
            <table>
                <thead>
                    <th>No Antrian</th>
                    <th>Jumlah Pesanan</th>
                    <th>Status</th>
                    <th>Siapkan</th>
                    <th>Hapus Antrian</th>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $nomor_antrian ?></td>
                        <td><?php echo $jml_pesanan_terakhir ?></td>
                        <td><?php echo $status_string ?></td>
                        <td><button type="submit" class="bg-[#B55353] py-2 text-white px-5 rounded-xl hover:bg-[#792d2d]" value="ambil nomor antrian">siap</button></td>
                        <td> <form action="deleteAntrian.php" method="post"><button type="submit" class="bg-[#B55353] py-2 text-white px-5 rounded-xl hover:bg-[#792d2d]" value="ambil nomor antrian">hapus antrian</button></form></td>
                    </tr>
                </tbody>
            </table>
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
</body>

</html>