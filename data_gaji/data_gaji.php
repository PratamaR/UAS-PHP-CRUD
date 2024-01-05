<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="../fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"></head>
    <!-- Data Table -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

    <body style="background-color: gray;">
    <div class="container-fluid">
        <div class="row p-5">
            <div class="col-md-12 p-5 bg-light mx-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../data_karyawan/data_karyawan.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Daftar Gaji</li>                    </ol>
                </nav>
                <div>
                    <h1 class="mb-3">Data Karyawan</h1>

                    <div class="table-responsive">
                        <table class="table table-striped" id="id_table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Periode</th>
                                    <th>Bagian</th>
                                    <th>Jabatan</th>
                                    <th>Golongan</th>
                                    <th>Lembur</th>
                                    <th>PPN</th>
                                    <!-- <th>Jamsostek</th> -->
                                    <th>Bonus</th>
                                    <th>Total</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                include "../koneksi.php";
                                $i = 1;
                                $gajis = mysqli_query($con, "SELECT * FROM gaji");
                                $karyawans = mysqli_query($con, "SELECT * FROM data_karyawan");
                                while($gaji = mysqli_fetch_array($gajis)){
                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $gaji[1];?></td>
                                    <td><?php echo $gaji[2]?></td>
                                    <td><?php echo $gaji[3]?></td>
                                    <td><?php echo $gaji[4]?></td>
                                    <td><?php echo $gaji[5]?></td>
                                    <td><?php echo $gaji[6]?></td>
                                    <td><?php echo $gaji[7]?></td>
                                    <td><?php echo $gaji[8]?></td>
              
                                    <td><?php echo $gaji[10]?></td>
                                    <td><?php echo $gaji[11]?></td>
                                    <td><a class="btn btn-warning" href="tambah.php/?id=<?php echo $gaji['id'];?>"><i class="fas fa-pen"></i></a>
                                    <!-- <a class="btn btn-danger" href="delete.php/?id="><i class="fas fa-trash"></i></a> -->
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        new DataTable('#id_table');
    </script>

 <!-- JS Bootstrap -->
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script></body>
</html>