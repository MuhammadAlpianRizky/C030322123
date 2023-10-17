<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_crud";

// Buat koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil Data yang Dikirim dari Form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis') . $foto;

// Set path folder tempat menyimpan fotonya (pastikan ada tanda / di akhir path)
$path = "images/" . $fotobaru;

// Proses upload
if (move_uploaded_file($tmp, $path)) { // Cek apakah gambar berhasil diupload atau tidak
    // Proses simpan ke Database
    $query = "INSERT INTO crudlogin (nim, nama, jenis_kelamin, telp, alamat, foto) VALUES ('$nim', '$nama', '$jenis_kelamin', '$telp', '$alamat', '$fotobaru')";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        // Jika Sukses, Lakukan :
        header("location: index.php");
    } else {
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='index2.php'>Kembali Ke Form</a>";
    }
} else {
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='index2.php'>Kembali Ke Form</a>";
}
?>
