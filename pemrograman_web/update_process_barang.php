<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Proses Barang</title>
</head>
<body>
<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    

    
    $sql = "UPDATE barangs SET id=?, nama_barang=?, kategori=?, harga=? WHERE id=?";
    $sistem = $mysqli->prepare($sql);

    if ($sistem === false) {
        die("Error: " . $mysqli->error);
    }

    $sistem->bind_param('ssssi', $id, $nama, $kategori, $harga, $id);

    if ($sistem->execute()) {
        header("Location: lihat_barang.php");
    } else {
        echo "<script>alert('Gagal melakukan pembaruan data: " . $sistem->error . "'); window.location.href='javascript:history.back()';</script>";
    }

    $sistem->close();
} else {
    echo "<script>alert('Metode request tidak valid.'); window.location.href='javascript:history.back()';</script>";
}

$mysqli->close();
?>

</body>
</html>