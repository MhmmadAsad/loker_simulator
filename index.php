<?php session_start(); ?>
<html>
<head>
	<title>Login | Loker Simulator</title>
	<link rel="stylesheet" type="text/css" href="assets/css/icons.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="card col-md-5 mt-5">
		<h4 class="p-2 mt-3 text-center"><i class="ti ti-key"></i> Login Account</h4>

		<div style="font-family:Barlow">
			<?= (isset($_SESSION['message']) ? $_SESSION['message']:null);unset ($_SESSION['message']);?>
		</div>

		<div class="card-content p-2">
			<form action="sistem/login.php" method="POST" id="formlogin" name="formlogin">
				<div class="form-group row">
					<label class="col-sm-1 col-form-label"><i class="fa fa-user-o"></i></label>
					<div class="col-sm-11">
						<input type="text" name="username" placeholder="Enter Username" class="form-control" autocomplete="off" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-1 col-form-label"><i class="ti ti-lock"></i></label>
					<div class="col-sm-11">
						<div class="input-group">
							<input type="password" name="password" placeholder="Enter Password" class="form-control" autocomplete="off" required>
							<div class="input-group-append">
								<span id="btn_view" class="input-group-text" onclick="view()"><i class="fa fa-eye"></i></span>
								<span id="btn_hide" class="input-group-text" onclick="hide()"><i class="fa fa-eye-slash"></i></span>
							</div>
						</div>
					</div>
				</div>
				<button type="submit" name="submit" class="btn text-white w-100 mb-4" style="background-color:#4a69bb ">Login Now</button>
			</form>
		</div>
	</div>
</body>
</html>  


