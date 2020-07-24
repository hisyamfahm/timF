<?php 
include 'koneksi.php';
 
$id = $_GET['id'];
 
mysqli_query($koneksi,"delete from agenda where Id_agenda='$id'");
 
header("location:data_agenda.php");
 
?>