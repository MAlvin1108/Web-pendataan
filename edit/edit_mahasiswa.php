<?php 
include('../koneksi.php');
?>
<?php 

$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim = '".$_GET['nim']."'");
$row = mysqli_fetch_array($query);
  

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags --> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


    <title>Form Edit Mahasiswa</title>
  </head>
  <body>
 
 <!-- Form Registrasi -->
  <div class="container">
    <h3 class="text-center mt-3 mb-5">Edit Mahasiswa</h3>
    <div class="card p-5 mb-5">
    <form method="POST" action="">
        <div class="form-group">
          <label for="nim">NIM</label>
          <input type="number" class="form-control" id="nim" name="nim" value="<?php echo $row['nim'] ?>" required>
        </div>
        <div class="form-group">
          <label for="nama">NAMA</label>
          <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama'] ?>" required>
        </div>
        <div class="form-group">
          <label for="alamat">ALAMAT</label>
          <input type="alamat" class="form-control" id="alamat" name="alamat"value="<?php echo $row['alamat'] ?>" required>
        </div>
        <div class="form-group">
          <label for="no_hp">NO HP</label>
          <input type="number" class="form-control" id="no_hp" name="no_hp" value="<?php echo $row['no_hp'] ?>" required>
        </div>
        <div class="form-group">
          <label for="bisnis">bisnis</label>
          <select class="form-control" name="id_bisnis" required>
          <option value="">--Pilih--</option>
						<?php 
							$bisnis = mysqli_query($koneksi, "SELECT * FROM bisnis ORDER BY id_bisnis DESC");
							while($row = mysqli_fetch_array($bisnis)){
						?>
						<option value="<?php echo $row['id_bisnis'] ?>"><?php echo $row['nama_bisnis'] ?></option>
						<?php } ?>
            </select>
        </div>
        <div class="form-group">
          <label for="id_prodi">PRODI</label>
          <select class="form-control" name="id_prodi" required>
          <option value="">--Pilih--</option>
						<?php 
							$prodi = mysqli_query($koneksi, "SELECT * FROM prodi ORDER BY id_prodi DESC");
							while($r = mysqli_fetch_array($prodi)){
						?>
						<option value="<?php echo $r['id_prodi'] ?>"><?php echo $r['prodi'] ?></option>
						<?php } ?>
            </select>
        </div>
        <div class="form-group">
          <label for="id_pelatihan">PELATIHAN</label>
          <select class="form-control" name="id_pelatihan" required>
          <option value="">--Pilih--</option>
						<?php 
							$prodi = mysqli_query($koneksi, "SELECT * FROM pelatihan ORDER BY id_pelatihan DESC");
							while($r = mysqli_fetch_array($prodi)){
						?>
						<option value="<?php echo $r['id_pelatihan'] ?>"><?php echo $r['nama_pelatihan'] ?></option>
						<?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
        <button type="reset" class="btn btn-danger" name="reset">Hapus</button>
    </form>
  <?php 
if(isset($_POST['tambah'])){
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $no_hp= $_POST['no_hp'];
  $id_bisnis = $_POST["id_bisnis"];
  $id_prodi = $_POST["id_prodi"];
  $id_pelatihan = $_POST["id_pelatihan"];

$edit = mysqli_query($koneksi, "UPDATE mahasiswa SET nim='$nim', nama='$nama', alamat='$alamat', no_hp='$no_hp', id_bisnis='$id_bisnis', 
id_prodi='$id_prodi', id_pelatihan='$id_pelatihan' WHERE nim='$nim' ");

if($edit)
	header('location: ../tabel_mahasiswa.php');
else
	echo "Edit Menu Gagal";

}
 ?>
  </div>
  <!-- Akhir Form Registrasi --> 


  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
  </body>
</html>