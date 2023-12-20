<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM penyewas WHERE id=$id";
if ($mysqli->query($sql) === TRUE) {
    header("Location: lihat_penyewa.php");
exit;
} else {
echo "Error: " . $sql . "<br>" . $mysqli->error;
}
$mysqli->close();
?>