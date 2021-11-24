<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data yang di kirim dari form
$id_test = $_POST['id_test'];
$nama_tki = $_POST['nama_tki'];
$id_negara = $_POST['id_negara'];
$nilai = $_POST['nilai'];
 
// menginput data ke database
mysqli_query($konektor,"INSERT INTO test VALUES('','$nama_tki','$id_negara', '$nilai')");
 
// mengalihkan halaman kembali ke tabelTest.php
header("location:tabelTest.php");
 
?>