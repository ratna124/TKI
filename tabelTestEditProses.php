<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'config.php';
$konektor = mysqli_connect("localhost","root","", "tki");

	// membuat variabel untuk menampung data dari form
    $id_test = $_POST['id_test'];
    $id_dft = $_POST['id_dft'];
    $id_negara = $_POST['id_negara'];
    $nilai = $_FILES['nilai']['name'];
      //cek dulu jika merubah gambar negara jalankan coding ini
      if($nilai != "") {
        $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $x = explode('.', $nilai); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['nilai']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $nama_gambar_baru = $angka_acak.'-'.$nilai; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                      move_uploaded_file($file_tmp, 'nilai/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                          
                        // jalankan query UPDATE berdasarkan ID yang negaranya kita edit
                       $query  = "UPDATE test SET id_dft = '$id_dft', id_negara  = '$id_negara',  nilai = '$nama_gambar_baru'";
                        $query .= "WHERE id_test = '$id_test'";
                        $result = mysqli_query($konektor, $query);
                        // periska query apakah ada error
                        if(!$result){
                            die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                                 " - ".mysqli_error($konektor));
                        } else {
                          //tampil alert dan akan redirect ke halaman index.php
                          //silahkan ganti index.php sesuai halaman yang akan dituju
                          echo "<script>alert('Data berhasil diubah.');window.location='tabelTest.php';</script>";
                        }
                  } else {     
                   //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tabelTestEdit.php';</script>";
                  }
        } else {
          // jalankan query UPDATE berdasarkan ID yang negaranya kita edit
          $query  = "UPDATE test SET id_dft = '$id_dft', id_negara  = '$id_negara'";
          $query .= "WHERE id_test = 'id_test'";
          $result = mysqli_query($konektor, $query);
          // periska query apakah ada error
          if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($konektor).
                                 " - ".mysqli_error($konektor));
          } else {
            //tampil alert dan akan redirect ke halaman index.php
            //silahkan ganti index.php sesuai halaman yang akan dituju
              echo "<script>alert('Data berhasil diubah.');window.location='tabelTest.php';</script>";
          }
        }