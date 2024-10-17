<?php 
include('../koneksi.php');
?>
<?php 

$query = mysqli_query($koneksi, 'SELECT * FROM bisnis');
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


    <title>Form Edit Bisnis</title>
  </head>
  <body>
 
 <!-- Form Registrasi -->
  <div class="container">
    <h3 class="text-center mt-3 mb-5">Edit Bisnis</h3>
    <div class="card p-5 mb-5">
      <form method="POST" action="" >
        <div class="form-group">
          <label for="id_bisnis">ID BISNIS</label>
          <input type="text" class="form-control" id="id_bisnis" name="id_bisnis" value="<?php echo $result['id_bisnis'] ?>" readonly>
        </div>
        <div class="form-group">
          <label for="nama_bisnis">NAMA BISNIS</label>
          <input type="text" class="form-control" id="nama_bisnis" name="nama_bisnis" value="<?php echo $result['nama_bisnis'] ?>" required>
        </div>
        <div class="form-group">
          <label for="ket">KETERANGAN</label>
          <input type="text" class="form-control" id="ket" name="ket" value="<?php echo $result['ket'] ?>" required>
        </div><br>
        <button type="submit" class="btn btn-primary" name="tambah">Edit</button>
        <button type="reset" class="btn btn-danger" name="reset">Hapus</button>
  </div>
  <?php 
if(isset($_POST['tambah'])){
$id_bisnis = $_POST['id_bisnis'];
$nama_bisnis = $_POST['nama_bisnis'];
$ket = $_POST['ket'];

$edit = mysqli_query($koneksi, "UPDATE bisnis SET id_bisnis='$id_bisnis', nama_bisnis='$nama_bisnis', ket='$ket' WHERE id_bisnis='$id_bisnis'");

if($edit)
	header('location: ../bisnis.php');
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