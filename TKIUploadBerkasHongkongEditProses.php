<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");

	// membuat variabel untuk menampung data dari form
  $id_hongkong = $_POST['id_hongkong'];
  $id_dft = $_POST['id_dft'];
  $sektor_hk = $_POST['sektor_hk'];
  $ektp_hk = $_FILES['ektp_hk']['name'];
  $kk_hk = $_FILES['kk_hk']['name'];
  $akte_hk = $_FILES['akte_hk']['name'];
  $suratnikah_hk = $_FILES['suratnikah_hk']['name'];
  $suratijin_hk = $_FILES['suratijin_hk']['name'];
  $expaspor_hk = $_FILES['expaspor_hk']['name'];
  $skck_hk = $_FILES['skck_hk']['name'];
  $status_proses_hk = $_POST['status_proses_hk'];
  //cek dulu jika merubah gambar negara jalankan coding ini
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
      //akte
      if($akte_hk != "") {
      $ekstensi_diperbolehkanakte = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
      $akte = explode('.', $akte_hk); //memisahkan nama file dengan ekstensi yang diupload
      $ekstensiakte = strtolower(end($akte));
      $file_tmpakte = $_FILES['akte_hk']['tmp_name'];   
      $angka_acak     = rand(1,999);
      $akte_baru = $angka_acak.'-'.$akte_hk;
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
                if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  if(in_array($ekstensiektp, $ekstensi_diperbolehkanektp) === true)  {     
                    move_uploaded_file($file_tmpektp, 'berkas/'.$ektp_baru); //memindah file gambar ke folder gambar
                      if(in_array($ekstensikk, $ekstensi_diperbolehkankk) === true)  {
                        move_uploaded_file($file_tmpkk, 'berkas/'.$kk_baru);
                          if(in_array($ekstensiakte, $ekstensi_diperbolehkanakte) === true)  {
                            move_uploaded_file($file_tmpakte, 'berkas/'.$akte_baru);
                              if(in_array($ekstensisn, $ekstensi_diperbolehkansn) === true)  {
                                move_uploaded_file($file_tmpsn, 'berkas/'.$suratnikah_baru);
                                  if(in_array($ekstensisi, $ekstensi_diperbolehkansi) === true)  {
                                    move_uploaded_file($file_tmpsi, 'berkas/'.$suratijin_baru);
                                      if(in_array($ekstensiep, $ekstensi_diperbolehkanep) === true)  {
                                        move_uploaded_file($file_tmpep, 'berkas/'.$expaspor_baru);
                                          if(in_array($ekstensisk, $ekstensi_diperbolehkansk) === true)  {
                                            move_uploaded_file($file_tmpsk, 'berkas/'.$skck_baru);  
                                              // jalankan query UPDATE berdasarkan ID yang negaranya kita edit
                                              $query  = "UPDATE hongkong SET id_dft = '$id_dft', sektor_hk  = '$sektor_hk', ektp_hk  = '$ektp_baru', kk_hk  = '$kk_baru', akte_hk = '$akte_baru', suratnikah_hk  = '$suratnikah_baru', suratijin_hk = '$suratijin_baru', expaspor_hk  = '$expaspor_baru', skck_hk = '$skck_baru', status_proses_hk = '$status_proses_hk'";
                                              $query .= "WHERE id_honkong = '$id_hongkong'";
                                              $result = mysqli_query($konektor, $query);
                                              // periska query apakah ada error
                                                if(!$result){
                                                  die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                                                  " - ".mysqli_error($konektor));
                                                } else {
                                              //tampil alert dan akan redirect ke halaman index.php
                                                //silahkan ganti index.php sesuai halaman yang akan dituju
                                                  echo "<script>alert('Data berhasil diubah.');window.location='TKIUploadBerkasHongkong.php';</script>";
                                                }
                                          }
                                      }
                                  }
                              }
                          }
                      }
                    }
                } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='TKIUploadBerkasHongkongEdit.php';</script>";
                }
              }
            }
          }
        }
      }
    }
  }
?>