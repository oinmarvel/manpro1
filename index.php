<?php
// Data sederhana (bisa diganti nanti)
$judul = "Selamat Datang di Website Saya";
$deskripsi = "Ini adalah contoh website sederhana menggunakan PHP.";
$menu = [
    "Home" => "index.php",
    "Tentang" => "tentang.php",
    "Kontak" => "kontak.php"
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $judul ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f2f2f2;
        }
        header{
            background: #333;
            padding: 15px;
            color:white;
            text-align:center;
        }
        nav{
            background:#444;
            padding:10px;
            text-align:center;
        }
        nav a{
            color:white;
            text-decoration:none;
            margin:0 10px;
            font-weight:bold;
        }
        nav a:hover{
            color:#ffd700;
        }
        .container{
            max-width:900px;
            margin:20px auto;
            background:white;
            padding:20px;
            border-radius:8px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }
        footer{
            text-align:center;
            padding:15px;
            background:#333;
            color:white;
            margin-top:20px;
        }
    </style>
</head>
<body>

<header>
    <h1><?= $judul ?></h1>
</header>

<nav>
    <?php foreach($menu as $nama => $link): ?>
        <a href="<?= $link ?>"><?= $nama ?></a>
    <?php endforeach; ?>
</nav>

<div class="container">
    <h2>Halo, selamat datang!</h2>
    <p><?= $deskripsi ?></p>

    <p>Ini adalah halaman depan website yang dibuat dengan PHP.  
    Anda bisa menambahkan konten seperti artikel, gambar, atau link navigasi.</p>
</div>

<footer>
    &copy; <?= date("Y") ?> Website Saya — Dibuat dengan PHP
</footer>

</body>
</html>
