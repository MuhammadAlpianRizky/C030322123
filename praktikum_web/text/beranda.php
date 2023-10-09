<!DOCTYPE html>
<html>
<head>
    <title>Halaman Beranda</title>
</head>
<body>
    <h2>Selamat Datang di Halaman Beranda</h2>
    <?php
    session_start();
    if (isset($_SESSION["username"])) {
        echo "Halo, " . $_SESSION["username"] . "!"; // Menampilkan username yang berhasil login
    } else {
        header("location: Tugas_2.html"); // Jika tidak ada sesi, arahkan kembali ke halaman login
    }
    ?>
    <br>
    <a href="logout.php">Logout</a> <!-- Tambahkan tombol logout jika diperlukan -->
</body>
</html>
