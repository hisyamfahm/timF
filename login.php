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
	$(document).ready(function(){
	var bg=[0,1,2,3,4];
	var index=0;
	setInterval(function(){
	index=(index + 1) % bg.length;
	$('body').css('background-image','url("images/bg'+index+'.jpg")');
	},5000);
	});
</script>	
<!---->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
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
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Sistem Informasi 
						<br>Jurusan Matematika
					</span>
				</div>

<?php
if(isset($_GET['pesan'])){
if($_GET['pesan']=="gagall"){
echo "<div class='alert'>Maaf anda belum diverifikasi oleh admin !</div>";
}
}
?>				
<?php
if(isset($_GET['pesan'])){
if($_GET['pesan']=="gagal"){
echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
}
}
?>
				<div class="login100-form validate-form">
				<form action="cek_login.php" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username" required="required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password" required="required">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn" name="login" value="Login">	
					</div>
					</form>
					</div>
			</div>
		</div>
	</div>	

<!--Cara Login-->
<div class="limiter">
	<div class="container-login200">
		<div class="wrap-login100">
			<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="login100-form-title-1">
					Belum Punya Akun? 
				</span>
			</div>
			<div>
				<p style="margin-left: 12px; font-size: 17px;">Silahkan Mendaftar Akun Anda di: <a href="registrasi.php" style="font-size: 17px;"><u>register.id</u></a></p><br>
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