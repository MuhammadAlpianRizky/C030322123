<?php
// Mulai sesi
session_start();

// Periksa sesi login
if (!isset($_SESSION['nim'])) {
    // Jika belum login, arahkan kembali ke halaman login
    header("location: login.php");
    exit; // Pastikan untuk menghentikan eksekusi script setelah mengarahkan
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Siswa</title>
</head>
<body>
    <h2>Selamat datang, <?php echo $_SESSION['nim']; ?></h2>
    <a href="logout.php">Logout</a>
</body>
</html>
