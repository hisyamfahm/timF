<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pklmtk";

$connect = new mysqli($servername, $username, $password, $dbname);
if ($connect ->connect_error){
	echo 'Terjadi Kesalahan';
}
?>
