<?php 
    include "../koneksi.php";

    $id = $_GET['id'];
    $gaji = mysqli_query($con, "DELETE FROM gaji WHERE id='$id'");

    header("Location: ../data_gaji.php");

?>