<?php 

include('../koneksi.php');


if(isset($_GET['nim'])){
	$delete = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim = '".$_GET['nim']."' ");
	echo '<script>window.location="../tabel_mahasiswa.php"</script>';
}

if(isset($_GET['id_bisnis'])){
	$delete = mysqli_query($koneksi, "DELETE FROM bisnis WHERE id_bisnis = '".$_GET['id_bisnis']."' ");
	echo '<script>window.location="../bisnis.php"</script>';
}

if(isset($_GET['id_prodi'])){
	$delete = mysqli_query($koneksi, "DELETE FROM prodi WHERE id_prodi = '".$_GET['id_prodi']."' ");
	echo '<script>window.location="../prodi.php"</script>';
}

if(isset($_GET['id_dosen'])){
	$delete = mysqli_query($koneksi, "DELETE FROM dosen WHERE id_dosen = '".$_GET['id_dosen']."' ");
	echo '<script>window.location="../dosen.php"</script>';
}

if(isset($_GET['id_pelatihan'])){
	$delete = mysqli_query($koneksi, "DELETE FROM pelatihan WHERE id_pelatihan = '".$_GET['id_pelatihan']."' ");
	echo '<script>window.location="../pelatihan.php"</script>';
}


 ?>