<!-- proses penyimpanan -->
<?php

include "koneksi.php";

// baca ID data yang akan di edit
$id = $_GET['id'];

// baca data mahasiswi berdasarkan id
$cari = mysqli_query($konek,"select * from mahasiswi where id='$id'");
$hasil = mysqli_fetch_array($cari);

// jika tombol simpan di klik
if (isset($_POST['btnSimpan'])) {

    // baca isi imputan form
    $nokartu = $_POST['nokartu'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    // simpan ke tabel mahasiswi
    $simpan = mysqli_query($konek, "update mahasiswi set 
    nokartu='$nokartu', nama='$nama', alamat='$alamat' where id='$id'");

    // jika berhasil tersimpan, tampilkan pesan tersimpan,
    // kembali ke data mahasiswi

    if ($simpan) {
        echo "
                <script>
                    alert('Tersimpan');
                    location.replace('dataMahasiswi.php');
                </script>
            ";
    } else {
        echo "
            <script>
            alert('Gagal Tersimpan');
            location.replace('dataMahasiswi.php');
        </script>
            ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "header.php"; ?>
    <title>Tambah Data Mahasiswi</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <!-- isi -->
    <div class="container-fluid">
        <h3>Tambah Data Mahasiswi</h3>
    </div>

    <!-- form input -->
    <div class="container-fluid">

        <form action="" method="post">
            <div class="form-group">
                <label for="">No. Kartu</label>
                <input type="text" name="nokartu" id="nokartu" placeholder="nomor kartu RFID" class="form-control" style="width: 200px;" value="<?php echo $hasil['nokartu']; ?>">
            </div>
            <div class="form-group">
                <label for="">Nama Karyawan</label>
                <input type="text" name="nama" id="nama" placeholder="nama karyawan" class="form-control" style="width: 200px;" value="<?php echo $hasil['nama']; ?>">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <textarea type="text" name="alamat" id="alamat" placeholder="alamat" class="form-control" style="width: 200px;" value="<?php echo $hasil['alamat']; ?>"><?php echo $hasil['alamat']; ?></textarea>

                <button class="btn btn-primary" name="btnSimpan" id="btnSimpan" style="margin-top: 10px;">Simpan</button>
            </div>
        </form>
    </div>
</body>

</html>