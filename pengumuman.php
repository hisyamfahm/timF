<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css2/bootstrap.css"">
    <link rel="stylesheet" href="css2/bootstrap.min.css"">
    <link rel="stylesheet" href="css2/bootstrap-grid.css"">
    <link rel="stylesheet" href="css2/bootstrap-grid.min.css"">
    <link rel="stylesheet" href="css2/bootstrap-reboot.css"">
    <link rel="stylesheet" href="css2/bootstrap-reboot.min.css"">
    <!--My CSS-->
    <link rel="stylesheet"  href="contact.css">
    <!--My Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">

    <title>Pengumuman</title>
  </head>
  <body>
    <!--Nabar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Akademik <span class="sr-only">(current)</span></a>
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
    <!--Jumbotron-->
    <div class="jumbotron jumbotron-fluid bg-dark text-white">
        <div class="container">
            <h1 class="display-5 text-center">Announcement</h1>
        </div>
    </div>
    <section id="ann" class="ann">



	  <div class="card">
<div class="container">
	<table>
	<tr>
<?php 
		include 'koneksi.php';
		$kolom = 3;
		$i = 0;

		$data = mysqli_query($koneksi,"select * from pengumuman");
		while($d = mysqli_fetch_array($data)){
			if ($i>=  $kolom) {
				echo "<tr></tr>";
				$i = 0;
			}
			$i++;
			?>
  <td><div class="card" style="width: 25rem;">

    <img class="card-img-top" src="img/news.jpg" alt="Card image cap">
  	 <h5 class="card-title"><a href="pengumuman_show.php?id=<?php echo $d['Id_pengumuman']; ?>" class="text-dark"><?php echo $d['Judul']; ?></a></h5>
	<p class="card-text"><?php echo $d['Tanggal']; ?></p>
  </div>
</td>
  <?php 
		}
		?>
</div>
      </div>
</tr>
</table>
</div>
  </section>

 
  <!-- Pagination -->
      <!---->
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 garis">
        <hr class="bg-dark"></hr>
      </div>
    </div>
  </div>
  <div class="motivation text-center pb-3">
    <p><i>"Kalau kamu terus rebahan seperti itu, apa yang bakal kamu ubah?"</i></p>
  </div>
  <!-- Footer -->
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