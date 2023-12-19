<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
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
$nama = $_POST['nama_barang'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$sql = "INSERT INTO barangs (id, nama_barang, kategori, harga) VALUES ('$id', '$nama', '$kategori', $harga)";
if ($mysqli->query($sql) === TRUE) {
    header("Location: lihat_barang.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
$mysqli->close();
}
?>

<body>
<form action="tambah_barang.php" method="POST">
    <label for="id">ID:</label><input type="text" name="id"><br>
    <label for="nama_barang">Nama Barang:</label><input type="text" name="nama_barang"><br>
    <label for="kategori">Kategori:</label><input type="text" name="kategori"><br>
    <label for="harga">Harga Sewa</label><input type="text" name="harga"><br>
    <input type="submit" value="Tambah">
</form>    
</body>
</html>