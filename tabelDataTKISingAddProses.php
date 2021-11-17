<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data yang di kirim dari form
$id_singapore= $_POST['id_singapore'];
$id_dft = $_POST['id_dft'];
$sektor_sing = $_POST['sektor_sing'];
$ektp_sing = $_POST['ektp_sing'];
$kk_sing = $_POST['kk_sing'];
$akte_sing = $_POST['akte_sing'];
$suratnikah_sing = $_POST['suratnikah_sing'];
$suratijin_sing = $_POST['suratijin_sing'];
$expaspor_sing = $_POST['expaspor_sing'];
$skck_sing = $_POST['skck_sing'];
$status_proses_sing= $_POST['status_proses_sing'];

 
// menginput data ke database
mysqli_query($konektor,"INSERT INTO singapore VALUES('','$id_dft','$sektor_sing','$ektp_sing','$kk_sing','$akte_sing','$suratnikah_sing',
                                                    '$suratijin_sing', '$expaspor_sing','$skck_sing','$status_proses_sing')");
 
// mengalihkan halaman kembali ke tabelDataTKIHong.php
header("location:tabelDataTKIHong.php");
 
?>