<?php
require("koneksi2.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data siswa berdasarkan ID
    $sql = "SELECT * FROM tugasmodif WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        // Data siswa ditemukan
        $nama = $row['nama'];
        $alamat = $row['alamat'];
        $tgl_lahir = $row['tgl_lahir'];

        // Formulir pengeditan data
        echo "<h2>Edit Data Siswa</h2>";
        echo "<form method='post' action='proses_edit.php'>";
        echo "<input type='hidden' name='id' value='$id'>";
        echo "Nama: <input type='text' name='nama' value='$nama'><br>";
        echo "Alamat: <input type='text' name='alamat' value='$alamat'><br>";
        echo "Tanggal Lahir: <input type='text' name='tgl_lahir' value='$tgl_lahir'><br>";
        echo "<input type='submit' value='Simpan Perubahan'>";
        echo "</form>";
    } else {
        echo "Data siswa tidak ditemukan.";
    }
} else {
    echo "ID siswa tidak valid.";
}
?>
