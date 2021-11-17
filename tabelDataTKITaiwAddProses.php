<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data yang di kirim dari form
$id_taiwan= $_POST['id_taiwan'];
$id_dft = $_POST['id_dft'];
$sektor_taiw = $_POST['sektor_taiw'];
$ektp_taiw = $_POST['ektp_taiw'];
$kk_taiw = $_POST['kk_taiw'];
$akte_taiw = $_POST['akte_taiw'];
$suratnikah_taiw = $_POST['suratnikah_taiw'];
$suratijin_taiw = $_POST['suratijin_taiw'];
$expaspor_taiw = $_POST['expaspor_taiw'];
$skck_taiw = $_POST['skck_taiw'];
$status_proses_taiw= $_POST['status_proses_taiw'];

 
// menginput data ke database
mysqli_query($konektor,"INSERT INTO taiwan VALUES('','$id_dft','$sektor_taiw','$ektp_taiw','$kk_taiw','$akte_taiw','$suratnikah_taiw',
                                                    '$suratijin_taiw', '$expaspor_taiw', '$skck_taiw','$status_proses_taiw')");
 
// mengalihkan halaman kembali ke tabelDataTKIHong.php
header("location:tabelDataTKITaiw.php");
 
?>