<?php
    include("koneksi.php");

    //baca nomer kartu dari nodeMCU
    $nokartu = $_GET['nokartu'];
    //kosongkan tabel tmprfid
    mysqli_query($konek, "delete from tmprfid");

    //simpan nomer kartu yang baru di tabel tmprfid
    $simpan = mysqli_query($konek, "insert into tmprfid(nokartu)values('nokartu')");
    if($simpan)
        echo "Berhasil";
    else
        echo "Gagal";
?>