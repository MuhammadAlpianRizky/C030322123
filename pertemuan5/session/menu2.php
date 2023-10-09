<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("location:proses_login.php");
    exit;
}

$nama = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Menu 2</title>
</head>
<body>
    <center>
        <h1><b>Ini Halaman Menu 2</b></h1>
        <p>Selamat Datang <b><?= $nama ?></b></p>
        <p>Berikut ini menu navigasi</p>
        <p><a href='menu1.php'>Menu 1&nbsp</a><a href='menu2.php'>Menu 2&nbsp</a><a href='menu3.php'>Menu 3&nbsp</a></p>

        <!-- Logout link that redirects to proses_login.php -->
        <a href="proses_login.php?aksi=logout">Logout</a>
    </center>
</body>
</html>
