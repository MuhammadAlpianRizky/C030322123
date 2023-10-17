<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data siswa dari database (gunakan SQL DELETE)
    require("koneksi2.php");
    $sql = "DELETE FROM tugasmodif WHERE id = $id";
    mysqli_query($conn, $sql);

    // Setelah berhasil menghapus siswa, alihkan kembali ke halaman utama
    header("Location: index.php");
} else {
    // Jika tidak ada ID yang diberikan, tampilkan pesan error atau alihkan kembali ke halaman utama
    header("Location: index.php");
}
?>
