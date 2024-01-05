<?php 
                                include "koneksi.php";

                                ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="searchForm" action="process_input.php" method="post">
    <div class="form-group">
        <label for="nip">NIP:</label>
        <select class="form-control" id="nip" name="nip" required>
            <!-- Populate NIP options from database -->
            <?php
            // // Lakukan koneksi ke database
            // $servername = "localhost";
            // $username = "mmogamin_admin";
            // $password = "akuanaksoleh12";
            // $dbname = "mmogamin_karyawan";

            // $conn = new mysqli($servername, $username, $password, $dbname);

            // if ($conn->connect_error) {
            //     die("Connection failed: " . $conn->connect_error);
            // }

            // Ambil data NIP dari tabel karyawan
            $karyawan = mysqli_query($con, "SELECT nip FROM data_karyawan");
            $result = $conn->query($karyawan);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['nip'] . "'>" . $row['nip'] . "</option>";
                }
            }

            $conn->close();
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" readonly>
    </div>
    <div class="form-group">
        <label for="bagian">Bagian:</label>
        <input type="text" class="form-control" id="bagian" name="bagian" readonly>
    </div>
    <button type="submit" class="btn btn-primary">Cari</button>
</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    // Fungsi AJAX untuk memperbarui nilai text field berdasarkan NIP yang dipilih
    $(document).ready(function(){
        $('#searchForm').submit(function(e){
            e.preventDefault();
            $.ajax({
                type: $(this).attr('method'),
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function(data){
                    var result = $.parseJSON(data);
                    $('#nama').val(result.nama);
                    $('#bagian').val(result.bagian);
                }
            });
        });
    });
</script>
</body>
</html>

