<?php
    include "../admin/koneksi.php";
    $server=$_SERVER['PHP_SELF'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tahap I</title>
  <link rel="shortcut icon" href="../images/logojaksa.png" type="image/png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">TAHAP I KEJAKSAAN NEGERI CILACAP</a>
        </li>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">


        <li class="nav-item">

          <i><img src="../images/logokejari.png" style="width: 100px;"></i>
        </a>
      </li>


    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">

      <span class="brand-text font-weight-light">&nbsp &nbsp &nbsp &nbsp &nbspTahap I</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->




      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                 Home

               </p>
             </a>

           </li>

           <li class="nav-item">
            <a href="pengisianberkas.php" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Pengisian Berkas

              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="nav-icon fas fa-copy"></i>
              <p>
                Sms Gateway

              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Pengisian Tahap I</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../login/logout.php">Logout</a></li>

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <form enctype="multipart/form-data" action="<?php echo $server;?>" method="post">
                          <div class="mb-3">
                            <label for="id" class="form-label">Id</label>
                            <input type="text" class="form-control" id="textfield" name="id" placeholder="Input Id">
                          </div>

                          <div class="mb-3">
                            <label for="nama" class="form-label">Nama Terdakwa</label>
                            <input type="text" class="form-control" id="textfield" name="nama" placeholder="Input Nama Terdakwa">
                          </div>

                          <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="textfield" name="alamat" placeholder="Input Id Alamat">
                          </div>

                          <div class="mb-3">
                            <label for="no_telp" class="form-label">No Telp</label>
                            <input type="text" class="form-control" id="textfield" name="no_telp" placeholder="Input No. Telp">
                          </div>

                          <div class="mb-3">
                            <label for="pasal" class="form-label">Pasal</label>
                            <input type="text" class="form-control" id="textfield" name="pasal" placeholder="Input Total Transaksi">
                          </div>

                          <div class="mb-3">
                            <label for="tgl_berkasmasuk" class="form-label">Tanggal Berkas Masuk</label>
                            <input type="date" class="form-control" id="textfield" name="tgl_berkasmasuk" placeholder="Input Tanggal Berkas Masuk">
                          </div>


                          <div class="mb-3">
                            <label for="tgl_berakhir tahap I" class="form-label">Tanggal Akhir Tahap I</label>
                            <input type="date" class="form-control" id="textfield" name="tgl_berakhir tahap I" placeholder="Input Nama Terdakwa">
                          </div>


                          <button type="submit" class="btn btn-primary">Submit</button>
                           <a href="../admin/index.html" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">Kembali</a>
                    </form>
                    <?php 
              $id = !empty($_POST['id']) ? $_POST['id'] : '';
              $nama = !empty($_POST['nama']) ? $_POST['nama'] : '';
              $alamat = !empty($_POST['alamat']) ? $_POST['alamat'] : '';
              $id_kategori = !empty($_POST['id_kategori'])? $_POST['id_kategori'] : '';
              $no_telp = !empty($_POST['no_telp']) ? $_POST['no_telp'] : '';
              $pasal = !empty($_POST['pasal']) ? $_POST['pasal'] : '';
              $tgl_berkasmasuk = !empty($_POST['tgl_berkasmasuk']) ? $_POST['tgl_berkasmasuk'] : '';
               
              $masuk = "INSERT INTO tb_pengisianberkas (id, nama, alamat, id_kategori, no_telp, pasal, tgl_berkasmasuk, tgl_berakhir tahap I) VALUES ('$id' , '$nama', '$alamat', '$id_kategori', '$no_telp', '$pasal', '$tgl_berkasmasuk', 'tgl_berakhir tahap I')";
              $hasil = $mysqli->query($masuk);

               ?>
                    
                        </div> 
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>