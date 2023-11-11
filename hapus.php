<?php
include "koneksi.php";

// baca id data yang akan dihapus
$id = $_GET['id'];

// hapus data
$hapus = mysqli_query($konek,"delete from mahasiswi where id='$id'");

// jika berhasil terhapus tampilkan pesan terhapus
// kemudian kembali ke data mahasiwi
if ($hapus) {
    echo "
            <script>
                alert('Terhapus');
                location.replace('dataMahasiswi.php');
            </script>
        ";
} else {
    echo "
        <script>
        alert('Gagal Terhapus');
        location.replace('dataMahasiswi.php');
    </script>
        ";
}

?>