<?php
session_start();
    $awb            = $_POST['awb'];
    $region         = $_POST['region'];
    $tanggal        = $_POST['tanggal'];
    $nama           = $_POST['nama'];
    $pt             = $_POST['pt'];
    $alamat         = $_POST['alamat'];
    $kode           = $_POST['kode'];
    $kota           = $_POST['kota'];
    $kode_pos       = $_POST['kode_pos'];
    $provinsi       = $_POST['provinsi'];
    $negara         = $_POST['negara'];
    $telepon        = $_POST['telepon']; 
    $via            = $_POST['via'];
    $paket          = $_POST['paket'];
    $jenis          = $_POST['jenis'];
    $isi            = $_POST['isi'];
    $berat          = $_POST['berat'];
    $asuransi       = $_POST['asuransi'];
    $pembayaran     = $_POST['pembayaran'];


    if($via == 1){
        $via = "Udara";
    }
    else if ($via == 2) {
        $via = "Darat" ;
    }
    else if ($via == 3) {
        $via = "Laut" ;
    }


    if($paket == 1){
        $paket = "ONS";
    }
    else if ($paket == 2) {
        $paket = "SDS";
    }
    else if ($paket == 3) {
        $paket = "Regular";
    }


    if($pembayaran == 1){
        $pembayaran = "Cash";
    }
    else if ($pembayaran == 2) {
        $pembayaran = "Non - Cash";
    }



    $sql    = mysqli_query ($conn, "INSERT INTO `data` 
                    VALUES 
        ('$awb','$region','$tanggal','$nama','$pt','$alamat','$kode','$kota','$kode_pos','$provinsi'
        ,'$negara','$telepon','$via','$paket','$jenis','$isi','$berat','$asuransi','$pembayaran','');");
         mysqli_error();

         if($sql){
                $_SESSION['from'] = $region;
                $_SESSION['to'] = $kota;
         }
         else{
             echo "gagal insert";
         }