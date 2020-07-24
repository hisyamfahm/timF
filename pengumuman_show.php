<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--My Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="activity.css">

    <title>Pengumuman</title>
  </head>
  <body class="mt-5">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-md">
            <a class="navbar-brand" href="index.html">
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
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn press btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <div class="container pb-3 pt-3">
          <div class="container">
            <div class="row">
              <div class="col-lg-7">
                  <div class="col">
                      <div class="foto">
<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM pengumuman WHERE Id_pengumuman='$id'");
$row_query = mysqli_fetch_array($query);
?>
                          <h3 class="text-center"><?php echo $row_query['Judul']; ?></h3>
                          <img src="foto/<?php echo $row_query ['Foto']?>" width="100%">

                          <div class="text-style mt-3">
						  <a class="text-dark">file sengkapnya bisa dilihat</a>
						 <a class="text-dark" href="openpdf_pengumuman.php?id=<?php echo $row_query['Id_pengumuman']; ?>">di sini</a><br>
						 <a class="text-dark"><?php echo $row_query['Tanggal']; ?></a><br>
						  <?php echo $row_query['Isi']; ?>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 ml-auto pt-3">
                <div class="row">
				<div>
                  <div class="col">

                      <h4>Pengumuman Terbaru</h4>
                      <div class="pt-3">
<?php 
		include 'koneksi.php';
		$data = mysqli_query($koneksi,"select * from pengumuman order by Id_pengumuman desc limit 4");
		while($d = mysqli_fetch_array($data)){
?>
                        <div>
                          <p><img src="foto/<?php echo $d ['Foto']?>" width="35%" style="float:left;" class="img-fluid"></p>
                        </div>
                        <div class="text">
                         
                           <?php echo $d['Judul']; ?>
                       <br>
						<span><?php echo $d['Tanggal']; ?></span>
						<br>
                        <a href="pengumuman_show.php?id=<?php echo $d['Id_pengumuman']; ?>">Read More</a>
                       </div>
  <?php 
		}
		?>					   
                      </div>
                  </div>
			  </div>
                  <div class="col pt-3">
                    <h4>Berita</h4>
 <?php 
		include 'koneksi.php';
		$data = mysqli_query($koneksi,"select * from berita order by Id_berita desc limit 6");
		while($d = mysqli_fetch_array($data)){
			?>
                        <div class="pengumuman pt-2"><a href="berita_show.php?id=<?php echo $d['Id_berita']; ?>" class="text-dark"><?php echo $d['Judul']; ?></a></div>
  <?php 
		}
		?>
                      
                  </div>
              </div>

              <p>
                <h4>Agenda</h4>
                
									  <?php 
		include 'koneksi.php';
		$data = mysqli_query($koneksi,"select * from agenda order by Id_agenda desc limit 6");
		while($d = mysqli_fetch_array($data)){
			?>
        <div class="pengumuman pt-2"><a href="agenda.php" class="text-dark"><?php echo $d['Tanggal']; ?></a></div>
  <?php 
		}
		?>
              
			  </p>
              </div>
            </div>
          </div>
		  </div>
      </section>
        <div class="row">
            <div class="col">
            </div>
        </div>
    </div>
    <footer class="bg-dark text-white">
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