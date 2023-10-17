<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIM dan password yang dikirim dari form login
$nim = $_POST['nim'];
$password = $_POST['password'];

// Query untuk memeriksa kecocokan NIM dan password
$query = "SELECT * FROM crudlogin WHERE nim = '$nim' AND password = '$password'";
$result = mysqli_query($connect, $query);

if ($result && mysqli_num_rows($result) == 1) {
    // Login sukses, set sesi dan arahkan ke halaman dashboard
    session_start();
    $_SESSION['nim'] = $nim;
    header("location: home.php");
} else {
    // Login gagal, arahkan kembali ke halaman login
    header("location: login.php?error=1");
}
?>
