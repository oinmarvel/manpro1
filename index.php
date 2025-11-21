<?php
// Data sederhana untuk ditampilkan
$judulWebsite = "Catering LezatKu";
$tagline = "Pesan makanan enak, cepat, dan terjangkau!";
$menuNavigasi = [
    "Beranda" => "index.php",
    "Menu Catering" => "menu.php",
    "Pemesanan" => "pemesanan.php",
    "Kontak" => "kontak.php"
];

// Contoh produk (bisa diganti dengan database)
$paketCatering = [
    ["nama" => "Paket Hemat", "harga" => 15000, "deskripsi" => "Nasi + Ayam Goreng + Sayur + Sambal"],
    ["nama" => "Paket Spesial", "harga" => 20000, "deskripsi" => "Nasi + Ayam Bakar + Lalapan + Es Teh"],
    ["nama" => "Paket Premium", "harga" => 30000, "deskripsi" => "Nasi + Ikan Bakar + Sayur Asem + Buah"],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $judulWebsite ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f7f7f7;
        }
        header{
            background: #ff7043;
            color: white;
            padding: 20px;
            text-align: center;
        }
        nav{
            background: #e64a19;
            text-align: center;
            padding: 12px;
        }
        nav a{
            color: white;
            text-decoration: none;
            margin: 0 12px;
            font-weight: bold;
        }
        nav a:hover{
            text-decoration: underline;
        }
        .container{
            max-width: 1000px;
            margin: 25px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .paket{
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
        }
        .paket h3{
            margin: 0 0 5px;
            color: #e64a19;
        }
        .paket p{
            margin: 5px 0;
        }
        .btn{
            display: inline-block;
            background: #ff7043;
            color: white;
            padding: 8px 14px;
            border-radius: 6px;
            text-decoration: none;
            margin-top: 8px;
        }
        .btn:hover{
            background: #ff5722;
        }
        footer{
            background: #e64a19;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 25px;
        }
    </style>
</head>
<body>

<header>
    <h1><?= $judulWebsite ?></h1>
    <p><?= $tagline ?></p>
</header>

<nav>
    <?php foreach($menuNavigasi as $nama => $link): ?>
        <a href="<?= $link ?>"><?= $nama ?></a>
    <?php endforeach; ?>
</nav>

<div class="container">
    <h2>Paket Catering Terlaris</h2>

    <?php foreach($paketCatering as $paket): ?>
        <div class="paket">
            <h3><?= $paket["nama"] ?></h3>
            <p><?= $paket["deskripsi"] ?></p>
            <p><strong>Harga: Rp <?= number_format($paket["harga"], 0, ',', '.') ?></strong></p>
            <a href="pemesanan.php?paket=<?= urlencode($paket['nama']) ?>" class="btn">Pesan Sekarang</a>
        </div>
    <?php endforeach; ?>

</div>

<footer>
    &copy; <?= date("Y") ?> <?= $judulWebsite ?> — Siap melayani acara Anda!
</footer>

</body>
</html>
