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
// Load file koneksi.php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$nim = $_GET['nim'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil Data yang Dikirim dari Form
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    // Cek apakah user ingin mengubah fotonya atau tidak
    if (isset($_POST['ubah_foto'])) {
        // Ambil data foto yang dipilih dari form
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];

        // Rename nama fotonya dengan menambahkan tanggal dan jam upload
        $fotobaru = date('dmYHis') . $foto;

        // Set path folder tempat menyimpan fotonya
        $path = "images/" . $fotobaru;

        // Proses upload
        if (move_uploaded_file($tmp, $path)) {
            // Hapus file foto sebelumnya jika ada
            $query = "SELECT foto FROM crudlogin WHERE nim = '$nim'";
            $result = mysqli_query($connect, $query);
            if ($result && $row = mysqli_fetch_assoc($result)) {
                $oldFoto = $row['foto'];
                if (file_exists("images/" . $oldFoto)) {
                    unlink("images/" . $oldFoto);
                }
            }

            // Proses ubah data ke Database
            $query = "UPDATE crudlogin SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', telp = '$telp', alamat = '$alamat', foto = '$fotobaru' WHERE nim = '$nim'";
            $sql = mysqli_query($connect, $query);

            if ($sql) {
                // Jika Sukses, Lakukan :
                header("location: index.php"); // Redirect ke halaman index.php
            } else {
                // Jika Gagal, Lakukan :
                echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                echo "<br><a href='form_ubah.php?nim=$nim'>Kembali Ke Form</a>";
            }
        } else {
            // Jika gambar gagal diupload, Lakukan :
            echo "Maaf, Gambar gagal untuk diupload.";
            echo "<br><a href='form_ubah.php?nim=$nim'>Kembali Ke Form</a>";
        }
    } else {
        // Proses ubah data ke Database tanpa mengubah foto
        $query = "UPDATE crudlogin SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', telp = '$telp', alamat = '$alamat' WHERE nim = '$nim'";
        $sql = mysqli_query($connect, $query);

        if ($sql) {
            // Jika Sukses, Lakukan :
            header("location: index.php"); // Redirect ke halaman index.php
        } else {
            // Jika Gagal, Lakukan :
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href='form_ubah.php?nim=$nim'>Kembali Ke Form</a>";
        }
    }
}
?>
