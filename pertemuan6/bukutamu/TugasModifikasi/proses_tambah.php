<?php
if (isset($_POST['tambah'])) {
    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tgl_lahir = $_POST['tgl_lahir'];

    // Simpan data siswa ke database (gunakan SQL INSERT)
    require("koneksi2.php");
$sql = "insert into tugasmodif (nama, alamat, "."tgl_lahir)"." VALUES ('$nama', '$alamat',"." '$tgl_lahir')";
mysqli_query($conn,$sql);
$num = mysqli_affected_rows($conn); 
    // Tambahkan kode untuk menyimpan data ke database di sini

    // Setelah berhasil menambahkan siswa, alihkan kembali ke halaman utama
    header("Location: index.php");
}
?>
