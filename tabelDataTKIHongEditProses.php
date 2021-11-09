<?php 
    // koneksi database
	include "config.php";
    $konektor = mysqli_connect("localhost","root","", "tki");
    // menangkap data yang di kirim dari form
    $id_hongkong = $_POST['id_hongkong'];
    $id_dft= $_POST['id_dft'];
	$sektor = $_POST['sektor'];
    $kk_hk = $_POST['kk_hk'];
    $akte_hk = $_POST['akte_hk'];
    $suratnikah_hk = $_POST['suratnikah_hk'];
    $suratijin_hk = $_POST['suratijin_hk'];
    $expaspor_hk = $_POST['expaspor_hk'];
	$status_proses_hk= $_POST['status_proses_hk'];
	

    // update data ke database
	mysqli_query($konektor,"UPDATE hongkong SET id_dft='$id_dft', sektor='$sektor', kk_hk='$kk_hk',
                                                akte_hk='$akte_hk', suratnikah_hk='$suratnikah_hk',
                                                expaspor='$expaspor_hk', status_proses_hk= $status_proses_hk 
                                                WHERE id_hongkong='$id_hongkong'");
	// mengalihkan halaman kembali ke tabelDataTKIHongkong.php
    header("location:tabelDataTKIHong.php");
 ?>