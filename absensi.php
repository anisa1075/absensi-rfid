<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "header.php"; ?>
    <title>Rekapitulasi Absensi</title>
</head>

<body>

    <?php include "menu.php"; ?>

    <!-- isi -->
    <div class="container-fluid">
        <h3>Rekap Absensi</h3>
        <table class="table table-bordered">
            <thead>
                <tr style="background-color: gray; color: white;">
                    <th style="width: 10px; text-align: center;">No.</th>
                    <th style="text-align: center;">Nama</th>
                    <th style="text-align: center;">Tanggal</th>
                    <th style="text-align: center;">Jam Masuk</th>
                    <th style="text-align: center;">Jam Istirahat</th>
                    <th style="text-align: center;">Jam Kembali</th>
                    <th style="text-align: center;">Jam Pulang</th>
                </tr>
            </thead>
            <tbody>
                <?php include "koneksi.php"; 
                // <!-- baca tabel absensi dan relasikan dengan tabel mahasiswi berdasarkan nomor kartu rfid untuk tanggal hari ini -->
                // <!-- baca tanggal saat ini -->
                date_default_timezone_set('Asia/Makassar');
                $tanggal = date('Y-m-d');

                // <!-- filter absensi berdasarkan tanggal saat ini -->
                $sql = mysqli_query($konek, "select b.nama,
                a.tanggal, a.jam_masuk, a.jam_istirahat, a.jam_kembali, a.jam_pulang from
                absensi a, mahasiswi b where a.nokartu=b.nokartu and a.tanggal='$tanggal'");

                $no = 0;
                while($data = mysqli_fetch_array($sql))
                {
                    $no++;
                ?>
                <tr>
                    <td> <?php echo $no; ?> </td>
                    <td> <?php echo $data['nama']; ?> </td>
                    <td> <?php echo $data['tanggal']; ?> </td>
                    <td> <?php echo $data['jam_masuk']; ?> </td>
                    <td> <?php echo $data['jam_istirahat']; ?> </td>
                    <td> <?php echo $data['jam_kembali']; ?> </td>
                    <td> <?php echo $data['jam_pulang']; ?> </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>