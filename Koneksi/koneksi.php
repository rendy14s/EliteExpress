<?php

    $server     = "localhost";
    $username   = "root";
    $pass       = "";
    $data       = "edwin";

    $conn        = new mysqli ($server, $username, $pass, $data);

    if($conn){
        //echo "Sukses";
    }
    else{
        //echo "Gagal";
    }