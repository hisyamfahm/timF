<?php
session_start();
 
include 'koneksi.php';
 
if(isset($_POST['login'])){
$user = $_POST['username'];
$pass = $_POST['password'];
  
$login = mysqli_query($koneksi,"select Username, Email, Password, Role, Status FROM users where Username='$user' and Password='$pass' ");

if ( mysqli_num_rows($login) > 0 ){
$r= mysqli_fetch_array($login);
$_SESSION['Username']= $r['Username'];
$_SESSION['Email']= $r['Email'];
$_SESSION['Password']= $r['Password'];
$_SESSION['Role']= $r['Role'];
$_SESSION['Status']=$r['Status'];

if ($_SESSION['Status']=='aktif') {
$Username=$_SESSION['Username'];

if($_SESSION['Role']=='3'){
	header ('location:profil_mahasiswa.php?Username='.$Username);
	$sql ="UPDATE users SET Last_login=now() where Username='$Username'";
    mysqli_query($koneksi,$sql);
} 
else if($_SESSION['Role']=='2'){
	header ('location:profil_dosen.php?Username='.$Username);
	$sql ="UPDATE users SET Last_login=now() where Username='$Username'";
    mysqli_query($koneksi,$sql);
}	
else if ($_SESSION['Role']=='1'){
	header ('location:profil_admin.php?Username='.$Username);
	$sql ="UPDATE users SET Last_login=now() where Username='$Username'";
    mysqli_query($koneksi,$sql);
}
else{
header("location:login.php?pesan=gagal");
}	
}else{
header ("location:login.php?pesan=gagall");
}
}else{
header("location:login.php?pesan=gagal");
}
}
?>