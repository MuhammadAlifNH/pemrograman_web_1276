<!DOCTYPE html>
<html lang="en">
<?php
include ('koneksi.php');
include ('session_in.php');
include ('session_out.php');
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDAH Collection</title>
    <link rel="stylesheet" type="text/css" href="zemua.css">
</head>
<body class="badan">
    <header class="atas">
        <h1 class="h1"><b>INDAH Collection</b></h1>
        <div style="background-color: #ffffff; text-align:center;border-radius:15px;">
        <ul class="list-atas">
            <li class="list">
                <a href="index.php" class="link">Halaman Utama</a>
            </li>
            <li class="list">
                <a href="?logout==true" class="link">Keluar</a>
            </li>
        </ul>
        </div>
    </header>
    <nav class="nav">
        <ul class="list-atas">
            <li class="list">
                <a href="lihat_barang.php" class="link" style="color: #ffffff;">Barang</a>
            </li>
            <li class="list">
                <a href="lihat_penyewa.php" class="link" style="color: #ffffff;">Penyewa</a>
            </li>
            <li>
                <a href="lihat_pengembalian.php" class="link" style="color: #ffffff;">Pengembalian</a>
            </li>
            <li class="list">
                <a href="lihat_pembayaran.php" class="link" style="color: #ffffff;">Pembayaran</a>
            </li>
        </ul>
    </nav>
</body>
</html>