<?php
session_start();
    include "Koneksi/koneksi.php";

    $username   = mysqli_real_escape_string($conn, $_POST['username']);
    $password   = mysqli_real_escape_string($conn, $_POST['password']);

        $sql        = mysqli_query ($conn, "SELECT * FROM `user`");
        $row        = mysqli_num_rows($sql);
        $data       = mysqli_fetch_array($sql);
           
        $id_person  = $data['id_user'];
        $level      = $data['level'];


        if($row != 0){
            $sql_data       = mysqli_query ($conn, "SELECT * FROM `person` WHERE `id_Person` = '$id_person'");
            $data_person    = mysqli_fetch_array($sql_data);

            $id             = $data_person['id_person'];
            $nama           = $data_person['nama'];
            
           

                if($level == 1){
                      $_SESSION['id']      = $id;
                      $_SESSION['nama']    = $nama;
                      $_SESSION['id_user'] = $data['id_user'];
                     echo '<script language="javascript">alert("Selamat datang '.$nama.'")</script>';
                     echo '<script>window.location="admin/index.html"</script>';


                }
                    elseif ($level == 2) {
                          $_SESSION['id']     = $id;
                          $_SESSION['nama']   = $nama;
                         echo '<script language="javascript">alert("Selamat datang '.$nama.' ")</script>';
                         echo '<script>window.location="karyawan/index.html"</script>';
                    }
        }
            else {
                echo '<script language="javascript">alert("Login gagal! Username atau password salah.")</script>';
                echo '<script>window.location="index.php"</script>';
            }




?>