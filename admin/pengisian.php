<?php
	error_reporting(0);
	
	require 'function/functions.php';

	//cek tombol submit
	if ( isset($_POST["submit"]))
	{

		$data_email['nama'] = $_POST['nama'];
		$data_email['alamat'] = $_POST['alamat'];
		$data_email['no_telp'] = $_POST['no_telp'];
		$data_email['email'] = $_POST['email'];
		$data_email['pasal'] = $_POST['pasal'];
		$data_email['tgl_berkasmasuk'] = $_POST['tgl_berkasmasuk'];
		$data_email['tgl_berakhirtahap_pertama'] = $_POST['tgl_berakhirtahap_pertama'];

		tambah($data_email);
		
		echo "
		<script>
		alert('Data Berhasil Ditambahkan');
		document.location.href='#';
		</script>
		";
	}
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
            <a href="pengisian.php" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Pengisian Berkas
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
            <h1>Form Pengisian Data Tahap I</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../login/logout.php">Logout</a></li>

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form method="POST" action="" enctype="multipart/form-data" >
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="nama">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat"  placeholder="alamat">
                    
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">No.Telp</label>
                    <input type="number" min="0" maxlength="13" class="form-control" id="no_telp" required name="no_telp" >
                  </div>
				  
				  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" id="email" required name="email" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Pasal</label>
                    <input type="text" class="form-control" id="pasal" required name="pasal" >
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Berkas Masuk</label>
                    <input type="date" class="form-control" id="tgl_berkasmasuk" required name="tgl_berkasmasuk" >
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Berakhir Tahap I</label>
                    <input type="date" class="form-control" id="tgl_berakhirtahap_pertama" required name="tgl_berakhirtahap_pertama" >
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

                </div>
              </form>
            </div>

           

      

            

            


        <!-- /.card -->


          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    
    <!-- /.content -->
  </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    bsCustomFileInput.init();
  });
</script>
</body>
</html>
