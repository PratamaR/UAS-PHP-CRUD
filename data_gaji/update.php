<?php
    include "../koneksi.php";


    $id = $_POST['id'];
    $periode = $_POST['periode'];
    $jabatan = $_POST['jabatan'];
    $golongan = $_POST['golongan'];
    $lembur = $_POST['lembur'];
    $ppn = $_POST['ppn'];
    $bonus = $_POST['bonus'];
    $total_gajih = $_POST['total_gajih'];
    
    
        // $tunjangan = $gajiPokok * 0.25;
        $lemburs = $lembur * 25000;
        // $gajiBruto = $gajiPokok + $tunjangan + $lembur;
        $potongan = ($golongan * $ppn) / 100;
        $hasil = $golongan - $potongan + $lemburs;
    mysqli_query($con, "UPDATE gaji SET periode='$periode', jabatan='$jabatan', golongan='$golongan', lembur='$lembur',ppn='$ppn', bonus='$bonus', total_gajih='$hasil' WHERE id='$id' ");

    header("Location: data_gaji.php");

?>