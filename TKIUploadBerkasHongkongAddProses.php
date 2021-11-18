<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");

	// membuat variabel untuk menampung data dari form
  $sektor_hk = $_POST['sektor_hk'];
  $ektp_hk = $_FILES['ektp_hk']['name'];
  $kk_hk = $_FILES['kk_hk']['name'];
  $akta_hk = $_FILES['akta_hk']['name'];
  $suratnikah_hk = $_FILES['suratnikah_hk']['name'];
  $suratijin_hk = $_FILES['suratijin_hk']['name'];
  $expaspor_hk = $_FILES['expaspor_hk']['name'];
  $skck_hk = $_FILES['skck_hk']['name'];
  $status_proses_hk = $_POST['status_proses_hk'];

  if($ektp_hk != "") {
    $ekstensi_diperbolehkanektp = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $ektp = explode('.', $ektp_hk); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensiektp = strtolower(end($ektp));
    $file_tmpektp = $_FILES['ektp_hk']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $ektp_baru = $angka_acak.'-'.$ektp_hk; //menggabungkan angka acak dengan nama file sebenarnya
    //kk
    if($kk_hk != "") {
    $ekstensi_diperbolehkankk = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $kk = explode('.', $kk_hk); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensikk = strtolower(end($kk));
    $file_tmpkk = $_FILES['kk_hk']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $kk_baru = $angka_acak.'-'.$kk_hk;
    //akta
    if($akta_hk != "") {
    $ekstensi_diperbolehkanakta = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $akta = explode('.', $akta_hk); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensiakta = strtolower(end($akta));
    $file_tmpakta = $_FILES['akta_hk']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $akta_baru = $angka_acak.'-'.$akta_hk;
    //surat nikah
    if($suratnikah_hk != "") {
    $ekstensi_diperbolehkansn = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $suratnikah = explode('.', $suratnikah_hk); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensisn = strtolower(end($suratnikah));
    $file_tmpsn = $_FILES['suratnikah_hk']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $suratnikah_baru = $angka_acak.'-'.$suratnikah_hk;
    //surat ijin
    if($suratijin_hk != "") {
    $ekstensi_diperbolehkansi = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $suratijin = explode('.', $suratijin_hk); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensisi = strtolower(end($suratijin));
    $file_tmpsi = $_FILES['suratijin_hk']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $suratijin_baru = $angka_acak.'-'.$suratijin_hk;
    //ex paspor
    if($expaspor_hk != "") {
    $ekstensi_diperbolehkanep = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $expaspor = explode('.', $expaspor_hk); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensiep = strtolower(end($expaspor));
    $file_tmpep = $_FILES['expaspor_hk']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $expaspor_baru = $angka_acak.'-'.$expaspor_hk;
    //skck
    if($skck_hk != "") {
    $ekstensi_diperbolehkansk = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $skck = explode('.', $skck_hk); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensisk = strtolower(end($skck));
    $file_tmpsk = $_FILES['skck_hk']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $skck_baru = $angka_acak.'-'.$skck_hk;

          if(in_array($ekstensiektp, $ekstensi_diperbolehkanektp) === true)  {     
                  move_uploaded_file($file_tmpektp, 'berkas/'.$ektp_baru); //memindah file gambar ke folder gambar
                  if(in_array($ekstensikk, $ekstensi_diperbolehkankk) === true)  {
                  move_uploaded_file($file_tmpkk, 'berkas/'.$kk_baru);
                  if(in_array($ekstensiakta, $ekstensi_diperbolehkanakta) === true)  {
                  move_uploaded_file($file_tmpakta, 'berkas/'.$akta_baru);
                  if(in_array($ekstensisn, $ekstensi_diperbolehkansn) === true)  {
                  move_uploaded_file($file_tmpsn, 'berkas/'.$suratnikah_baru);
                  if(in_array($ekstensisi, $ekstensi_diperbolehkansi) === true)  {
                  move_uploaded_file($file_tmpsi, 'berkas/'.$suratijin_baru);
                  if(in_array($ekstensiep, $ekstensi_diperbolehkanep) === true)  {
                  move_uploaded_file($file_tmpep, 'berkas/'.$expaspor_baru);
                  if(in_array($ekstensisk, $ekstensi_diperbolehkansk) === true)  {
                  move_uploaded_file($file_tmpsk, 'berkas/'.$skck_baru);  
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                    $query = "INSERT INTO hongkong (sektor_hk, ektp_hk, kk_hk, akta_hk, suratnikah_hk, suratijin_hk, expaspor_hk, skck_hk, status_proses_hk) VALUES ('$sektor_hk', '$ektp_baru', '$kk_baru', '$akta_baru', '$suratnikah_baru', '$suratijin_baru', '$expaspor_baru', '$skck_baru', '$status_proses_hk')";
                    $result = mysqli_query($konektor, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                             " - ".mysqli_error($konektor));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      echo "<script>alert('Data berhasil ditambah.');window.location='TKIUploadBerkasHongkong.php';</script>";
                    }
  
              }
              }
              }
              }
              }
              }
               else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tTKIUploadBerkasHongkongAdd.php';</script>";
              }
            }
  } else {
     $query = "INSERT INTO hongkong (sektor_hk, ektp_hk, kk_hk, akta_hk, suratnikah_hk, suratijin_hk, expaspor_hk, skck_hk, status_proses_hk) VALUES ('$sektor_hk', null, null, null, null, null, null, null, '$status_proses')";
                    $result = mysqli_query($konektor, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                             " - ".mysqli_error($konektor));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil ditambah.');window.location='TKIUploadBerkasHongkong.php';</script>";
                    }
  }
  }
  }
  }
  }
  }
  }
?>