<?php
$koneksi = mysqli_connect("localhost","root","","base");

if (mysqli_connect_errno()){
echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>