<?php
    include"../Koneksi/koneksi.php";

    $awb    = $_POST['awb'];

    $sql =  mysqli_query($conn, "SElECT * FROM data WHERE awb = '$awb'")
?>
<!DOCTYPE>
<html>
    <head>
        <title>Tracking</title>
    </head>
    <body>
        <table border="1">
            <tr>
                    <td>
                        No    
                    </td>
                    <td>
                        No awb
                    </td>
                    <td>
                        Tanggal
                    </td>
                    <td>
                        Nama Pengirim
                    </td>
                    <td>
                        Nama PT
                    </td>
                    <td>
                        FROM
                    </td>
                    <td>
                        TO
                    </td>
                    <td>
                        Deskription
                    </td>
            </tr>
            <?php
                $no = 0;
                while($result   = mysqli_fetch_array($sql)){
                    $awb                = $result['awb'];
                    $tanggal            = $result['tanggal'];
                    $nama               = $result['nama'];
                    $nama_pt            = $result['nama_pt'];
                    $region             = $result['region'];
                    $kota               = $result['kota'];
                    $regional_barang    = $result['regional_barang'];

                    $no++;
                    echo "<tr>";
                    echo "<td>";
                    echo $no;
                    echo "</td>";

                     echo "<td>";
                    echo $awb;
                    echo "</td>";

                     echo "<td>";
                    echo $tanggal;
                    echo "</td>";

                     echo "<td>";
                    echo $nama;
                    echo "</td>";

                     echo "<td>";
                    echo $nama_pt;
                    echo "</td>";

                      echo "<td>";
                    echo $region;
                    echo "</td>";

                      echo "<td>";
                    echo $kota;
                    echo "</td>";

                      echo "<td>";
                    echo $regional_barang;
                    echo "</td>";

                     echo "</tr>";
                }


            ?>
        </table>
    </body>
</html>
