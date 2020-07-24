<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "base";

$connect = new mysqli($servername, $username, $password, $dbname);
if ($connect ->connect_error){
	echo 'Terjadi Kesalahan';
}
?>