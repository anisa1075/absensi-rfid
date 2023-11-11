<?php
include "koneksi.php";

// baca isi tabel tmprfid
$sql = mysqli_query($konek, "select * from tmprfid");
$data = mysqli_fetch_array($sql);
// baca no kartu
$nokartu = $data['nokartu'];
?>

<div class="form-group">
    <label for="">No. Kartu</label>
    <input type="text" name="nokartu" id="nokartu" placeholder="nomor kartu RFID" class="form-control" 
    placeholder="Tempelkan kartu anda" style="width: 200px;" value="<?php echo $nokartu; ?>">
</div>