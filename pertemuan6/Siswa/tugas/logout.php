<?php
// Mulai sesi
session_start();

// Hapus semua data sesi
session_destroy();

// Redirect ke halaman login
header("location: login.php");
?>
