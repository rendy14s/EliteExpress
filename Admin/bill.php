<?php
    include "../Koneksi/koneksi.php";
    include "../Data/function_rand.php";
    include "../Data/region.php";
?>
<!DOCTYPE>
<html>
    <head>
        <title>Input No Bill</title>
    </head>
    <body>
        <h1>Input No Bill System</h1><br>
            <form action="input.php" method="POST">
                No Awb <br>
                <input type="text" name="awb" value="<?php echo acakangkahuruf(10) . rand(1111111111,9999999999) ?>"><br>
                Region <br>
                <input type="text" name="region" value="<?php echo $region ?>" readonly> <br>
                Tanggal <br>
                <input type="date" name="tanggal"> <br>
                Nama  <br>
                <input type="text" name="nama"><br>
                Nama PT <br>
                <input type="text" name="pt"> <br>
                Email PT <br>
                <input type="email" name="email"> <br>
                Alamat  <br>
                <input type="text" name="alamat"><br>

                <!--Fungsi Nampilin Kota dan Kode Kota-->
                <?php
                $result = mysqli_query($conn, "select * from `kota`");
                $jsArray = "var prdName = new Array();\n";

                echo 'Kota  <br> 
                <select name="kota" onchange="document.getElementById(\'prd_name\').value = prdName[this.value]">';
                echo '<option>Pilih Kota</option>';
                
              
                while ($row = mysqli_fetch_array($result)) {
                    
                 echo '<option value="' . $row['kota'] . '">' . $row['kota'] . '</option>';
                $jsArray .= "prdName['" . $row['kota'] . "'] = '" . addslashes($row['kodekota']) . "';\n";
                }
                echo '</select>';
                ?>
                
                <br />
                Kode Kota <br>
                 <input type="text" name="kode" id="prd_name"/>
                <script type="text/javascript">
                <?php echo $jsArray; ?>
                </script>
               
               <br>
                Kode Pos <br> 
                <input type="text" name="kode_pos"><br>
                Provinsi <br>
                <input type="text" name="provinsi"><br>
                Negara <br>
                <input type="text" name="negara"><br>
                Telepon <br>
                <input type="text" name="telepon"><br>
                Pengiriman Via <br>
                <select name="via" id="via">
                    <option value="0">Pengiriman By</option>
                    <option value="1">Udara</option>
                    <option value="2">Darat</option>
                    <option value="3">Laut</option>
                </select> <br>
                Paket <br>
                <select name="paket">
                    <option value="0">Pilih Paket</option>
                    <option value="1">Elite Overnight Service (ONS)</option>
                    <option value="2">Elite Same day Service (SDS)</option>
                    <option value="3">Regular</option>
                </select> <br>
                Jenis Kiriman <br>
                <input type="checkbox" name="jenis" value="Dokumen">Dokumen
                <input type="checkbox" name="jenis" value="Barang">Barang <br>
                Isi Kiriman <br>
                <textarea name="isi"></textarea> <br>
                Berat Minimum <br>
                <input type="text" name="min_berat" value="10Kg" readonly> <br>
                Berat <br>
                <input type="text" name="berat"> <br>
               <!--<input type="text" name="harga" id="harga" class="a2" onkeyup="hitung2();" required="" size="40" onkeypress="return isNumberKey(event)" > <br>-->
                Asuransi Barang <br>
                <input type="radio" name="asuransi" value="YES"><input type="radio" name="asuransi" value="NO"> <br>
                <!--<input type="text" name="jumlah" id="jumlah" class="b2" onkeyup="hitung2();" required="" size="40" onkeypress="return isNumberKey(event)" > <br>-->
                Pembayaran <br>
                <select name="pembayaran">
                    <option value="1">Cash</option>
                    <option value="2">Non-Cash</option>
                </select> <br>
                <br> <br>

                <input type="submit" value="Proses">

            </form>
        
    </body>
</html>