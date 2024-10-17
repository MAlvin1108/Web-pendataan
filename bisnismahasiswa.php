<?php 
	session_start();
	if($_SESSION['login_user'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>
<?php 
include 'koneksi.php';
?>
<!DOCTYPE php>
<php lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-warning bg-warning">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Home</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">DATA TABEL</div>
                            <a class="nav-link" href="tabel_mahasiswa.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Data Mahasiswa
                            </a>
                            <a class="nav-link" href="prodi.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                                Data Prodi
                            </a>
                            <a class="nav-link" href="pelatihan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                                Data Pelatihan
                            </a>
                            <a class="nav-link" href="dosen.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-circle"></i></div>
                                Data Dosen
                            </a>
                            <a class="nav-link" href="bisnis.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                                Data Bisnis
                            </a>
                            <div class="sb-sidenav-menu-heading">DATA BISNIS DAN PELATIHAN</div>
                            <a class="nav-link" href="bisnismahasiswa.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                                Data Mahasiswa Yang Mempunyai Bisnis
                            </a>
                            <a class="nav-link" href="pelatihanmahasiswa.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                                Data Mahasiswa Yang Mengikuti Pelatihan
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Mahasiswa Yang Mempunyai Bisnis
                            </div>
                            <div class="col-4-md">
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th width="60px">No</th>
							                <th>NIM</th>
                                            <th>NAMA</th>
							                <th>NAMA BISNIS</th>
                                            <th>KETERANGAN</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th width="60px">No</th>
                                            <th>NIM</th>
                                            <th>NAMA</th>
							                <th>NAMA BISNIS</th>
                                            <th>KETERANGAN</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
							$no = 1;
							$mahasiswa = mysqli_query($koneksi, "SELECT mahasiswa.nim, mahasiswa.nama, bisnis.nama_bisnis, bisnis.ket
                            FROM mahasiswa INNER JOIN bisnis ON mahasiswa.id_bisnis=bisnis.id_bisnis
                            WHERE mahasiswa.id_bisnis=bisnis.id_bisnis");
							if(mysqli_num_rows($mahasiswa) > 0){
							while($row = mysqli_fetch_assoc($mahasiswa)){
						    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $row['nim'] ?></td>
                                            <td><?php echo $row['nama'] ?></td>
                                            <td><?php echo $row['nama_bisnis'] ?></td>
                                            <td><?php echo $row['ket'] ?></td>
                                        </tr>
                                        <?php }}else{ ?>
							<tr>
								<td colspan="7">Tidak ada data</td>
							</tr>
						<?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-warning mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</php>
