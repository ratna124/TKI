<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");

	// membuat variabel untuk menampung data dari form
    $id_hongkong = $_POST['id_nhongkong'];
    $sektor_hk = $_POST['sektor_hk'];
    $ektp_hk = $_FILES['ektp_hk']['name'];
    $kk_hk = $_FILES['kk_hk']['name'];
    $akta_hk = $_FILES['akta_hk']['name'];
    $suratnikah_hk = $_FILES['suratnikah_hk']['name'];
    $suratijin_hk = $_FILES['suratijin_hk']['name'];
    $expaspor_hk = $_FILES['expaspor_hk']['name'];
    $skck_hk = $_FILES['skck_hk']['name'];
    $status_proses_hk = $_POST['status_proses_hk'];
  //cek dulu jika merubah gambar negara jalankan coding ini
  if($gambar_negara != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar_negara); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar_negara']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar_negara; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                      
                    // jalankan query UPDATE berdasarkan ID yang negaranya kita edit
                   $query  = "UPDATE negara SET negara_tujuan = '$negara_tujuan', kriteria  = '$kriteria', persyaratan  = '$persyaratan', jumlah_gaji  = '$jumlah_gaji', gambar_negara = '$nama_gambar_baru'";
                    $query .= "WHERE id_negara = '$id_negara'";
                    $result = mysqli_query($konektor, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                             " - ".mysqli_error($konektor));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='tabelNegaraTujuan.php';</script>";
                    }
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tabelNegaraTujuanEdit.php';</script>";
              }
    } else {
      // jalankan query UPDATE berdasarkan ID yang negaranya kita edit
      $query  = "UPDATE negara SET negara_tujuan = '$negara_tujuan', kriteria  = '$kriteria', persyaratan  = '$persyaratan', jumlah_gaji  = '$jumlah_gaji'";
      $query .= "WHERE id_negara = '$id_negara'";
      $result = mysqli_query($konektor, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                             " - ".mysqli_error($konektor));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='tabelNegaraTujuan.php';</script>";
      }
    }