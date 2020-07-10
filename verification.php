<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"  href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <title>Verification</title>
  </head>
  <body>
<?php
session_start();
include 'koneksi.php';
$Username = $_SESSION['Username'];
$query = mysqli_query($koneksi,"SELECT * FROM mahasiswa inner join users on users.Username=admin.Id_admin WHERE Id_admin = '$Username'");
?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-md">
        <a class="navbar-brand" href="#"><span>Mathematics</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                <a class="nav-link" href="hal_admin.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="#">Akademik</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="profil_admin.php?Username=<?php echo $_SESSION['Username'];?>">Profil</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="https://elearning.uin-malang.ac.id/">E-Learning</a>
                </li>
				<li class="nav-item active">
                <a class="nav-link" href="dosenall.php?Username=<?php echo $_SESSION['Username'];?>">Profil Dosen</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control press mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
    <section>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col pt-5">
				<form method="post" action="" >
                    <table class="table table-bordered">
                        <thead class="thead-dark">
					<tr><th>No</th>
						<th>Username</th>
						<th>Email</th>
						<th>Role</th>
						<th>Status</th>
						<th>Last login</th>
						<th>Verifikasi</th></tr>
                        </thead>
                        <tbody>

		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from users join roles on users.role=roles.id_role");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['Username']; ?></td>
				<td><?php echo $d['Email']; ?></td>
				<td><?php echo $d['Role']; ?></td>
				<td><?php echo $d['Status']; ?></td>
				<td><?php echo $d['Last_login']; ?></td>
				<td>
				<a>
                <?php if($d['Status']=="tidak aktif"){ ?>
                <button class="btn btn-success" type="submit" value="change" name=<?php echo $no; ?>>Aktifkan</button></a>
                <?php } else { ?>
                <button class="btn btn-warning" type="submit" value="change" name=<?php echo $no; ?>>Non-Aktifkan</button></a><?php } ?>
				<?php
					include 'koneksi.php';
					if (@$_POST[$no]){
					$user = $d['Username'];
					$sql="UPDATE users SET Status='aktif' WHERE Username='$user' AND Status='tidak aktif'";
					mysqli_query($koneksi, $sql); 
					}
				?>
				</td>
			</tr>
			<?php 
		}
		?>
                        </tbody>
                      </table>
					  	</form>
                </div>
            </div>
        </div>
    </div>
    </section>

    <footer class="bg-dark text-white footer">
        <div class="container">
            <div class="row">
                <div class="col text-center pt-2">
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