<?php
    include "../../koneksi.php";

    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $bagian = $_POST['bagian'];
    $tlp = $_POST['tlp'];
    $pendidikan = $_POST['pendidikan'];

    $query = mysqli_query($con, "INSERT INTO data_karyawan VALUES (null, '$nip', '$nama', '$tgl_lahir', '$alamat', '$bagian', '$tlp', '$pendidikan' )");
    
    if($query){
    $input = mysqli_query($con, "INSERT INTO gaji VALUES (null, '$nip', '$nama', null, '$bagian',null,null,null,null,null,null,null)");
    }
    header("location: ../data_karyawan.php");
?>