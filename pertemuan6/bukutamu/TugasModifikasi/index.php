<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Daftar Siswa</h1>
    <?php
    require("koneksi2.php");
    $sql = "SELECT nama, alamat, tgl_lahir FROM tugasmodif";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        ?>
        <table>
            <tr bgColor="#ddcc45">
                <th width="140">Nama</th>
                <th width="200">Alamat</th>
                <th width="200">Tgl_lahir</th>
            </tr>
            <?php
            while (list($nama, $alamat, $tgl_lahir) = mysqli_fetch_array($result)) {
                ?>
<tr>
    <td valign="top"><?php echo $nama; ?></td>
    <td valign="top"><?php echo $alamat; ?></td>
    <td valign="top"><?php echo $tgl_lahir; ?></td>
    <td valign="top">
        <a href="hapus.php?id=<?php echo $id; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus siswa ini?')">Hapus</a>
        <a href="edit.php?id=<?php echo $id; ?>">Edit</a>
    </td>
</tr>

                <?php
            }
            ?>
        </table>
        <?php
    } else {
        ?>
        <div class="no-siswa">
            <i>Belum ada siswa.</i>
        </div>
        <?php
    }
    ?>
    <a href="tambah.php">Tambah Siswa</a>
</body>
</html>
