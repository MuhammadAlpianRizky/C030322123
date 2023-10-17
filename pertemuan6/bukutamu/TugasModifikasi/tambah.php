<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Siswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Tambah Siswa</h1>
    <a href="index.html">Kembali</a>
    <form action="proses_tambah.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat" required>
        <label for="tgl_lahir">Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir" required>
        <button type="submit" name="tambah">Tambah</button>
    </form>
</body>
</html>
