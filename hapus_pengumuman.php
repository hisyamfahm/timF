<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"delete from pengumuman where Id_pengumuman='$id'");
header("location:data_pengumuman.php");
 
?>