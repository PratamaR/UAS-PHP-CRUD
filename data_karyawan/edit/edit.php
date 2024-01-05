<?php
    include "../../koneksi.php";
    $id = $_GET['id'];
    $karyawans = mysqli_query($con, "SELECT * FROM data_karyawan WHERE id='$id'");
    while($karyawan = mysqli_fetch_array($karyawans)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"></head>
<body style="background-color: gray;">
    <div class="container">
        <div class="row p-5">
            <div class="col-md-10 p-5 bg-light mx-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../../data_karyawan.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Data Karyawan</li>
                    </ol>
                </nav>           
                <div>
                    <h1>Tambah Data Karyawan</h1>
                    <form action="../update.php" method="post">
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="number" class="form-control mb-2" name="id" id="id" placeholder="Masukan NIP" value="<?php echo $karyawan[0];?>" readonly  required>
                        </div>
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="number" class="form-control mb-2" name="nip" id="nip" placeholder="Masukan NIP" value="<?php echo $karyawan[1];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control mb-2" name="nama" id="nama" placeholder="Masukan Nama" value="<?php echo $karyawan[2];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control mb-2" name="tgl_lahir" id="tgl_lahir" value="<?php echo $karyawan[3];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control mb-2" name="alamat" id="alamat" cols="30" rows="4" placeholder="Masukan Alamat Sesuai KTP" required><?php echo $karyawan[4];?></textarea>
                        </div>
                        <div class="form-group">    
                            <label for="bagian">Bagian</label>
                            <select class="form-control" name="bagian" id="bagian" required>
                                <option value="<?php echo $karyawan[5];?>"><?php echo $karyawan[5];?></option>
                                <option>-- Pilih Bagian --</option>
                                <option value="Akunting">Akunting</option>
                                <option value="Logistics">Logistics</option>
                                <option value="Admin">Admin</option>
                                <option value="Gudang">Gudang</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tlp">Telepon</label>
                            <input type="number" class="form-control" name="tlp" placeholder="Masukan No Telp" value="<?php echo $karyawan[6];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan">Pendidikan</label>
                            <select class="form-control" name="pendidikan" id="pendidikan" required>
                                <option value="<?php echo $karyawan[7];?>"><?php echo $karyawan[7];?></option>
                                <option>-- Pilih Pendidikan --</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="S1">S1</option>
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

 <!-- JS Bootstrap -->
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script></body>
</html>
<?php }?>
