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
$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM agenda WHERE Id_agenda='$id'");
$row_query = mysqli_fetch_array($query);
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
                <h2>Change Agenda</h2>

            </div>
        </div>
		<a href="data_agenda.php">LIHAT SEMUA DATA AGENDA</a>
		<form class="login100-form validate-form" method="post" action="" enctype = "multipart/form-data">
	    <div class="form-group">
        <label for="exampleInputPassword1">Id</label>
        <input type="text" name="judul" class="form-control" id="exampleInputPassword1" readonly value="<?php echo $row_query['Id_agenda']; ?>">
        </div>
		<div class="form-group">
          <label for="exampleInputPassword1">Username</label>
          <input type="text" class="form-control" id="exampleInputPassword1" readonly value= "<?php echo $row_query['Username']; ?>">
          </div>
		  <div class="form-group">
            <label for="exampleInputPassword1">Tempat</label>
            <input type="text" name="tempat" class="form-control" id="exampleInputPassword1" value="<?php echo $row_query['Tempat']; ?>">
          </div>
		  <div class="form-group">
            <label for="exampleInputPassword1">Nama Agenda</label>
            <input type="text" name="agenda" class="form-control" id="exampleInputPassword1" value="<?php echo $row_query['Nama_agenda']; ?>">
          </div>
		  <div class="form-group">
            <label for="exampleInputPassword1">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1" value="<?php echo $row_query['Tanggal']; ?>">
          </div>
		  <div class="form-group">
            <label for="exampleInputPassword1">Dari</label>
            <input type="text" name="dari" class="form-control" id="exampleInputPassword1" value="<?php echo $row_query['Dari']; ?>">
          </div>
          <button type="submit" class="btn btn-primary" value="change" name="update">Change</button>		  
        </form>
<?php
include 'database.php';
  
if (@$_POST['update']) {
  $tempat = @$_POST['tempat'];
  $agenda = @$_POST['agenda'];
  $dari = @$_POST['dari'];
  $tanggal = @$_POST['tanggal'];
  
$sql="UPDATE agenda SET Tempat='$tempat', Nama_agenda='$agenda', Dari='$dari', Tanggal='$tanggal' WHERE Id_agenda = '$id'";
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