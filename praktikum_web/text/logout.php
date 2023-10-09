<?php
session_start();
session_destroy(); // Menghapus sesi
header("location: Tugas_2.html"); // Mengarahkan kembali ke halaman login
?>
