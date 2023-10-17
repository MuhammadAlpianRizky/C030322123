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
			width: 50%;
			margin: 0 auto;
			border-collapse: collapse;
		}
		table, th, td {
			border: 1px solid #ccc;
		}
		th, td {
			padding: 10px;
		}
		input[type="text"], input[type="radio"], textarea {
			width: 100%;
			padding: 5px;
		}
		textarea {
			height: 100px;
		}
		input[type="file"] {
			width: 100%;
			padding: 5px;
		}
		input[type="checkbox"] {
			margin-right: 5px;
		}
		.btn-container {
			text-align: center;
		}
		.btn-container input {
			background-color: #007bff;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 3px;
			cursor: pointer;
		}
		.btn-container input[type="button"] {
			background-color: #ccc;
		}
		.btn-container input[type="button"]:hover {
			background-color: #999;
		}
	</style>
</head>
<body>
	<h1>Ubah Data Siswa</h1>
	
	<?php
	// Load file koneksi.php
	include "koneksi.php";

	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$nim = $_GET['nim'];

	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM crudlogin WHERE nim='".$nim."'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>

	<form method="post" action="proses_ubah.php?nim=<?php echo $nim; ?>" enctype="multipart/form-data">
		<table cellpadding="8">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
			<?php
			if($data['jenis_kelamin'] == "Laki-laki"){
				echo "<input type='radio' name='jenis_kelamin' value='laki-laki' checked='checked'> Laki-laki";
				echo "<input type='radio' name='jenis_kelamin' value='perempuan'> Perempuan";
			}else{
				echo "<input type='radio' name='jenis_kelamin' value='laki-laki'> Laki-laki";
				echo "<input type='radio' name='jenis_kelamin' value='perempuan' checked='checked'> Perempuan";
			}
			?>
			</td>
		</tr>
		<tr>
			<td>Telepon</td>
			<td><input type="text" name="telp" value="<?php echo $data['telp']; ?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td>
				<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
				<input type="file" name="foto">
			</td>
		</tr>
		</table>
		
		<div class="btn-container">
			<input type="submit" value="Ubah">
			<a href="index.php"><input type="button" value="Batal"></a>
		</div>
	</form>
</body>
</html>
