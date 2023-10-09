<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $hobi = isset($_POST["hobi"]) ? implode(", ", $_POST["hobi"]) : "";
    $pendidikan = $_POST["pendidikan"];
    $alamat = $_POST["alamat"];

    // Proses unggah berkas
    $upload_folder = "uploads/";
    $file_name = $_FILES["berkas"]["name"];
    $file_tmp = $_FILES["berkas"]["tmp_name"];
    move_uploaded_file($file_tmp, $upload_folder . $file_name);

    echo "<h2>Data yang Anda kirim:</h2>";
    echo "Nama: " . $nama . "<br>";
    echo "NIM: " . $nim . "<br>";
    echo "Jenis Kelamin: " . $jenis_kelamin . "<br>";
    echo "Hobi: " . $hobi . "<br>";
    echo "Pendidikan: " . $pendidikan . "<br>";
    echo "Alamat: " . $alamat . "<br>";
    echo "Berkas Terunggah: " . $file_name . "<br>";
} else {
    echo "Permintaan tidak valid.";
}
?>