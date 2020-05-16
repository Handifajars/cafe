<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login Aplikasi Resto and Cafe</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>template/login/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/login/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/login/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/login/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/login/css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post">
					<span class="login100-form-title p-b-34">
						Account Login
					</span>

					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type user name">
						<input id="first-name" class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" value="Login">
							Login
						</button>
					</div>

					<div class="container-login100-form-btn">
						<button class="btn btn-light" type="submit" value="register">
							<a data-toggle="modal" data-target="#register" href="#">register</a>
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							User name / password?
						</a>
					</div>

					<div class="w-full text-center">
						<a href="#" class="txt3">
							Sign Up
						</a>
					</div>
				</form>
				<!-- 				<form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Username</label>
				    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				  	</div>
				  	<div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
				  </div>
				  <button input type="submit" class="btn btn-primary" value="Login">Login</button>
				</form> -->
				<div class="login100-more" style="background-image: url('<?php echo base_url() ?>/template/login/images/bg-01.jpg');"></div>
			</div>
		</div>
	</div>
	<!-- modal -->
	<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" id="myModalLabel">Buat Pesanan Reservasi</h3>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
				</div>
				<form class="form-horizontal" action="<?php echo base_url(); ?>login/add_user" method="POST">
					<div class="modal-body">
						<div class="form-group">
							<label class="control-label col-xs-3">Nama / username</label>
							<div class="col-xs-8">
								<input name="nama" class="form-control" type="text" placeholder="Nama" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-3">Password</label>
							<div class="col-xs-8">
								<input name="password" class="form-control" type="password" placeholder="paswword" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-3">No HP</label>
							<div class="col-xs-8">
								<input name="no_hp" class="form-control" type="text" placeholder="No HP" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-3">alamat</label>
							<div class="col-xs-8">
								<input name="alamat" class="form-control" type="text" placeholder="Alamat" required>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-xs-3">Kenlamin</label>
							<div class="col-xs-8">
								<input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="L">Laki - Laki
								<input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="P">Perempuan
								<input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="B">Lain - Lain
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
							<button class="btn btn-info">Pesan</button>
						</div>
				</form>
			</div>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>template/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>template/login/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>template/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url() ?>template/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>template/login/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>template/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url() ?>template/login/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>template/login/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>template/login/js/main.js"></script>

</body>

</html>