<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Selamat Datang, <?php echo $username; ?></h2>
    <p>Ini adalah halaman utama setelah login.</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
