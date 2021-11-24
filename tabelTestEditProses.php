<?php 
    // koneksi database
	include "config.php";
    $konektor = mysqli_connect("localhost","root","", "tki");
    // menangkap data yang di kirim dari form
    $id_test = $_POST['id_test'];
    $nama_tki = $_POST['nama_tki'];
    $id_negara = $_POST['id_negara'];
    $nilai = $_POST['nilai'];
	

    // update data ke database
	$query="UPDATE test SET nama_tki='$nama_tki', id_negara='$id_negara', nilai='$nilai' WHERE id_test='$id_test'";
    $result = mysqli_query($konektor, $query);
    if ($result) {
		echo "<script>alert('Berhasil Memperbarui Data!');history.go(-2);</script>";
?>
<?php
	} else {
		echo "<script>alert('Gagal Memperbarui Data!');history.go(-1);</script>".mysqli_error($konektor);
	}
     // mengalihkan halaman kembali ke tabelTest.php
     header("location:tabelTest.php");  
 ?>
    