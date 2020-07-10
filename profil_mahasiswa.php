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
$NIM = $_SESSION['Username'];
$query = mysqli_query($koneksi,"SELECT * FROM mahasiswa inner join users on users.Username=mahasiswa.NIM WHERE NIM = '$NIM'");
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
		  
            <a class="nav-link" href="hal_mahasiswa.php?Username=<?php echo $_SESSION['Username'];?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Akademik <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="profil_mahasiswa.php?Username=<?php echo $_SESSION['Username'];?>">Profil</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="https://elearning.uin-malang.ac.id/">E-learning</a>
          </li>
		  		<li class="nav-item active">
                <a class="nav-link" href="profildosen_mahasiswa.php?Username=<?php echo $_SESSION['Username'];?>">Profil Dosen</a>
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
	  <img src="foto/<?php echo $row_query ['Foto']?>" width="200" class="rounded-circle  img-thumbnail">
        <h3 class="display-5 mt-4"><?php echo $row_query ['Nama_mahasiswa']?>
        </h3>
        <p class="lead"><?php echo $_SESSION['Username'];?></p>
      </div>
    </div>
    <!--Profil-->
    <section id="bio" class="bio mx-5 mb-4">
        
        <h4>Email</h4>
        <p><?php echo $_SESSION['Email'];?></p>
        <h4>Phone Number</h4>
        <p><?php echo $row_query ['No_hp']?></p>
		<h4>Jenis Kelamin</h4>
        <p><?php echo $row_query ['Jenis_kelamin']?></p>
		<h4>Tempat Lahir</h4>
        <p><?php echo $row_query ['Tempat_lahir']?></p>
		<h4>Tanggal Lahir</h4>
        <p><?php echo $row_query ['Tanggal_lahir']?></p>
		<h4>Alamat</h4>
        <p><?php echo $row_query ['Alamat']?></p>

    </section>
    <!--Ubah Profil-->
    <section id="ubah" class="ubah bg-light">
      <div class="container pb-4">
        <div class="rol pt-4 mb-4">
            <div class="col text-center">
                <h2>Change The Profile</h2>

            </div>
        </div>


		<form class="login100-form validate-form" method="post" action="" enctype = "multipart/form-data">
		
		  <div class="form-group">
            <label for="exampleInputPassword1">NIM</label>
            <input type="text" class="form-control" id="exampleInputPassword1" readonly value= "<?php echo $_SESSION['Username'];?>">
          </div>
		  <div class="form-group">
            <label for="exampleInputPassword1">Nama Mahasiswa</label>
            <input type="text" name="nama" class="form-control" id="exampleInputPassword1" value="<?php echo $row_query ['Nama_mahasiswa']?>">
          </div>
		  <div class="form-group">
            <label for="exampleInputPassword1">Jenis Kelamin</label>
            <input type="text" name="kelamin" class="form-control" id="exampleInputPassword1" value="<?php echo $row_query ['Jenis_kelamin']?>">
          </div>
		  <div class="form-group">
            <label for="exampleInputPassword1">Tempat lahir</label>
            <input type="text" name="tempat" class="form-control" id="exampleInputPassword1" value="<?php echo $row_query ['Tempat_lahir']?>">
          </div>
		  <div class="form-group">
            <label for="exampleInputPassword1">Tanggal lahir</label>
            <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1" value="<?php echo $row_query ['Tanggal_lahir']?>">
          </div>
		  <div class="form-group">
            <label for="exampleInputPassword1">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="exampleInputPassword1" value="<?php echo $row_query ['Alamat']?>">
          </div>
          
          <div class="form-group">
            <label for="exampleInputPassword1">No hp</label>
            <input type="text" name="phone" class="form-control" id="exampleInputPassword1" value="<?php echo $row_query ['No_hp']?>">
          </div>
          <div class="form-group">
            <label for="exampleFormControlFile1">Change Picture</label>
            <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1" value="<?php echo $row_query ['Foto']?>">
          </div>
          <button type="submit" class="btn btn-primary" value="change" name="update">Change Profile</button>		  
        </form>
<?php
include 'database.php';

if (@$_POST['update']) {
  $nama = @$_POST['nama'];
  $kelamin = @$_POST['kelamin'];
  $tempat = @$_POST['tempat'];
  $tanggal = @$_POST['tanggal'];
  $alamat = @$_POST['alamat'];
  $phone = @$_POST['phone'];
  
 if (isset ($_POST['update'])) {
  
  $photo = @$_POST['photo'];
  $namafoto=$_FILES['photo']['name'];
  $ext = end(explode('.', $namafoto));
  $NIM = $_SESSION['Username'];
  $name = $NIM. '.' . $ext;
  $lokasifoto=$_FILES['photo']['tmp_name'];
  $file_store = "foto/".$name;
  move_uploaded_file($lokasifoto, $file_store);
 }
  
$NIM = $_SESSION['Username'];
$sql = "select * FROM mahasiswa inner join users on users.Username=mahasiswa.NIM WHERE NIM = '$NIM'";
$query = mysqli_query($koneksi, $sql);
$count = mysqli_num_rows($query);

if($count == 0) {
$sql= "INSERT INTO mahasiswa (NIM, Nama_mahasiswa, Jenis_kelamin, Tempat_lahir, Tanggal_lahir, Alamat, No_hp, Foto) 
VALUES ('$NIM','$nama','$kelamin','$tempat','$tanggal','$alamat','$phone','$name')" ;
}else{
if($name=="" || empty($name)){
$sql="UPDATE mahasiswa SET Nama_mahasiswa='$nama', Jenis_kelamin='$kelamin', Tempat_lahir='$tempat', 
Tanggal_lahir='$tanggal', Alamat='$alamat', No_hp='$phone' WHERE NIM = '$NIM'";
}else{
$sql="UPDATE mahasiswa SET Nama_mahasiswa='$nama', Jenis_kelamin='$kelamin', Tempat_lahir='$tempat', 
Tanggal_lahir='$tanggal', Alamat='$alamat', No_hp='$phone', Foto='$name' WHERE NIM = '$NIM'";
}
}
  mysqli_query($connect, $sql) or die('Gagal menyimpan data');
  echo 'data tersimpan';

?>
<script>
  alert("data tersimpan");
  window.location.href="profil_mahasiswa.php?Username=<?php echo $_SESSION['Username'];?>"

</script>
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