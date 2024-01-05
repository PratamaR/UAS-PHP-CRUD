<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name= "karyawan";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(!$con){
    echo "Gagal Terkoneksi : ". mysqli_connect_error();
}
?>