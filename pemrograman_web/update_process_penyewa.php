<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Proses Penyewa</title>
</head>
<body>
<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama_penyewa'];
    $idBarang = $_POST['id_barang'];
    $tanggalSewa = $_POST['tanggal_sewa'];
    

    
    $sql_update = "UPDATE penyewas SET id=?, nama_penyewa=?, id_barang=?, tanggal_sewa=? WHERE id=?";
    $sistem = $mysqli->prepare($sql_update);
    if ($sistem === false) {
        die("Error: " . $mysqli->error);
    }
    $sistem->bind_param('ssssi', $id, $nama, $idBarang, $tanggalSewa, $id);
        if ($mysqli->query($sql_update) === TRUE) {
            header("Location: lihat_barang.php");
        } else {
            echo "<script>alert('Gagal melakukan pembaruan data: " . $sistem->error . "'); window.location.href='javascript:history.back()';</script>" . $mysqli->error;
        }
$sistem->close();
} else {
    echo "<script>alert('Metode request tidak valid.'); window.location.href='javascript:history.back()';</script>";
}

$mysqli->close();


?>

</body>
</html>