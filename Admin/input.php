<?php
    include "../Koneksi/koneksi.php";
    include "../Data/insert_awb.php";

    if($sql){
            echo '<script language="javascript">alert("Data berhasil diproses!")</script>';
            echo '<script>window.location="price.php"</script>';
    }
    else {
        echo mysqli_error($conn);
        echo "gagal proses!";
    }