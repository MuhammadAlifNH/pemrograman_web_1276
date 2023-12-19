<!DOCTYPE html>
<html>
<?php

include 'koneksi.php';
session_start();
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM penggunas WHERE username = '$username' AND password = '$password'";
    $result = $mysqli -> query($sql);
    if ($result -> num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        echo $_SESSION['username'];
        header ('Location: index.php');
    }else{
        echo "salah";
    }
    $mysqli -> close();
}

?>
<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="zemua.css">
</head>
<body class="badan">

    <div class="main">
        <div class="div">
            <h1><b>Selamat Datang</b></h1>
            <h2>Silahkan Login</h2>
        </div>
        <div class="div">
        <form action = '#' method="post">
            <label>Username</label>
            <input type="text" name="username"><br>
            <label>Password</label>
            <input type="password" name="password"><br>
            <button name='submit' class = 'btn'>Login</button>
        </form>
        </div>
    </div>
</body>
</html>