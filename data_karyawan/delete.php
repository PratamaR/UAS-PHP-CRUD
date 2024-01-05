<?php 
    include "../koneksi.php";

    $nip = $_GET['nip'];
    $query = mysqli_query($con, "DELETE FROM data_karyawan WHERE nip='$nip'");
    if($query){
        $input = mysqli_query($con, "DELETE FROM gaji WHERE nip='$nip'");
        }

    header("Location: data_karyawan.php");
?>