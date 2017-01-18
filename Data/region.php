<?php
session_start();
include "../../Koneksi/koneksi.php";

        $id_user    = $_SESSION['id_user'];
        

        $sql    = mysqli_query($conn, "SELECT * FROM `user` WHERE id_user  = '$id_user'");
        $result = mysqli_fetch_array($sql);

        $region = $result['region'];