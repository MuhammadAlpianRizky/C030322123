<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data yang dikirim dari form
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

// Rename nama foto dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis') . $foto;

// Set path folder tempat simpan foto
$path = "images/" . $fotobaru;

// Proses Upload
if (move_uploaded_file($tmp, $path)) {
    // Simpan ke DB
    $query = "INSERT INTO datasiswa (nis, nama, jenis_kelamin, telp, alamat, foto) VALUES ('$nis', '$nama', '$jenis_kelamin', '$telp', '$alamat', '$fotobaru')";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header("location: index.php");
    } else {
        echo "Maaf, terjadi kesalahan saat menyimpan data ke database.";
        echo "<br><a href='form_simpan.php'>Kembali ke Form</a>";
    }
} else {
    // Jika gambar gagal diupload
    echo "Maaf, Gambar gagal diupload.";
    echo "<br><a href='form_simpan.php'>Kembali ke Form</a>";
}
?>
