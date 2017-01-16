<?php
session_start();
include "../../Koneksi/koneksi.php";

    $awb        = $_SESSION['awb'];
    $from       = $_SESSION['from'];
    $to         = $_SESSION['to'];
    $tanggal    = $_SESSION['tanggal'];
    $nama       = $_SESSION['nama'];
    $pt         = $_SESSION['pt'];
    $email      = $_SESSION['email'];
    $pembayaran = $_SESSION['pembayaran'];
    $berat      = $_SESSION['berat'];
    $asuransi   = $_SESSION['asuransi'];
    $via        = $_SESSION['via'];
    $paket      = $_SESSION['paket'];


include ".././Data/ongkir.php";


    
?>
<!DOCTYPE>
<html>
    <head>
        <title>Proses System Price</title>
        <script src="../../js/jquery.min.js"></script>

        <script>
            function hitung2() {
                var a = $(".a2").val();
                var b = $(".b2").val();
                c = a * b; //a kali b
                $(".c2").val(c);
            }
            function isNumberKey(evt){
                var charCode = (evt.which) ? evt.which : event.keyCode;
                if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
                return true;
            }
        </script>
    </head>
    <body>
    <form action="../../Data/proses.php" method="POST">
        Rincian Transaksi <br><br><br>

        No AWB <br>
        <input type="text" name="awb" value="<?php echo $awb ?>" readonly> <br> <br>

        NAMA <br>
        <input type="text" name="nama" value="<?php echo $nama ?>" readonly> <br> <br>

        TANGGAL <br>
        <input type="text" name="tanggal" value="<?php echo $tanggal ?>" readonly>  <br> <br>

        PT <br>
        <input type="text" name="pt" value="<?php echo $pt ?>" readonly> <br> <br>

        EMAIL <br>
        <input type="text" name="email" value="<?php echo $email ?>" readonly> <br> <br>

        FROM <br>
        <input type="text" name="from" value="<?php echo $from ?>" readonly> <br> <br>

        TO <br>
        <input type="text" name="to" value="<?php echo $to ?>" readonly> <br> <br>   

        VIA/PAKET <br>
        <input type="text" name="via" value="<?php echo $via ?> / <?php echo $paket  ?>" readonly> <br> <br>   

        BERAT <br>
        <input type="text" name="berat" value="<?php echo $berat ?>" readonly> <br> <br> 

        ASURANSI <br>
        <input type="text" name="asuransi" value="<?php echo $asuransi ?>" readonly> <br> <br>       
        
        PEMBAYARAN <br>
        <input type="text" name="pembayaran" value="<?php echo $pembayaran ?>" readonly> <br> <br>

        Total Ongkos Kiriman <br>
        <input type="text" name="total" value="<?php echo $tot_price ?>"> <br> <br> <br>
        
        <input type="submit" value="Proses">
        </form>


    </body>
</html>