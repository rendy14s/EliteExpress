<?php
session_start();
    include "../../Koneksi/koneksi.php";

    $awb     = $_POST['awb'];
    $tanggal = $_POST['tanggal'];
    $nama    = $_POST['nama'];
    $nama_pt = $_POST['nama_pt'];
    $from    = $_POST['from'];
    $to      = $_POST['to'];
    $des     = $_POST['deskripsi'];

    $insert  = mysqli_query($conn, "INSERT INTO data VALUES ('$awb','$from','$tanggal','$nama','$nama_pt','-','-','-','$to','-','-','-','-','','','','','','','','$des')");
    if($insert){
        echo '<script language="javascript">alert("Data Berhasil Di Update!")</script>';
        echo '<script>window.location="destination.php"</script>';
    }
?>