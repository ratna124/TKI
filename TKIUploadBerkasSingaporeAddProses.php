<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");

	// membuat variabel untuk menampung data dari form
  $sektor_sing = $_POST['sektor_sing'];
  $ektp_sing = $_FILES['ektp_sing']['name'];
  $kk_sing = $_FILES['kk_sing']['name'];
  $akta_sing = $_FILES['akta_sing']['name'];
  $suratnikah_sing = $_FILES['suratnikah_sing']['name'];
  $suratijin_sing = $_FILES['suratijin_sing']['name'];
  $expaspor_sing = $_FILES['expaspor_sing']['name'];
  $skck_sing = $_FILES['skck_sing']['name'];
  $status_proses_sing = $_POST['status_proses_sing'];

  if($ektp_sing != "") {
    $ekstensi_diperbolehkanektp = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $ektp = explode('.', $ektp_sing); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensiektp = strtolower(end($ektp));
    $file_tmpektp = $_FILES['ektp_sing']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $ektp_baru = $angka_acak.'-'.$ektp_sing; //menggabungkan angka acak dengan nama file sebenarnya
    //kk
    if($kk_sing != "") {
    $ekstensi_diperbolehkankk = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $kk = explode('.', $kk_sing); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensikk = strtolower(end($kk));
    $file_tmpkk = $_FILES['kk_sing']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $kk_baru = $angka_acak.'-'.$kk_sing;
    //akta
    if($akta_sing != "") {
    $ekstensi_diperbolehkanakta = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $akta = explode('.', $akta_sing); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensiakta = strtolower(end($akta));
    $file_tmpakta = $_FILES['akta_sing']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $akta_baru = $angka_acak.'-'.$akta_sing;
    //surat nikah
    if($suratnikah_sing != "") {
    $ekstensi_diperbolehkansn = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $suratnikah = explode('.', $suratnikah_sing); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensisn = strtolower(end($suratnikah));
    $file_tmpsn = $_FILES['suratnikah_sing']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $suratnikah_baru = $angka_acak.'-'.$suratnikah_sing;
    //surat ijin
    if($suratijin_sing != "") {
    $ekstensi_diperbolehkansi = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $suratijin = explode('.', $suratijin_sing); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensisi = strtolower(end($suratijin));
    $file_tmpsi = $_FILES['suratijin_sing']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $suratijin_baru = $angka_acak.'-'.$suratijin_sing;
    //ex paspor
    if($expaspor_sing != "") {
    $ekstensi_diperbolehkanep = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $expaspor = explode('.', $expaspor_sing); //memisasingan nama file dengan ekstensi yang diupload
    $ekstensiep = strtolower(end($expaspor));
    $file_tmpep = $_FILES['expaspor_sing']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $expaspor_baru = $angka_acak.'-'.$expaspor_sing;
    //skck
    if($skck_sing != "") {
    $ekstensi_diperbolehkansk = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $skck = explode('.', $skck_sing); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensisk = strtolower(end($skck));
    $file_tmpsk = $_FILES['skck_sing']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $skck_baru = $angka_acak.'-'.$skck_sing;

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
                    $query = "INSERT INTO singapore (sektor_sing, ektp_sing, kk_sing, akta_sing, suratnikah_sing, suratijin_sing, expaspor_sing, skck_sing, status_proses_sing) VALUES ('$sektor_sing', '$ektp_baru', '$kk_baru', '$akta_baru', '$suratnikah_baru', '$suratijin_baru', '$expaspor_baru', '$skck_baru', '$status_proses_sing')";
                    $result = mysqli_query($konektor, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                             " - ".mysqli_error($konektor));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      echo "<script>alert('Data berhasil ditambah.');window.location='TKIUploadBerkasSingapore.php';</script>";
                    }
  
              }
              }
              }
              }
              }
              }
               else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tTKIUploadBerkasSingaporeAdd.php';</script>";
              }
            }
  } else {
     $query = "INSERT INTO singapore (sektor_sing, ektp_sing, kk_sing, akta_sing, suratnikah_sing, suratijin_sing, expaspor_sing, skck_sing, status_proses_sing) VALUES ('$sektor_sing', null, null, null, null, null, null, null, '$status_proses')";
                    $result = mysqli_query($konektor, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                             " - ".mysqli_error($konektor));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil ditambah.');window.location='TKIUploadBerkasSingapore.php';</script>";
                    }
  }
  }
  }
  }
  }
  }
  }
?>