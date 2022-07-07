<?php
session_start();
if (!isset($_SESSION['username'])) {
	header("Location: ../admin/index.php");
}

$conn = mysqli_connect("localhost", "root", "", "pidanaumum");
// mengambil data mobil
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TAHAP I</title>
	<link rel="shortcut icon" href="../images/logojaksa.png" type="image/png">

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
	<!-- IonIcons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
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
				<!-- Navbar Search -->
				
				
				
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

			<span class="brand-text font-weight-light">&nbsp &nbsp &nbsp &nbsp &nbspTAHAP I</span>
		</a>

		<!-- Sidebar -->
		<div class="sidebar">
			<!-- Sidebar user panel (optional) -->




			<!-- Sidebar Menu -->
			<nav class="mt-2">
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          	with font-awesome or any other icon font library -->
          	<li class="nav-item menu-open">
          		<a href="#" class="nav-link active">
          			<i class="nav-icon fas fa-tachometer-alt"></i>
          			<p>
          				Home
          				
          			</p>
          		</a>

          	</li>
          	
          	<li class="nav-item">
          		<a href="pengisian.php" class="nav-link">
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
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0"> Selamat Datang <?php echo $_SESSION["username"]; ?> TAHAP I</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="../login/logout.php">Logout</a></li>

					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">

					

						<!-- About Me Box -->
						<div class="card card-primary">
							<div class="card-header">
								<h3 class="card-title">Kejaksaan Negeri Cilacap</h3>
							</div>
							<!-- /.card-header -->
							<div class="card-body">


								<strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

								<p class="text-muted">Jl. Jend. Sudirman No.30, Cilacap, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53200</p>

								<hr>



								<strong><i class="far fa-file-alt mr-1"></i> Telepon</strong>

								<p class="text-muted"> (0282) 533843</p>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
					<!-- /.col -->
					<div class="col-md-9">
						<div class="card">
							<div class="card-header p-2">
								<ul class="nav nav-pills">
									<li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Visi Kejaksaan Negeri Cilacap</a></li>

								</ul>
							</div><!-- /.card-header -->
							<div class="card-body">
								<div class="tab-content">
									<div class="active tab-pane" id="activity">
										<!-- Post -->
										<div class="post">

											<!-- /.user-block -->
											<p>Kejaksaan sebagai lembaga penegak hukum yang bersih, efektif, efisien, transparan, akuntabel, untuk dapat memberikan pelayanan prima dalam mewujudkan supremasi hukum secara profesional, proporsional dan bermartabat yang berlandaskan keadilan, kebenaran, serta nilai – nilai kepautan.</p>
									</div>
									<!-- /.post -->


									<!-- /.col -->
								</div>
								<!-- /.row -->
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->




						<!-- END timeline item -->
						<div>


						</div>

					</div>
				</div>

			</div>
			<!-- /.tab-content -->
		</div><!-- /.card-body -->
		 <!-- Small boxes (Stat box) -->

</section>


<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>
