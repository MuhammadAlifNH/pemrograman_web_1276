<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Penyewaan</title>
    <link rel="stylesheet" href="zemua.css">
    <style>
        table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        }

        th {
        background-color: #f2f2f2;
        padding: 8px;
        text-align: left;
        border: 1px solid #dddddd;
        }

        td {
        padding: 8px;
        text-align: left;
        border: 1px solid #dddddd;
        }
    </style>
</head>
<body>
    <h1><b>Data Penyewaan</b></h1>
<?php
include("header.php");
$sql_select = "SELECT penyewas.id, penyewas.nama_penyewa, barangs.nama_barang, barangs.harga, penyewas.tanggal_sewa
               FROM penyewas 
               INNER JOIN barangs ON penyewas.id_barang = barangs.id";
$result = $mysqli->query($sql_select);
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nama Penyewa</th><th>Barang</th><th>Harga</th><th>Tanggal Sewa</th><th>Action</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["nama_penyewa"]."</td>";
        echo "<td>".$row["nama_barang"]."</td>";
        echo "<td>".$row["harga"]."</td>";
        echo "<td>".$row["tanggal_sewa"]."</td>";
        echo "<td><a href='update_penyewa.php?id=".$row["id"]."'>Edit</a> | <a href='delete_penyewa.php?id=".$row["id"]."'>Hapus</a></td>";
        echo "</tr>";
    }
echo "</table>";
} else {
    echo "Tidak ada data barang.";
}
$mysqli->close();
?>
<div>
    <a href="tambah_penyewa.php" class="link" style="background-color: #fff; padding: 5px;">Tambah Data</a>
</div>
</body>
</html>