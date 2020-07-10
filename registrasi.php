<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sistem Informasi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<style type="text/css">
		body {
			background-size: cover;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-image: url(images/bg1.jpg);
			transition: 1.5s linear;
			-moz-transition: 1.5s linear;
		}
	</style>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var bg = [0, 1, 2, 3, 4];
			var index = 0;
			setInterval(function() {
				index = (index + 1) % bg.length;
				$('body').css('background-image', 'url("images/bg' + index + '.jpg")');
			}, 5000);
		});
	</script>
	<!---->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>
	<!--Login-->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1" style="color: rgba(0,0,0,1);">
						Sign Up
					</span>
				</div>

				<form class="login100-form validate-form" form action="" method="post">
					<div class="dropdown100 validate-input m-b-26">
						<span class="label-input100">Choose</span>
						<select name="role" class="form-control" required>
							<option>Pilih Role</option>
							<?php
							include 'database.php';
							$sql = mysqli_query($connect, "SELECT * FROM roles where role NOT LIKE '%admin%'
							ORDER BY Id_role");
							if (mysqli_num_rows($sql) != 0) {
								while ($row = mysqli_fetch_assoc($sql)) {
									echo '<option value="' . $row['Id_role'] . '">' . $row['Role'] . '</option>';
								}
							}
							?>
						</select>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">ID Number</span>
						<input class="input100" type="number" name="user" placeholder="Enter Your ID Number/NIM">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="example@gmail.com">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div cclass="container-login100-form-btn">
					<button type="submit" class="login100-form-btn" value="Register" name="simpan" class="btn_3">
							Sign Up
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!--Cara Login-->
<div class="limiter">
	<div class="container-login200">
		<div class="wrap-login100">
			<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="login100-form-title-1"  style="color: rgba(0,0,0,1);">
					Sudah Registrasi? 
				</span>
			</div>
			<div>
				<p style="font-size: 17px;text-align: center;">Silahkan Login ke Akun Anda di <a href="login.php" style="font-size: 17px;"><u><b>login.id</b></u></a></p><br>
			</div>
		</div>
	</div>
</div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>

</html>

<?php
include 'database.php';
if (@$_POST['simpan']) {

	@$user = $_POST['user'];
	@$email = $_POST['email'];
	@$passwordold = $_POST['password'];
	@$role = $_POST['role'];
	@$status = "tidak aktif";
	@$date = date("Y-m-d");

	mysqli_query($connect, "INSERT INTO users (Username,Email,Password,Role,Status,Last_login) 
  VALUES ('$user','$email','$passwordold', '$role', '$status', '$date')");
?>
	<script type="text/javascript">
		alert("Your account has been created.");
		window.location.href = "login.php"
	</script>
<?php
}
?>