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
    <link rel="stylesheet"  href="style.css">

    <!--My Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <title>Sistem Informasi Jurusan Matematika</title>
  </head>
  <body>
    
    <!--Nabar-->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-md">
            <a class="navbar-brand" href="index.html">
                <span>Mathematics</span>
            </a>
        <button class="navbar-toggler btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav mx-auto">
              <li class="nav-item active">
                <a class="nav-link" href="hal_dosen.php?Username=<?php echo $_SESSION['Username'];?>">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Akademik <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="profil_dosen.php?Username=<?php echo $_SESSION['Username'];?>">Profil</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="https://elearning.uin-malang.ac.id/">E-learning</a>
              </li>
			  	<li class="nav-item active">
                <a class="nav-link" href="profildosen_dosen.php?Username=<?php echo $_SESSION['Username'];?>">Profil Dosen</a>
                </li>
              <li class="nav-item active">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
            </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <!--Jumbotron-->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4"><span>Mathematics</span> Department</h1>
      </div>
    </div>
    <!--Panel link-->
    <!--Pengumuman-->
    <div class="container-md">
      <div class="row justify-content-center">
            <div class="col-10 pengumuman bg-light text-dark">
                <div class="row">
                    <div class="col-lg">
                      <svg class="bi bi-newspaper float-left"  viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M0 2A1.5 1.5 0 0 1 1.5.5h11A1.5 1.5 0 0 1 14 2v12a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 0 14V2zm1.5-.5A.5.5 0 0 0 1 2v12a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5V2a.5.5 0 0 0-.5-.5h-11z"/>
                        <path fill-rule="evenodd" d="M15.5 3a.5.5 0 0 1 .5.5V14a1.5 1.5 0 0 1-1.5 1.5h-3v-1h3a.5.5 0 0 0 .5-.5V3.5a.5.5 0 0 1 .5-.5z"/>
                        <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                      </svg>
                        <h4><a href="announcement.html" class="text-dark">Announcement</a></h4>
                        <p>Klik di sini untuk melihat pengumuman.</p>
                    </div>
                    <div class="col-lg">
                      <svg class="bi bi-calendar-date float-left" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.445 11.688V6.354h-.633A12.6 12.6 0 0 0 4.5 7.16v.695c.375-.257.969-.62 1.258-.777h.012v4.61h.675zm1.188-1.305c.047.64.594 1.406 1.703 1.406 1.258 0 2-1.066 2-2.871 0-1.934-.781-2.668-1.953-2.668-.926 0-1.797.672-1.797 1.809 0 1.16.824 1.77 1.676 1.77.746 0 1.23-.376 1.383-.79h.027c-.004 1.316-.461 2.164-1.305 2.164-.664 0-1.008-.45-1.05-.82h-.684zm2.953-2.317c0 .696-.559 1.18-1.184 1.18-.601 0-1.144-.383-1.144-1.2 0-.823.582-1.21 1.168-1.21.633 0 1.16.398 1.16 1.23z"/>
                        <path fill-rule="evenodd" d="M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1zm1-3a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                        <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
                      </svg>
                      <h4><a href="agenda.html" class="text-dark">Agenda</a></h4>
                      <p>Klik di sini untuk melihat agenda terdekat.</p>
                    </div>
                    <div class="col-lg">
                      <svg class="bi bi-phone float-left" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11 1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                        <path fill-rule="evenodd" d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                      </svg>
                      <h4><a href="contact.html" class="text-dark">Contact</a></h4>
                      <p>Klik di sini untuk menghubungi jurusan.</p>
                    </div>
                </div>
            </div>
          </div>
    </div>
    <!--SIM-->
    <section id="si" class="si pb-4 mt-5">
      <div class="container">
          <div class="row mb-4 pt-4">
              <div class="col text-center">
                  <h2>Sistem Informasi</h2>
              </div>
          </div>
          <div class="row mb-4 justify-content-center">
              <div class="col-md-3">
                  <div class="card">
                      <img class="card-img-top" src="img/library.jpg" alt="Card image cap">
                      <div class="card-body">
                      <h5 class="card-title"><a href="#" class="text-dark">Perpustakaan</a></h5>
                      </div>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="card">
                      <img class="card-img-top" src="img/administration.png" alt="Card image cap">
                      <div class="card-body">
                      <h5 class="card-title"><a href="#" class="text-dark">Administrasi Akademik</a></h5>
                      </div>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="card">
                      <img class="card-img-top" src="img/students.png" alt="Card image cap">
                      <div class="card-body">
                      <h5 class="card-title"><a href="#" class="text-dark">Students Activity</a></h5>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row mb-4 justify-content-center">
              <div class="col-md-3">
                  <div class="card">
                      <img class="card-img-top" src="img/lab.png" alt="Card image cap">
                      <div class="card-body">
                      <h5 class="card-title"><a href="#" class="text-dark">Laboratory</a></h5>
                      </div>
                  </div>
              </div>
              <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="img/schedule.png" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title"><a href="#" class="text-dark">Penjadwalan</a></h5>
                    </div>
                </div>
            </div>
          </div>
      </div>
  </section>
       <!--Berita-->
       <section class="bg-light">
        <div class="container-md">
          <div class="row berita">
            <div class="col-lg-6">
              <img src="img/panitia.png" class="img-fluid">
            </div>
            <div class="col-lg-5">
              <h3>Kesuksesan Dibalik FGD HMJ 2020</h3>
              <p>"KOMET merupakan ajang kompetisi matematika yang diselenggarakan
                oleh Jurusan Matematika UIN Maliki Malang....""
              </p>
              <a href="#" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>
        <div class="container site-section md">
          <div class="row">
            <div class="col-6 title-section">
              <h2 class="heading"><a href="#" class="text-dark">Student Activity</a></h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="custom-media d-flex">
                <div class="img mr-4">
                <img src="img/final.jpeg" class="img-fluid">
                </div>
                <div class="text">
                <span class="meta">May 20,2020</span>
                <h3 class="mb-4">
                  Final Komet Yang Berlangsung Seru.
                </h3>
                <p>
                  Lorem ipsum dolor sit.
                </p>
                <p><a href="#">Read More</a></p>
              </div>
              </div>
            </div>
            <div class="col-lg-6">
            <div class="custom-media d-flex">
              <div class="img mr-4">
                <img src="img/panitia.jpeg" class="img-fluid">
              </div>
              <div class="text">
                <span class="meta">May 20, 2020</span>
                <h3 class="mb-4">Final Komet Yang Berlangsung Seru.
                </h3>
                <p>Lorem ipsum dolor sit amet.</p>
                <p><a href="activity.html">Read More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!--Profil Jurusan-->

  <div class="container-md">
    <div class="row justify-content-center">
      <img src="http://matematika.uin-malang.ac.id/wp-content/uploads/2015/06/logo-5.png" class="img-fluid mb-4" alt="Matematika UIN Malang" title="Matematika UIN Malang">
    </div>
  </div>
    <!---->
    <div class="container-md">
      <div class="row justify-content-center">
        <div class="col-lg-10 garis">
          <hr class="bg-dark"></hr>
        </div>
      </div>
    </div>
    <div class="motivation text-center mb-3">
      <p><i>"Quotes"</i></p>
    </div>
    <!--Footer-->
    <footer class="text-primary">
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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="myjs.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </body>
</html>