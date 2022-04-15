<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data yang di kirim dari form
$id_blkln= $_POST['id_blkln'];
$id_dft = $_POST['id_dft'];
$id_negara = $_POST['id_negara'];
$jabatan_sektor = $_POST['jabatan_sektor'];
$medical = $_POST['medical'];
 
// menginput data ke database
mysqli_query($konektor,"INSERT INTO blkln VALUES('','$id_dft','$id_negara','$jabatan_sektor','$medical')");
 
// mengalihkan halaman kembali ke tabelblklnln.php
header("location:tabelBlkln.php");
 
?>