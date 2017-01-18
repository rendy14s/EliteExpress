<?php
include "../../Koneksi/koneksi.php";

    $sql    = mysqli_query($conn, "SELECT * FROM data_transaksi WHERE `tanggal` >= '$from' AND `tanggal` <= '$to'");
?>