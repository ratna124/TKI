<?php 
    // koneksi database
	include "config.php";
    $konektor = mysqli_connect("localhost","root","", "tki");
    // menangkap data yang di kirim dari form
    $id_dft = $_POST['id_dft'];
    $id_negara = $_POST['id_negara'];
    $nik= $_POST['nik'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$tempat_lahir= $_POST['tempat_lahir'];
	$tanggal_lahir= $_POST['tanggal_lahir'];
    $umur= $_POST['umur'];
    $alamat_lengkap= $_POST['alamat_lengkap'];
    $jenis_kelamin= $_POST['jenis_kelamin'];
    $tb= $_POST['tb'];
    $bb= $_POST['bb'];
    $pendidikan_terakhir= $_POST['pendidikan_terakhir'];
    $status= $_POST['status'];
    $agama= $_POST['agama'];
    $pengalaman_kerja= $_POST['pengalaman_kerja'];

    // update data ke database
	mysqli_query($konektor,"UPDATE pendaftaran SET id_negara='$id_negara',
                                                   nik='$nik', 
                                                   nama_lengkap='$nama_lengkap', 
                                                   tempat_lahir= $tempat_lahir,
                                                   tanggal_lahir='$tanggal_lahir', 
                                                   umur='$umur',
                                                   alamat_lengkap='$alamat_lengkap',
                                                   jenis_kelamin='$jenis_kelamin',
                                                   tb='$tb',
                                                   bb='$bb',
                                                   pendidikan_terakhir='$pendidikan_terakhir',
                                                   status='$status',
                                                   agama='$agama',
                                                   pengalaman_terakhir='$pengalaman_terakhir' 
                                                   WHERE id_dft='$id_dft'");
	// mengalihkan halaman kembali ke tabelPendaftar.php
    header("location:tabelPendaftar.php");
 ?>