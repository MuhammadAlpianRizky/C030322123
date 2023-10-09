<?php
session_start();

// Simpan username dan password dalam variabel
$valid_username = "pengguna"; // Ganti dengan username yang benar
$valid_password = "rahasia"; // Ganti dengan password yang benar

// Mengecek apakah form telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Memeriksa apakah username dan password benar
    if ($username == $valid_username && $password == $valid_password) {
        // Jika benar, arahkan pengguna ke halaman beranda atau lakukan tindakan lain yang sesuai
        $_SESSION["username"] = $username;
        header("location: beranda.php"); // Ganti dengan halaman beranda yang sesuai
    } else {
        // Jika salah, tampilkan pesan error
        echo "Username atau password salah.";
    }
}
?>
