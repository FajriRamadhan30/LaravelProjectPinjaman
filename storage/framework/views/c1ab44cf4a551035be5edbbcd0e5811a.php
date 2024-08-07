<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nasabah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: lightblue;
            background-image: url('https://cdn.pixabay.com/photo/2020/02/24/18/05/background-4876988_1280.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            font-family: 'Trebuchet MS', sans-serif;
            color: darkblue;
            font-size: 2.5em;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            padding: 20px;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            text-align: center;
            margin: 0;
        }

        table {
            margin-top: 20px;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 800px;
        }

        table, th, td {
            border: 1px solid #ddd;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        td {
            background-color: #f9f9f9;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>
    <h1>Data Nasabah</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Pinjaman</th>
            <th>Cicilan</th>
            <th>Bunga Dibayar</th>
            <th>Total Hutang Dibayar</th>
            <th>Angsuran Per Bulan</th>
        </tr>
        <?php $__currentLoopData = $nasabah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($n->nama); ?></td>
            <td><?php echo e($n->alamat); ?></td>
            <td><?php echo e($n->nohp); ?></td>
            <td><?php echo e(number_format($n->pinjaman, 2)); ?></td>
            <td><?php echo e($n->cicilan); ?></td>
            <td><?php echo e(number_format($n->bunga_dibayar, 2)); ?></td>
            <td><?php echo e(number_format($n->total_hutang_dibayar, 2)); ?></td>
            <td><?php echo e(number_format($n->angsuran_per_bulan, 2)); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>

</html>
<?php /**PATH D:\laravel_application\coba\resources\views/nasabah.blade.php ENDPATH**/ ?>