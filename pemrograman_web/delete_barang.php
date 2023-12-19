<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM barangs WHERE id=$id";
if ($mysqli->query($sql) === TRUE) {
    header("Location: lihat_barang.php");
exit;
} else {
echo "Error: " . $sql . "<br>" . $mysqli->error;
}
$mysqli->close();
?>