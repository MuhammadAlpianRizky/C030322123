<!DOCTYPE html>
<html>
<head>
	<title>CRUD Data Siswa</title>
	<style>
		body {
			font-family: Arial, sans-serif;
		}
		h1 {
			text-align: center;
		}
		table {
			width: 100%;
			border-collapse: collapse;
		}
		table, th, td {
			border: 1px solid #ccc;
		}
		th, td {
			padding: 10px;
			text-align: center;
		}
		th {
			background-color: #007bff;
			color: #fff;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
		a {
			text-decoration: none;
			color: #007bff;
		}
		a:hover {
			font-weight: bold;
		}
	</style>
</head>
<body>
	<h1>Data Siswa</h1>
	<a href="index2.php" style="display: block; margin-bottom: 20px; text-align: right;">Tambah Data</a>
	<table>
	<tr>
		<th>Foto</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Telepon</th>
		<th>Alamat</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM crudlogin"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
		echo "<tr>";
		echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
		echo "<td>".$data['nim']."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['jenis_kelamin']."</td>";
		echo "<td>".$data['telp']."</td>";
		echo "<td>".$data['alamat']."</td>";
		echo "<td><a href='form_ubah.php?nim=".$data['nim']."'>Ubah</a></td>";
		echo "<td><a href='proses_hapus.php?nim=".$data['nim']."'>Hapus</a></td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>
