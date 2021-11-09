<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data yang di kirim dari form
$id_malaysia= $_POST['id_malaysia'];
$id_dft = $_POST['id_dft'];
$sektor_malay = $_POST['sektor_malay'];
$kk_malay = $_POST['kk_malay'];
$akte_malay = $_POST['akte_malay'];
$suratnikah_malay = $_POST['suratnikah_malay'];
$suratijin_malay = $_POST['suratijin_malay'];
$expaspor_malay = $_POST['expaspor_malay'];
$status_proses_malay= $_POST['status_proses_malay'];

 
// menginput data ke database
mysqli_query($konektor,"INSERT INTO malaysia VALUES('','$id_dft','$sektor_malay','$kk_malay','$akte_malay','$suratnikah_malay',
                                                    '$suratijin_malay', '$expaspor_malay''$status_proses_malay')");
 
// mengalimalayan halaman kembali ke tabelDataTKIMalay.php
header("location:tabelDataTKIMalay.php");
 
?>