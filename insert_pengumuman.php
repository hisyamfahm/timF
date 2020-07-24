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
session_start();
include 'koneksi.php';
$Username = $_SESSION['Username'];
$query = mysqli_query($koneksi,"SELECT * FROM pengumuman inner join users on users.Username=pengumuman.Username WHERE Username = '$Username'");
?>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
          <a class="navbar-brand">
              <span>Mathematics</span>
          </a>
      <button class="navbar-toggler btn tombol" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
    <!--Ubah Profil-->
    <section id="ubah" class="ubah bg-light">
      <div class="container pb-4">
        <div class="rol pt-4 mb-4">
            <div class="col text-center">
                <h2>Add Announcement</h2>

            </div>
        </div>
		<a href="data_pengumuman.php"> LIHAT DATA PENGUMUMAN</a>
		<form class="login100-form validate-form" method="post" action="" enctype = "multipart/form-data">
	    <div class="form-group">
        <label for="exampleInputPassword1">Id</label>
        <input type="text" name="judul" class="form-control" id="exampleInputPassword1" readonly>
        </div>
		<div class="form-group">
          <label for="exampleInputPassword1">Username</label>
          <input type="text" class="form-control" id="exampleInputPassword1" readonly value="<?php echo $_SESSION['Username'];?>">
          </div>
		  <div class="form-group">
            <label for="exampleInputPassword1">Judul</label>
            <input type="text" name="judul" class="form-control" id="exampleInputPassword1">
          </div>
		  <div class="form-group">
            <label for="exampleInputPassword1">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1">
          </div>
		  <div class="form-group">
            <label for="exampleInputPassword1">Isi</label>
            <input type="text" name="text" class="form-control" id="exampleInputPassword1">
          </div>
          <button type="submit" class="btn btn-primary" value="change" name="update">Add</button>		  
        </form>
<?php
include 'database.php';
  
if (@$_POST['update']) {
  $judul = @$_POST['judul'];
  $text = @$_POST['text'];
  $tanggal = @$_POST['tanggal'];
 
 
$Username = $_SESSION['Username'];
$sql= "INSERT INTO pengumuman (Id_pengumuman, Username, Judul, Isi, Tanggal) 
VALUES ('', '$Username', '$judul','$text','$tanggal')";

mysqli_query($connect, $sql) or die('Gagal menyimpan data');
echo 'data tersimpan';

?>
<?php
}
 ?>
     </div>
    </section>
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