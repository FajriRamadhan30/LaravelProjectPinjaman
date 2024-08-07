<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Pinjaman</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: lightblue;
            background-image: url('https://cdn.pixabay.com/photo/2020/02/24/18/05/background-4876988_1280.jpg'); /* Replace with a valid image URL */
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

        form {
            max-width: 400px;
            margin-top: 20px;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        form:before {
            content: '';
            background-image: url('https://www.example.com/form-background.jpg'); /* Replace with a valid image URL */
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0.1;
            border-radius: 5px;
        }

        form * {
            position: relative;
            z-index: 1;
        }

        .input-container {
            position: relative;
            margin-bottom: 20px;
        }

        .input-container i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 10px;
            color: #999;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px 10px 10px 40px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        hr {
            border: 0;
            height: 1px;
            background: #ccc;
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <h1>APLIKASI PINJAMAN SEJAHTERA</h1>
    <form action="<?php echo e(url('/angsuran')); ?>" method="get">
        <div class="input-container">
            <i class="fas fa-user"></i>
            Masukkan Nama Nasabah:
            <input type="text" name="nama">
        </div>
        <div class="input-container">
            <i class="fas fa-map-marker-alt"></i>
            Masukkan Alamat Nasabah:
            <input type="text" name="alamat">
        </div>
        <div class="input-container">
            <i class="fas fa-phone"></i>
            Masukkan NO HP:
            <input type="text" name="nohp">
        </div>
        <hr>
        <div class="input-container">
            <i class="fas fa-money-bill-wave"></i>
            Masukkan Jumlah Pinjaman:
            <input type="text" name="pinjaman">
        </div>
        <div class="input-container">
            <i class="fas fa-calendar-alt"></i>
            Masukkan Lama cicilan (Bulan):
            <input type="text" name="cicilan">
        </div>
        <input type="submit" value="Ajukan Pinjaman">
    </form>
</body>

</html>
<?php /**PATH D:\laravel_application\Pinjaman\resources\views/app.blade.php ENDPATH**/ ?>