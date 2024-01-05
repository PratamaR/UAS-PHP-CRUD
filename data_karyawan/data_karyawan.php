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
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                    </ol>
                </nav>
                <div>
                    <h1>Data Karyawan</h1>
                    <div>
                    <a href="tambah/tambah.php" class="btn btn-primary mb-3">Tambah</a>&nbsp;<a href="../data_gaji/data_gaji.php" class="btn btn-primary mb-3">Lihat Daftar Gaji</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped" id="id_table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Bagian</th>
                                    <th>Alamat</th>
                                    <th>No Tlp</th>
                                    <th>Pendidikan</th>
                                    <th>Opsi</th>
                                    <th>Lanjutan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                include "../koneksi.php";
                                $i = 1;
                                $karyawans = mysqli_query($con, "SELECT * FROM data_karyawan");
                                while($karyawan = mysqli_fetch_array($karyawans)){
                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $karyawan[1];?></td>
                                    <td><?php echo $karyawan[2]?></td>
                                    <td><?php echo $karyawan[3]?></td>
                                    <td><?php echo $karyawan[4]?></td>
                                    <td><?php echo $karyawan[5]?></td>
                                    <td><?php echo $karyawan[6]?></td>
                                    <td><?php echo $karyawan[7]?></td>
                                    <td><a class="btn btn-warning" href="edit/edit.php/?id=<?php echo $karyawan['id'];?>"><i class="fas fa-pen"></i></a>
                                    <a class="btn btn-danger" href="delete.php?nip=<?php echo $karyawan['nip'];?>"><i class="fas fa-trash"></i></a></i></button></td>
                                    <td><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#gaji<?php echo $karyawan['nip'];?>">Lihat Gaji</button>
                                                            <!-- Modal -->
                                    <div class="modal fade" id="gaji<?php echo $karyawan['nip'];?>" tabindex="-1" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Detail Gaji</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">
                                                    <form action="#" method="post">
                                                    <?php
                                                                                        
                                             if($nip = $karyawan['nip']){
                                            
                                            $gajis = mysqli_query($con, "SELECT * FROM gaji WHERE nip='$nip'");
                                            $gaji = mysqli_fetch_array($gajis);
                                    ?>
                                                        <div class="row">
                                                            <div class="col-6">
                                                            <label for="nip">NIP</label>
                                                            <input type="number" class="form-control mb-2" name="nip" id="nip" placeholder="Masukan NIP" value="<?php echo $gaji[1];?>" required disabled>
                                                            </div>
                                                            <div class="col-6">
                                                            <label for="nama">Nama</label>
                                                            <input type="text" class="form-control mb-2" name="nama" id="nama" placeholder="Masukan Nama" value="<?php echo $gaji[2];?>" required disabled>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                        <div class="col-4">
                                                            <label for="periode">Periode</label>
                                                            <input type="text" class="form-control mb-2" name="periode" id="nama" placeholder="-" value="<?php echo $gaji[3];?>" required disabled>
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="bagian">Bagian</label>
                                                            <input type="text" class="form-control mb-2" name="bagian" id="bagian" placeholder="Masukan bagian" value="<?php echo $gaji[4];?>" required disabled>
                                                        </div>
                                                        <div class="col-4">
                                                            <label for="lembur">Lembur</label>
                                                            <input type="text" class="form-control mb-2" name="lembur" id="lembur" placeholder="-" value="<?php echo $gaji[7];?>" required disabled>
                                                        </div>
                                                        </div>
                                                        <div class="row">
                                                        <div class="col-6">
                                                            <label for="ppn">PPN</label>
                                                            <input type="text" class="form-control mb-2" name="ppn" id="ppn" placeholder="-" value="<?php echo $gaji[8];?>" required disabled>
                                                        </div>
                                                        <div class="col-6">
                                                            <label for="bonus">Bonus</label>
                                                            <input type="text" class="form-control mb-2" name="bonus" id="bonus" placeholder="-" value="<?php echo $gaji[10];?>" required disabled>
                                                        </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="total_gajih">Total Gajih</label>
                                                            <input type="text" class="form-control mb-2 bg-warning font-weight-bold" name="total_gajih" id="total_gajih" placeholder="-" value="<?php echo $gaji[11];?>" required disabled>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <?php } }?>
                                </tr>
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