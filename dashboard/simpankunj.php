<?php

include 'koneksi.php';
  $nama_petugas     = $_POST['nama_petugas'];
  $tujuan    = $_POST['tujuan'];
  $nama_debitur    = $_POST['nama_debitur'];
  $alamat    = $_POST['alamat'];
  $hasil    = $_POST['hasil'];
  $gamlap = $_FILES['gamlap']['name'];



if($gamlap != "") {
  $ekstensi_diperbolehkan = array('heic','png','jpg','jpeg','heif','hevc');
  $x = explode('.', $gamlap);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gamlap']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gamlap; 
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); 
                  $query = "INSERT INTO kunker (nama_petugas,nama_debitur,alamat, tujuan, hasil, gamlap) VALUES ('$nama_petugas','$nama_debitur','$alamat', '$tujuan', '$hasil', '$nama_gambar_baru')";
                  $result = mysqli_query($koneksi, $query);
                 
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    
                    echo "<script>alert('Data berhasil ditambah.');window.location='kunjptgs.php';</script>";
                  }

            } else {     
            
                echo "<script>alert('Ekstensi gamlap yang boleh hanya jpg atau png.');window.location='kunjptgs.php';</script>";
            }
} else {
   $query = "INSERT INTO kunker (nama_petugas, nama_debitur, tujuan, alamat, hasil, gamlap) VALUES ('$nama_petugas','$nama_debitur', '$tujuan','$alamat','$hasil',  null)";
                  $result = mysqli_query($koneksi, $query);

                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    
                    echo "<script>alert('Data berhasil ditambah.');window.location='kunjptgs.php';</script>";
                  }
}