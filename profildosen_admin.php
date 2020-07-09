<!DOCTYPE html>
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
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"  href="new1.css">
    <title>Profil Dosen</title>
</head>
<body>
<?php
session_start();
include 'koneksi.php';
$Username = $_SESSION['Username'];
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
	<br>
	<br>
<div class="container">
<?php 
		include 'koneksi.php';
		$kolom = 3;
		$i = 0;

		$data = mysqli_query($koneksi,"select * from dosen inner join users on users.Username=dosen.NIP WHERE Role='2'");
		while($d = mysqli_fetch_array($data)){
			if ($i>=  $kolom) {
				echo "<tr></tr>";
				$i = 0;
			}
			$i++;
			?>
  <div class="card">
    <img src="foto/<?php echo $d['Foto']?>"    alt="Person" class="card__image">
    <a class="card__name"><?php echo $d['Nama_dosen']; ?></a>
    <div class="grid-container">

      <div class="grid-child-posts">
        NIP<br>
		Email<br>
		Status Jabatan<br>
		Bidang Kajian<br>
		Jenis Kelamin<br>
		Tempat Lahir<br>
		Tanggal Lahir<br>
		Alamat<br>
		No Hp</td>
      </div>

      <div class="grid-child-followers">
        : <?php echo $d['NIP']; ?><br>
		: <?php echo $d['Email']; ?><br>
		: <?php echo $d['Nama_dosen']; ?><br>
		: <?php echo $d['Status_jabatan']; ?><br>
		: <?php echo $d['Jenis_kelamin']; ?><br>
		: <?php echo $d['Tempat_lahir']; ?><br>
		: <?php echo $d['Tanggal_lahir']; ?><br>
		: <?php echo $d['Alamat']; ?><br>
		: <?php echo $d['No_hp']; ?>
      </div>

    </div>
  </div>

  <?php 
		}
		?>
</div>
    </section>
	<br>
	<br>
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
	<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_css_profile_card by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Jul 2018 02:09:43 GMT -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>


</html>