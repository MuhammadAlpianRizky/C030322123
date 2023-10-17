<?php
$dbname='db_siswa';
$host='localhost';
$password='';
$username='root';
//Koneksi Ke MySQL
$conn = mysqli_connect($host,$username,$password,$dbname);  
//Membuat Koneksi 
if(!$conn){ 
	die("Koneksi Failed : ".mysqli_connect_error()); } 
//Membuat Tabel
$sql ="CREATE TABLE datasiswa (
	nim CHAR(10) NULL,
	nama VARCHAR(25) Null,
	alamat VARCHAR(50) Null,
	telp VARCHAR(15) Null,
  constraint pk_datasiswa primary key(nim)
)";

if (mysqli_query($conn, $sql)){ 
 echo "Table Berhasil di Buat"; 
 } else { 
 echo "Table Gagal di Buat :".mysqli_error($conn); } 
 mysqli_close($conn); 
 ?>

