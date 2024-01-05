<?php
    include "koneksi.php";

    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];


    $query = mysqli_query($con, "INSERT INTO user VALUES ('$username', '$pass', '$email')");

    header("location: index.html");
?>