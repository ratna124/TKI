<?php 
// koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");
// menangkap data id yang di kirim dari url
$id_blkln = $_GET['id_blkln'];
 
 
// menghapus data dari database
mysqli_query($konektor,"DELETE FROM blkln WHERE id_blkln='$id_blkln'");
 
// mengalihkan halaman kembali ke tabelBlkln.php
header("location:tabelBlkln.php");
 
?>