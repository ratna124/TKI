<?php 
    // koneksi database
	include "config.php";
    $konektor = mysqli_connect("localhost","root","", "tki");
    // menangkap data yang di kirim dari form
    $id_hongkong = $_POST['id_hongkong'];
    $id_dft= $_POST['id_dft'];
	$sektor = $_POST['sektor'];
	$status= $_POST['status'];
	

    // update data ke database
	mysqli_query($konektor,"update hongkong set id_dft='$id_dft', sektor='$sektor', status= $status where id_hongkong='$id_hongkong'");
	// mengalihkan halaman kembali ke tabelDataTKIHongkong.php
    header("location:tabelDataTKIHongkong.php");
 ?>