<?php 
    // koneksi database
	include "config.php";
    $konektor = mysqli_connect("localhost","root","", "tki");
    // menangkap data yang di kirim dari form
    $id_taiwan = $_POST['id_taiwan'];
    $id_dft= $_POST['id_dft'];
	$sektor_taiw = $_POST['sektor_taiw'];
    $kk_taiw = $_POST['kk_taiw'];
    $akte_taiw = $_POST['akte_taiw'];
    $suratnikah_taiw = $_POST['suratnikah_taiw'];
    $suratijin_taiw = $_POST['suratijin_taiw'];
    $expaspor_taiw = $_POST['expaspor_taiw'];
	$status_proses_taiw= $_POST['status_proses_taiw'];
	

    // update data ke database
	mysqli_query($konektor,"UPDATE taiwan SET id_dft='$id_dft', sektor_taiw='$sektor_taiw', kk_taiw='$kk_taiw',
                                                akte_taiw='$akte_taiw', suratnikah_taiw='$suratnikah_taiw',
                                                expaspor='$expaspor_taiw', status_proses_taiw= $status_proses_taiw 
                                                WHERE id_taiwan='$id_taiwan'");
	// mengalihkan halaman kembali ke tabelDataTKITaiwan.php
    header("location:tabelDataTKITaiwan.php");
 ?>