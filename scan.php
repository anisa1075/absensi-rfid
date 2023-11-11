<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "header.php"; ?>
    <title>Scan Kartu</title>
    
    <!-- Scanning Membaca Kartu RFID -->
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#cekkartu").load('bacakartu.php')
            }, 2000); 
        });
    </script>
</head>
<body>
    <?php include "menu.php"; ?>

    <!-- isi -->
    <div class="container-fluid" style="padding-top: 10%;">
        <div id="cekkartu"></div>
    </div>
    <br>
</body>
</html>