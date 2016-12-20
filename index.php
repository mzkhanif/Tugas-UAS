<?php 
//KONFIGURASI
//$url = "http://localhost/coba/tgl13/";
$hostDB		= "localhost";
$usernameDB = "root";
$passwordDB = "";
$namaDB		= "pendaftaran";

//koneksi ke database
$con = mysqli_connect($hostDB,$usernameDB,$passwordDB,$namaDB);

//cek koneksi
if(mysqli_connect_errno())
{
	echo "KONEKSI GAGAL";
	die;
}
//AKSES DATABASE
include ("models/database.php");

//memanggil database
$database = new database;

//AKSES CONTROLLERS
include ("controllers/controllers.php");



?>