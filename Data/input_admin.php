<?php
    include "../Koneksi/koneksi.php";

    $nama           = $_POST['nama'];
    $alamat         = $_POST['alamat'];
    $no_telepon     = $_POST['no_telepon'];
    $tempat_lahir   = $_POST['tempat_lahir'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $regional       = $_POST['regional'];
    $username       = $_POST['username'];
    $password       = $_POST['password'];

               $sql_1 = mysqli_query($conn, "INSERT INTO person VALUES ('','$nama','$alamat','$no_telepon','$tempat_lahir','$tanggal_lahir','Admin-Regional')");
               $sql_2 = mysqli_query($conn, "INSERT INTO user VALUES ('','$username','$password','$regional','2')");
                
                if($sql_1 && $sql_2){
                                echo '<script language="javascript">alert("Data berhasil disimpan!")</script>';
                                echo '<script>window.location="../Admin/add_admin/index.html"</script>';
                }
                else{
                   echo mysqli_error($conn);
                   echo "gagal insert";
                }
            ?>