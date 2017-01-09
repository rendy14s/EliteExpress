<?php
session_start();
$from   = $_SESSION['from'];
$to     = $_SESSION['to'];

    include "../Koneksi/koneksi.php";
?>
<!DOCTYPE>
<html>
    <head>
        <title>Proses System Price</title>
    </head>
    <body>
        Rincian Transaksi <br><br><br>
        FROM <br>
        <input type="text" name="from" value="<?php echo $from ?>"> <br> <br>

        TO <br>
        <input type="text" name="from" value="<?php echo $to ?>"> <br> <br>        
                Total Ongkos Kiriman <br>
                <input type="text" name="total"> <br> <br> <br>
    </body>
</html>