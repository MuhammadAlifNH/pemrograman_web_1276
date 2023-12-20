<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Penyewa</title>
</head>

<style>

body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
}

form {
  max-width: 400px;
  margin: 50px auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-bottom: 8px;
  color: #333;
}

input {
  width: 100%;
  padding: 10px;
  margin-bottom: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type="submit"] {
  background-color: #4caf50;
  color: #fff;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}


</style>

<?php
include 'header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$id = $_POST['id'];
$nama = $_POST['nama_penyewa'];
$idBarang = $_POST['id_barang'];
$tanggalSewa = $_POST['tanggal_sewa'];
$sql_insert = "INSERT INTO penyewas (id, nama_penyewa, id_barang, tanggal_sewa) VALUES ('$id','$nama', $idBarang, '$tanggalSewa')";

if ($mysqli->query($sql_insert) === TRUE) {
    header("Location: lihat_penyewa.php");
    exit;
} else {
    echo "Error: ". $sql_insert . "<br>" . $mysqli->error;
}
$mysqli->close();
}
?>


<body>
<form action="tambah_penyewa.php" method="POST">
    <label for="id">ID:</label><input type="text" name="id"><br>
    <label for="nama_penyewa">Nama Penyewa:</label><input type="text" name="nama_penyewa"><br>
    <label for="id_barang">ID Barang:</label><input type="int" name="id_barang"><br>
    <label for="tanggal_sewa">Tanggal Sewa</label><input type="date" name="tanggal_sewa"><br>
    <input type="submit" value="Tambah">
</form>    
</body>
</html>



