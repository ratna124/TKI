<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data yang di kirim dari form
$id_hongkong= $_POST['id_hongkong'];
$id_dft = $_POST['id_dft'];
$sektor = $_POST['sektor'];
$ektp_hk = $_POST['ektp_hk'];
$kk_hk = $_POST['kk_hk'];
$akte_hk = $_POST['akte_hk'];
$suratnikah_hk = $_POST['suratnikah_hk'];
$suratijin_hk = $_POST['suratijin_hk'];
$expaspor_hk = $_POST['expaspor_hk'];
$skck_hk = $_POST['skck_hk'];
$status_proses_hk= $_POST['status_proses_hk'];

 
// menginput data ke database
mysqli_query($konektor,"INSERT INTO hongkong VALUES('','$id_dft','$sektor','$ektp_hk','$kk_hk','$akte_hk','$suratnikah_hk',
                                                    '$suratijin_hk', '$expaspor_hk','$skck_hk''$status_proses_hk')");
 
// mengalihkan halaman kembali ke tabelDataTKIHong.php
header("location:tabelDataTKIHong.php");
 
?>