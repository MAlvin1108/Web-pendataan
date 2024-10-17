<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "tugasdatabase"; 

$koneksi = mysqli_connect($host, $user, $pass, $db);

	if (!$koneksi) {
		die("Koneksi Gagal:".mysqli_connect_error());
	}
 ?>