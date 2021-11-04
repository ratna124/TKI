<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data yang di kirim dari form
$id_hongkong= $_POST['id_hongkong'];
$id_dft = $_POST['id_dft'];
$sektor = $_POST['sektor'];
$status= $_POST['status'];

 
// menginput data ke database
mysqli_query($konektor,"insert into hongkong values('','$id_dft','$sektor','$status')");
 
// mengalihkan halaman kembali ke tabelPendaftar.php
header("location:tabelDataTKIHong.php");
 
?>