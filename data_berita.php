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
    <title>Data Pengumuman</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-md">
        <a class="navbar-brand"><span>Mathematics</span></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>

    </nav>
    <section>
			
    <div class="container">
        <div class="container">

            <div class="row">
                <div class="col pt-5">
				
				<a href="index.php"> Back to Home</a>
				<br>
				<br>
				<form method="post" action="" >
                    <table class="table table-bordered">
                        <thead class="thead-dark">
					<tr><th>No</th>
						<th>Username</th>
						<th>Judul</th>
						<th>Dokumen</th>
						<th>Isi</th>
						<th>Tanggal</th>
						<th>Foto</th>
						<th>Option</th></tr>
                        </thead>
                        <tbody>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from berita");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['Username']; ?></td>
				<td><?php echo $d['Judul']; ?></td>
				<td><?php echo $d['Dokumen']; ?></td>
				<td><?php echo $d['Isi']; ?></td>
				<td><?php echo $d['Tanggal']; ?></td>
				<td>
				<img src="foto/<?php echo $d ['Foto']?>" width="200">
				</td>
				<td>
					<a href="edit_berita.php?id=<?php echo $d['Id_berita']; ?>">Edit</a> |
					<a href="hapus_berita.php?id=<?php echo $d['Id_berita']; ?>">Hapus</a>
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