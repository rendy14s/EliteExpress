<?php
    include "../../Koneksi/koneksi.php";

    $from   = $_POST['from'];
    $to     = $_POST['to'];

    include "../../Data/lap_keuangan.php";
?>
<html>
    <head>
        <title>Laporan Keuangan</title>
    </head>
<body>
    <table border="1">
        <tr>
            <td>
                NO
            </td>
            <td>
                No Airwaybill
            </td>
            <td>
                Nama Perusahaan
            </td>
            <td>
                Pembayaran
            </td>
            <td>
                Total Pembayaran
            </td>
        </tr>
          <?php
            $no = 0;
                while($result       = mysqli_fetch_array($sql)){
                    $awb            = $result['awb'];
                    $nama_pt        = $result['nama_pt'];
                    $pembayaran     = $result['pembayaran'];
                    $total_ongkir   = $result['total_ongkir'];

                    $no++;

                    echo "<tr>";
                    echo "<td>";
                    echo $no;
                    echo "</td>";

                     echo "<td>";
                    echo $awb;
                    echo "</td>";

                     echo "<td>";
                    echo $nama_pt;
                    echo "</td>";

                     echo "<td>";
                    echo $pembayaran;
                    echo "</td>";

                     echo "<td>";
                    echo $total_ongkir;
                    echo "</td>";

                     echo "</tr>";
                }
                ?>
        </tr>
 </body>
</html>
    