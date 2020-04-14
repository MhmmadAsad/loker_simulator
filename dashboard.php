<?php 
session_start();
if($_SESSION['username'] == ""){
	header('location:index.php');
}
?>
<html>
<head>
	<title>Dashboard | Loker Simulator</title>
	<link rel="stylesheet" type="text/css" href="assets/css/icons.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body style="background-color:#f3f3f3">
	<div class="sidebar fixed-top h-100 text-white" id="nav">
		<ul class="nav flex-column">
			<li class="mt-2">
				<center>	
					<span class="top"><b>Daun Biru <br> Engineering</b></span><br>
					<p>Loker Admin | Simulator</p>
				</center>
			</li>
			<li>
				<h5><i class="fa fa-user-circle"></i> <?= $_SESSION['username']; ?></h5>
			</li>	
			<!-- Navigation -->
			<small>Getting Started</small>
			<li class="nav-item mt-1">
				<a href="dashboard.php" class="nav-link aktif "><i class="ti ti-home pr-1"></i> Dashboard </a>
			</li>
			<li class="nav-item">
				<a href="sistem/logout.php" class="nav-link "><i class="fa fa-fw fa-sign-out "></i> Logout </a>
			</li>
		</ul>
	</div>	

	<div class="navbar float-right">
		<span>Dashboard</span>
	</div>

	<div class="content">
		<div class="container">
			<h5><i class="ti ti-plus"></i><b> Tambah Data </b></h5><br>
			<hr class="mb-3" style="margin-top:-15px;">

			<form action="sistem/proses.php" method="POST" class="mb-0">
				<div class="form-row">
					<div class="col-sm-3">
						<div class="form-group">	
							<label><b>Serial Number</b></label><br>
							<input type="search" placeholder="Enter Serial Number" autocomplete="off" name="i" class="form-control">
						</div>
					</div>
					<div class="col-sm-3 ml-1">
						<div class="form-group">
							<label><b>Data Flag</b></label><br>
							<select name="f" class="form-control">
								<option disabled="" selected="">Enter Flag</option>
								<option value="0">0</option>
								<option value="1">1</option>
							</select>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="form-group">
							<input class="btn btn-success mr-2 w-25 mb-0" value="Tambah Data" type="submit" name="submit">                
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- Tutup Content  -->

	<!-- Footer -->
	<div class="footer float-right">
		Copyright &copy; <?= date('Y'); ?> <font color="#4a69bb"><b>Daun Biru Engineering</b></font>. All rights reservered	
	</div>

	<script src="assets/js/jquery-3.4.1.slim.min.js" ></script>
	<script src="assets/js/bootstrap.min.js"></script>	

</body>
</html>