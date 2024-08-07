<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rincian</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: lightblue;
    }

    h1 {
        font-family: Trebuchet MS;
        text-align: center;
        color: darkblue;
        margin-top: 20px;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .result {
        margin-top: 20px;
        padding: 10px;
        background-color: #f9f9f9;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .result h2 {
        margin-top: 0;
        color: #333;
    }

    .result p {
        margin-bottom: 10px;
        color: #666;
    }

    .button-container {
        text-align: center; /* Center the button */
        margin-top: 20px;
    }

    .button {
        display: inline-block;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
    }

    .button:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>
    <h1>APLIKASI PINJAMAN SEJAHTERA</h1>
    <div class="container">
        <?php
        use App\Models\Nasabah;

        $nama = $_GET["nama"];
        $alamat = $_GET["alamat"];
        $nohp = $_GET["nohp"];
        $pinjaman = $_GET["pinjaman"];
        $cicilan = $_GET["cicilan"];
        $pinjaman_format = number_format($pinjaman);

        printf("<div class='result'>");
        printf("<h2>Informasi Pinjaman:</h2>");
        printf("<p>Nama Nasabah: $nama</p>");
        printf("<p>Alamat Nasabah: $alamat</p>");
        printf("<p>No HP Nasabah: $nohp</p>");
        printf("<hr>");
        printf("<p>Total Pinjaman: $pinjaman_format</p>");
        printf("<p>Lama Cicilan (Bulan): $cicilan</p>");

        if ($cicilan >= 3 && $cicilan <= 6)
            $bunga = $pinjaman * 0.1;
        elseif ($cicilan >= 7 && $cicilan <= 12)
            $bunga = $pinjaman * 0.15;
        elseif ($cicilan >= 13 && $cicilan <= 18)
            $bunga = $pinjaman * 0.2;
        elseif ($cicilan >= 19 && $cicilan <= 30)
            $bunga = $pinjaman * 0.3;
        elseif ($cicilan >= 31 && $cicilan <= 48)
            $bunga = $pinjaman * 0.4;
        elseif ($cicilan > 48)
            $bunga = $pinjaman * 0.5;
        else
            print("<p>Kesalahan Input</p>");

        $bunga_format = number_format($bunga);
        printf("<p>Bunga Dibayar: $bunga_format</p>");
        echo "<hr>";

        $total = $pinjaman + $bunga;
        $total_format = number_format($total);
        printf("<p>Total Hutang Yang Dibayar: $total_format</p>");

        $angsuran = $total / $cicilan;
        $angsuran_format = number_format($angsuran);
        printf("<strong><p>Angsuran Per Bulan: $angsuran_format</p></strong>");
        printf("</div>");

        // Insert into database
        $nasabah = new Nasabah();
        $nasabah->nama = $nama;
        $nasabah->alamat = $alamat;
        $nasabah->nohp = $nohp;
        $nasabah->pinjaman = $pinjaman;
        $nasabah->cicilan = $cicilan;
        $nasabah->bunga_dibayar = $bunga;
        $nasabah->total_hutang_dibayar = $total;
        $nasabah->angsuran_per_bulan = $angsuran;
        $nasabah->save();
        ?>
    </div>

    <div class="button-container">
        <a href="<?php echo e(url('/nasabah')); ?>" class="button">Lihat Data Nasabah</a>
    </div>
</body>

</html>
<?php /**PATH D:\laravel_application\coba\resources\views/angsuran.blade.php ENDPATH**/ ?>