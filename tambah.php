<!-- proses penyimpanan -->
<?php

include "koneksi.php";

// jika tombol simpan di klik
if (isset($_POST['btnSimpan'])) {

    // baca isi imputan form
    $nokartu = $_POST['nokartu'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    // simpan ke tabel karyawan
    $simpan = mysqli_query($konek, "insert into mahasiswi(nokartu, nama, alamat)
        values('$nokartu', '$nama', '$alamat')");

    // jika berhasil tersimpan, tampilkan pesan tersimpan,
    // kembali ke data karyawan

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

// Kosongkan tabel tmprfid
mysqli_query($konek, "delete from tmprfid");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "header.php"; ?>
    <title>Tambah Data Mahasiswi</title>

    <!-- pembacaan no kartu otomatis -->
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#norfid").load('nokartu.php')
            }, 0); 
            // pembacaan file nokartu.php, tiap satu detik = 1000
        });
    </script>
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
            <div id="norfid"></div>
            <div class="form-group">
                <label for="">Nama Karyawan</label>
                <input type="text" name="nama" id="nama" placeholder="nama karyawan" class="form-control" style="width: 200px;">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <textarea type="text" name="alamat" id="alamat" placeholder="alamat" class="form-control" style="width: 200px;"></textarea>

                <button class="btn btn-primary" name="btnSimpan" id="btnSimpan" style="margin-top: 10px;">Simpan</button>
            </div>
        </form>
    </div>
</body>

</html>