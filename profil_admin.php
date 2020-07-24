<?php
  session_start();
  if(!isset($_SESSION['Login']) or !$_SESSION['Login']){
    header ('location:login.php?pesan='.base64_encode("Anda belum login"));
    die();
  }
  else if($_SESSION['Role']!=1){
    header ('location:index.php?pesan='.base64_encode("Anda bukan Admin"));
    die(); 
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--My CSS-->
    <link rel="stylesheet"  href="profil.css">

    <!--My Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    
    <title>Sistem Informasi Jurusan Matematika</title>
  </head>
  <body class="mt-5">
<?php
  include 'koneksi.php';
  $Id_admin = $_SESSION['Username'];
  $sql = "select * FROM admin inner join users on users.Username=admin.Id_admin WHERE Id_admin = '$Id_admin'";
  $query = mysqli_query($koneksi, $sql);
  $row_query = mysqli_fetch_array($query);
?>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
          <a class="navbar-brand" href="#">
              <span>Mathematics</span>
          </a>
      <button class="navbar-toggler btn tombol" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php?Username=<?php echo $_SESSION['Username'];?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Akademik <span class="sr-only">(current)</span></a>
          </li>
		  <li class="nav-item active">
          <a class="nav-link" href="verification.php">Verifikasi</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="profil_admin.php?Username=<?php echo $_SESSION['Username'];?>">Profil</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="https://elearning.uin-malang.ac.id/">E-learning</a>
          </li>
				<li class="nav-item active">
                <a class="nav-link" href="profildosen.php?Username=<?php echo $_SESSION['Username'];?>">Profil Dosen</a>
                </li>
          <li class="nav-item active">
            <a class="nav-link" href="logout.php">Logout</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2 press" type="search" placeholder="Search" aria-label="Search">
          <button class="btn press btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
    <!--Jumbotron-->
    <div class="jumbotron jumbotron-fluid bg-dark text-white pb-4">
      <div class="container text-center">
	  <img src="img/admin.png" width="200" class="rounded-circle  img-thumbnail">
        <h3 class="display-5 mt-4"><?php echo $row_query ['Nama_admin']?>
        </h3>
        <p class="lead"><?php echo $_SESSION['Username'];?></p>
      </div>
    </div>

    <!--Ubah Profil-->
    <section id="ubah" class="ubah bg-light">
      <div class="container pb-4">
        <div class="rol pt-4 mb-4">
            <div class="col text-center">
                <h2>Change The Profile</h2>
            </div>
        </div>
		<form class="login100-form validate-form" method="post" action="">
          <div class="form-group">
            <label for="exampleInputPassword1">Username</label>
            <input type="text" class="form-control" id="exampleInputPassword1" readonly value= "<?php echo $_SESSION['Username'];?>">
          </div>
		  <div class="form-group">
            <label for="exampleInputPassword1">Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
          </div>
		  <div class="form-group">
          <button type="submit" class="btn btn-primary" value="change" name="update">Add Profile</button>
		 </div>
<?php
include 'database.php';

if (@$_POST['update']) {
  $nama = @$_POST['nama'];

if (!empty($nama))
{ 
$Id_admin = $_SESSION['Username'];
$sql = "select * FROM admin inner join users on users.Username=admin.Id_admin WHERE Id_admin = '$Id_admin'";
$query = mysqli_query($koneksi, $sql);
$count = mysqli_num_rows($query);

if($count == 0) {
$sql= "INSERT INTO admin (Id_admin, Nama_admin) VALUES ('$Id_admin','$nama')";
}else{
$sql="UPDATE admin SET Nama_admin='$nama' WHERE Id_admin = '$Id_admin'";
}
	mysqli_query($connect, $sql) or die('Gagal menyimpan data');
    echo 'data tersimpan';
}
else
{
die("Maaf, anda harus mengisi nama"); 
}
?>
<script>
  alert("data tersimpan");
  window.location.href="profil_admin.php?Username=<?php echo $_SESSION['Username'];?>"

</script>
<?php
}
 ?>
    </form>
    </div>
    </section>
	    <div class="container pb-4">
      <div class="row pt-4 mb-4">
        <div class="col text-center">
          <h2>Adding Admin</h2>
        </div>
      </div>
				<form action="" method="post">
					<div class="form-group">
						<label for="exampleInputPassword1">Choose</label>
						<select class="form-control" name="role" required>
							<option>Pilih Role</option>
							<?php
							include 'database.php';
							$sql = mysqli_query($connect, "SELECT * FROM roles where role LIKE '%admin%'
							ORDER BY Id_role");
							if (mysqli_num_rows($sql) != 0) {
								while ($row = mysqli_fetch_assoc($sql)) {
									echo '<option value="' . $row['Id_role'] . '">' . $row['Role'] . '</option>';
								}
							}
							?>
						</select>
					</div>

					<div class="form-group">
						<label class="form-group">ID Number</label>
						<input type="text" name="user" class="form-control" id="exampleInputPassword1">
					</div>

					<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					</div>
					<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
					</div>
					<div>
						<button type="submit" value="Register" name="simpan" class="btn btn-primary">
							Sign Up
						</button>
					</div>
				</form>
</div>
<?php
include 'database.php';
if (@$_POST['simpan']) {

	@$user = $_POST['user'];
	@$email = $_POST['email'];
	@$passwordold = $_POST['password'];
	@$role = $_POST['role'];
	@$status = "aktif";
	@$date = date("Y-m-d");

	mysqli_query($connect, "INSERT INTO users (Username,Email,Password,Role,Status,Last_login) 
  VALUES ('$user','$email','$passwordold', '$role', '$status', '$date')");
?>
	<script type="text/javascript">
		alert("Your account has been created.");
		window.location.href = "profil_admin.php?Username=<?php echo $_SESSION['Username'];?>"
	</script>
<?php
}
?>

    <!--Footer-->
    <footer class="bg-dark text-white">
      <div class="container">
          <div class="row pt-3">
              <div class="col text-center">
                  <p>Copyright © matematika.uin-malang.ac.id</p>
              </div>
          </div>
      </div>
  </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>