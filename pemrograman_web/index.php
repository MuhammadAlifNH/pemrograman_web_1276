<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="zemua.css">
</head>
<?php
    include ("header.php");
?>
<body>
    <div class="div">
        <?php
            $barang = mysqli_query($mysqli, "SELECT COUNT(*) AS total FROM barangs");
            if ($barang) {
                $row = mysqli_fetch_assoc($barang);
                $total = $row['total'];
                echo "<p>$total jenis barang yang tersedia.</p>";
            } else {
                echo "Gagal mengambil data.";
            }
        ?>
    </div>
    <div class="div">
        <?php
            $penyewa = mysqli_query($mysqli, "SELECT COUNT(*) AS total FROM penyewas");
            if ($penyewa) {
                $row = mysqli_fetch_assoc($penyewa);
                $total = $row['total'];
                echo "<p>$total orang yang menyewa.</p>";
            } else {
                echo "Gagal mengambil data.";
            }
        ?>
    </div>
    <div class="div">
        <?php
            $pengembalian = mysqli_query($mysqli, "SELECT COUNT(*) AS total FROM pengembalians");
            if ($pengembalian) {
                $row = mysqli_fetch_assoc($pengembalian);
                $total = $row['total'];
                echo "<p>$total barang yang sudah dikembalikan.</p>";
            } else {
                echo "Gagal mengambil data.";
            }
        ?>
    </div>
    <div class="div">
        <?php
            $pembayaran = mysqli_query($mysqli, "SELECT COUNT(*) AS total FROM pembayarans");
            if ($pembayaran) {
                $row = mysqli_fetch_assoc($pembayaran);
                $total = $row['total'];
                echo "<p>$total orang yang sudah membayar.</p>";
            } else {
                echo "Gagal mengambil data.";
            }

            mysqli_close($mysqli);
        ?>
    </div>
</body>
</html>