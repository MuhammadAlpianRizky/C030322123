<?php
$dbname = 'db_tugas';
$host = 'localhost';
$password = '';
$username = 'root';

// Koneksi ke MySQL
$conn = mysqli_connect($host, $username, $password, $dbname);

// Membuat Koneksi
if (!$conn) {
    die("Koneksi Failed: " . mysqli_connect_error());
}

// Membuat Tabel
$sql = "CREATE TABLE tugasmodif (
    id INT NOT NULL AUTO_INCREMENT,
    nama VARCHAR(25),
    alamat VARCHAR(50),
    tgl_lahir DATE,
     PRIMARY KEY (id)
)";
if (mysqli_query($conn, $sql)) {
    echo "Table Berhasil di Buat";
} else {
    echo "Table Gagal di Buat: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
