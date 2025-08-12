<?php 
include '../koneksi.php';
?>

<?php 

$query = mysqli_query($koneksi, 'SELECT * FROM pelatihan');
$result = mysqli_fetch_array($query);
  

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

    <title>Form Tambah Data Pelatihan</title>
  </head>
  <body>
 
 <!-- Form  -->
  <div class="container">
    <h3 class="text-center mt-3 mb-5">Tambah Data Pelatihan</h3>
    <div class="card p-5 mb-5">
      <form method="POST" action="">
        <div class="form-group">
        <label for="id_pelatihan">ID PELATIHAN</label>
          <input type="text" class="form-control" id="id_pelatihan" name="id_pelatihan">
        </div>
        <div class="form-group">
          <label for="nama_pelatihan">NAMA PELATIHAN</label>
          <input type="text" class="form-control" id="nama_pelatihan" name="nama_pelatihan" required>
        </div>
        <div class="form-group">
          <label for="kategori">KATEGORI</label>
          <input type="text" class="form-control" id="kategori" name="kategori" required>
        </div>
        <div class="form-group">
          <label for="jadwal">JADWAL</label>
          <input type="date" class="form-control" id="jadwal" name="jadwal" required>
        </div>
        <div class="form-group">
          <label for="dosen">dosen</label>
          <select class="form-control" name="id_dosen" required>
          <option value="">--Pilih--</option>
						<?php 
							$dosen = mysqli_query($koneksi, "SELECT * FROM dosen ORDER BY id_dosen DESC");
							while($row = mysqli_fetch_array($dosen)){
						?>
						<option value="<?php echo $row['id_dosen'] ?>"><?php echo $row['nama_dosen'] ?></option>
						<?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
        <button type="reset" class="btn btn-danger" name="reset">Hapus</button>
      </form>

      <?php 
  if(isset($_POST['tambah'])){
    $id_pelatihan = $_POST['id_pelatihan'];
    $nama_pelatihan = $_POST["nama_pelatihan"];
    $kategori = $_POST['kategori'];
    $jadwal = $_POST['jadwal'];
    $dosen = $_POST['id_dosen'];
 
    $insert = mysqli_query($koneksi, "INSERT INTO pelatihan VALUES ($id_pelatihan, '$nama_pelatihan', '$kategori', '$jadwal', '$dosen')");

    if($insert){
      header("location: ../pelatihan.php");
    }
    else {
      echo "Maaf, terjadi kesalahan saat mencoba menyimpan data ke database";
    }
  }

   ?>

  </div>
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