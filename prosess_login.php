<?php 
include 'koneksi.php';
 
$email = $_POST['email'];
$pass = $_POST['pass'];
 
$query = mysqli_query($con, "SELECT * FROM user WHERE email='$email' and pass='$pass'");
$cek = mysqli_num_rows($query);
if($cek == 1){
    header("location: data_karyawan/data_karyawan.php");
}else{
    header("location: index.html");
}
?>
