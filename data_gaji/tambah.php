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
                    <li class="breadcrumb-item"><a href="../../data_karyawan/data_karyawan.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Input Data Karyawan</li>                    </ol>
                </nav>
                <div>
                    <?php
                        include "../koneksi.php";
                        $id = $_GET['id'];
                        $gajis = mysqli_query($con, "SELECT * FROM gaji WHERE id='$id'");
                        $gaji = mysqli_fetch_array($gajis);
                    ?>
                    <h1>Tambah Data Karyawan</h1>
                    <form action="../update.php" method="post">
                                                    <div class="form-group">
                                                            <label for="id">ID</label>
                                                            <input type="number" class="form-control mb-2" name="id" id="id" placeholder="Masukan NIP" value="<?php echo $gaji[0];?>" readonly  required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nip">NIP</label>
                                                            <input type="number" class="form-control mb-2" name="nip" id="nip" placeholder="Masukan NIP" value="<?php echo $gaji[1];?>" required disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama">Nama</label>
                                                            <input type="text" class="form-control mb-2" name="nama" id="nama" placeholder="Masukan Nama" value="<?php echo $gaji[2];?>" required disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="periode">Periode</label>
                                                            <select class="form-control" name="periode" id="periode" required>
                                                                <option value="<?php echo $gaji[3];?>"><?php echo $gaji[3];?></option>
                                                                <option>-- Pilih Periode --</option>
                                                                <option value="Januari">Januari</option>
                                                                <option value="Februari">Februari</option>
                                                                <option value="Maret">Maret</option>
                                                                <option value="April">April</option>
                                                                <option value="Mei">Mei</option>
                                                                <option value="Juni">Juni</option>
                                                                <option value="Juli">Juli</option>
                                                                <option value="Agustus">Agustus</option>
                                                                <option value="September">September</option>
                                                                <option value="Oktober">Oktober</option>
                                                                <option value="November">November</option>
                                                                <option value="Desember">Desember</option>
                                                            </select>
                                                        </div>
                                                        <!-- <div class="form-group">
                                                            <label for="alamat">Alamat</label>
                                                            <textarea class="form-control mb-2" name="alamat" id="alamat" cols="30" rows="4" placeholder="Masukan Alamat Sesuai KTP" required><?php echo $karyawan[4];?></textarea>
                                                        </div> -->
                                                        <div class="form-group">    
                                                            <label for="bagian">Bagian</label>
                                                            <select class="form-control" name="bagian" id="bagian" required disabled>
                                                                <option value="<?php echo $karyawan[4];?>"><?php echo $gaji[4];?></option>
                                                                <option>-- Pilih Bagian --</option>
                                                                <option value="Akunting">Akunting</option>
                                                                <option value="Logistics">Logistics</option>
                                                                <option value="Admin">Admin</option>
                                                                <option value="Gudang">Gudang</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="jabatan">Jabatan</label>
                                                            <select class="form-control" name="jabatan" id="jabatan" required>
                                                                <option value="<?php echo $gaji[5];?>"><?php echo $gaji[5];?></option>
                                                                <option>-- Pilih Jabatan --</option>
                                                                <option value="Direktur">Direktur</option>
                                                                <option value="Kepala Bidang">Kepala Bidang</option>
                                                                <option value="Staf">Staf</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="golongan">Golongan</label>
                                                            <select class="form-control" name="golongan" id="golongan" required>
                                                                <option value="<?php echo $gaji[6];?>"><?php echo $gaji[6];?></option>
                                                                <option>-- Pilih Golongan --</option>
                                                                <option value="3000000">1A</option>
                                                                <option value="3500000">1b</option>
                                                                <option value="4000000">2A</option>
                                                                <option value="4500000">2B</option>
                                                                <option value="5000000">3A</option> 
                                                                <option value="5500000">3B</option>
                                                                    </select>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="lembur">Lembur</label>
                                                            <input type="number" class="form-control mb-2" name="lembur" id="lembur" placeholder="Masukan Jumlah Jam Lembur" value="<?php echo $gaji[7];?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="ppn">PPN %</label>
                                                            <input type="number" class="form-control mb-2" name="ppn" id="ppn" placeholder="Masukan Nilai PPN" value="<?php echo $gaji[8];?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="bonus">Bonus</label>
                                                            <input type="number" class="form-control mb-2" name="bonus" id="bonus" placeholder="Masukan Nilai Bonus" value="<?php echo $gaji[10];?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="total_gajih">Total</label>
                                                            <input type="number" class="form-control mb-2" name="total_gajih" id="total_gajih" placeholder="Hasil Akan Terisi Otomatis" value="<?php echo $hasil?>" disabled>
                                                        </div>
                                                        <div>
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                    </form> 
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

                                                    