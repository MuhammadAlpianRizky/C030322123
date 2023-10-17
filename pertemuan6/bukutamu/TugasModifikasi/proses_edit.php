<?php
require("koneksi2.php");

if (isset($_POST['id'], $_POST['nama'], $_POST['alamat'], $_POST['tgl_lahir'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_lahir = $_POST['tgl_lahir'];

    // Update data siswa ke database
    $sql = "UPDATE tugasmodif SET nama = '$nama', alamat = '$alamat', tgl_lahir = '$tgl_lahir' WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Gagal menyimpan perubahan.";
    }
} else {
    echo "Data tidak lengkap.";
}
?>
