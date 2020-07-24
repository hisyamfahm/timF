<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css2/bootstrap.css">
    <link rel="stylesheet" href="css2/bootstrap.min.css">
    <link rel="stylesheet" href="css2/bootstrap-grid.css">
    <link rel="stylesheet" href="css2/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css2/bootstrap-reboot.css">
    <link rel="stylesheet" href="css2/bootstrap-reboot.min.css">
    <!--My CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="agenda.css">
    
    <!--My Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <title>Agenda</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-md">
            <a class="navbar-brand">
                <span>Mathematics</span>
            </a>
        <button class="navbar-toggler btn tombol" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Akademik <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="https://elearning.uin-malang.ac.id/">E-learning</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control press mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn press btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
        </div>
    </nav>

    <!--Agenda-->
    <div class="jumbotron jumbotron-fluid bg-dark text-white mb-6">
        <div class="container">
          <h1 class="display-5 text-center pt-4">Agenda</h1>
        </div>
    </div>
    <div class="container mb-3">
      <div class="row">
        <div class="col-md-8">
          <div class="title p-0">
	<table>
<?php 
		include 'koneksi.php';

		$data = mysqli_query($koneksi,"select * from agenda");
		while($d = mysqli_fetch_array($data)){

			?>
            <tr><h4 class="mt-1"><?php echo $d['Nama_agenda']; ?></h4>
            <h4 class="mt-1">From: <?php echo $d['Dari']; ?></h4>
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <a class="title"><?php echo $d['Tanggal']; ?></a><br>
            <i class="fa fa-user fa-1x" aria-hidden="true"></i>
            <a class="text-dark title100"><?php echo $d['Tempat']; ?></a></tr>
  <?php 
		}
		?>
</div>
      </div>
	  </div>
</table>
          </div>
        <div class="col-md-4">
          <div class="arsip">
            <h3>Link</h3>
            <p><a href="https://uin-malang.ac.id/" class="text-dark">UIN Maliki Malang</a></p>
            <p><a href="https://saintek.uin-malang.ac.id/" class="text-dark">Fakultas Sains dan Teknologi</a></p>
            <p><a href="http://matematika.uin-malang.ac.id/" class="text-dark">Jurusan Matematika</a></p>
          </div>
          <div class="arsip">
            <h3>Pengumuman</h3>
			<?php 
		include 'koneksi.php';
		$data = mysqli_query($koneksi,"select * from pengumuman");
		while($d = mysqli_fetch_array($data)){
			?>
                        <p><a href="pengumuman_show.php?id=<?php echo $d['Id_pengumuman']; ?>" class="text-dark"><?php echo $d['Judul']; ?></a></p>
  <?php 
		}
		?>
          </div>
        </div>
      </div>
    </div>

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