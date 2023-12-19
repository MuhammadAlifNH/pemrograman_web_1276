<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Barang</title>
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
<?php
include("header.php");
?>
<body>
    <h1><b>Data Barang</b></h1>
<?php
$sql = "SELECT * FROM barangs";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nama Barang</th><th>Ketegori</th><th>Harga Sewa</th><th>Action</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["nama_barang"]."</td>";
    echo "<td>".$row["kategori"]."</td>";
    echo "<td>".$row["harga"]."</td>";
    echo "<td><a href='update_barang.php?id=".$row["id"]."'>Edit</a> | <a href='delete_barang.php?id=".$row["id"]."'>Hapus</a></td>";
    echo "</tr>";
}
echo "</table>";
} else {
    echo "Tidak ada data barang.";
}
$mysqli->close();
?>
<div>
    <a href="tambah_barang.php" class="link" style="background-color: #fff; padding: 5px;">Tambah Data</a>
</div>
</body>
</html>