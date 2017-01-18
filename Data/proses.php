<?php
session_start();
include "../Koneksi/koneksi.php";

$awb            = $_POST['awb'];
$nama           = $_POST['nama'];
$tanggal        = $_POST['tanggal'];
$pt             = $_POST['pt'];
$email          = $_POST['email'];
$from           = $_POST['from'];
$to_kota        = $_POST['to'];
$via            = $_POST['via'];
$berat          = $_POST['berat'];
$asuransi       = $_POST['asuransi'];
$pembayaran     = $_POST['pembayaran'];
$total          = $_POST['total'];


   // $sql        = mysqli_query($conn,"UPDATE `data` SET `total_ongkir`='$total' WHERE `awb`='$awb'");
    $insert     = mysqli_query($conn,"INSERT INTO `data_transaksi` VALUES('$awb','$nama','$tanggal','$pt','$from','$to_kota','$via','$berat','$asuransi','$pembayaran','$total');");


//Email
    $to         = $email;
    $subject    = "RESI PEMBERITAHUAN DATA PENGIRIMAN";
    $pesan      =
"<b>Dear MR/MISS, $nama</b>, <br><br>
Kami ingin menginformasikan anda bahwa berikut data lengkap pengiriman barang, Sebagai berikut:

<table border='1' align='center'>
<tr>
<td rowspan='2' align='center'>
<img src='https://siva.jsstatic.com/id/43522/images/logo/43522_logo_0_56196.jpg' alt='persija' style='width:250px;height:250px;'>
</td>
<td colspan='11' align='center' bgcolor='#ff8533'>
<b>NOTIFIKASI DATA ELITE EXPRESS</b> 
</td>
</tr>
<tr>
<td colspan='11' align='center' bgcolor='#ff8533'>
<b>Data Pengiriman Paket</b>
</td>
</tr>

<tr height='6' align='center' bgcolor='#ff944d'>
<td>
<b>NO AWB</b>
</td>
<td>
<b>NAMA</b>
</td>
<td>
<b>TANGGAL</b>
</td>
<td>
<b>NAMA PT</b>
</td>
<td>
<b>EMAIL</b> 
</td>
<td>
<b>FROM</b>
</td>
<td>
<b>TO</b>
</td>
<td>
<b>VIA/PAKET</b>
</td>
<td>
<b>BERAT /Kg</b>
</td>
<td>
<b>ASURANSI</b>
</td>
<td>
<b>PEMBAYARAN</b>
</td>
<td>
<b>TOTAL BIAYA</b>
</td>
</tr>

<tr align='center'>
<td>
 $awb
</td>
<td>
 $nama
</td>
<td>
 $tanggal
</td>
<td>
 $pt
</td>
<td>
 $email
</td>
<td>
$from
</td>
<td>
$to_kota
</td>
<td>
$via
</td> 
<td>
 $berat
</td>
<td>
 $asuransi
</td>
<td>
 $pembayaran
</td>
<td>
 $total
</td>
</tr>

</table>
<br>

<br>
Terimakasih atas kepercayaan nya kepada ELITE EXPRESS,
<br>
<br>
<br>
Best Regards
<br>
<br>
ELITE EXPRESS
";


        include('phpmailer/class.phpmailer.php');
        include('phpmailer/class.smtp.php');
        $mail = new PHPMailer();

        $mail->Host     = "ssl://smtp.gmail.com"; 
        $mail->Mailer   = "smtp";
        $mail->SMTPAuth = true; 

        $mail->Username = "persijaofficial@gmail.com"; 
        $mail->Password = "Persija1928";
        $webmaster_email = "persijaofficial@gmail.com"; 
        $email = $to;
        $name = "Nama Penerima"; 
        $mail->From = $webmaster_email;
        $mail->FromName = "ELITE EXPRESS";
        $mail->AddAddress($email,$name);
        $mail->AddReplyTo($webmaster_email,"Nama Pengirim");
        $mail->WordWrap = 50; 
        //$mail->AddAttachment("module.txt"); // attachment
        //$mail->AddAttachment("new.jpg"); // attachment
        $mail->IsHTML(true); 
        $mail->Subject = $subject;
        $mail->Body = $pesan; 
        $mail->AltBody = "This is the body when user views in plain text format"; 

        if(!$mail->Send())
        {
        echo "Mailer Error: " . $mail->ErrorInfo;
        }
        else
        {
        //echo "email berhasil dikirim";
                    echo '<script language="javascript">alert("Data berhasil diproses!")</script>';
                    echo '<script>window.location="../Admin/index.html"</script>';
      }

