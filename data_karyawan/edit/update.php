<?php
    include "../../koneksi.php";

    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $bagian = $_POST['bagian'];
    $tlp = $_POST['tlp'];
    $pendidikan = $_POST['pendidikan'];

    $query = mysqli_query($con, "UPDATE data_karyawan SET nip='$nip', nama='$nama', tgl_lahir='$tgl_lahir', alamat='$alamat', bagian='$bagian', tlp='$tlp', pendidikan='$pendidikan' WHERE id='$id' ");

    if($query){
        $input = mysqli_query($con, "UPDATE gaji SET nip='$nip', nama ='$nama', bagian='$bagian' WHERE nip='$nip'");
        }

    header("Location: ../data_karyawan.php");

?>