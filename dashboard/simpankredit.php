<?php

include 'koneksi.php';
  $nama_inisiator  = $_POST['nama'];
  $Formulir    = $_FILES['form_daftar']['name'];
  $KTP1    = $_FILES['ktp_p1']['name'];
  $KTP2    = $_FILES['ktp_p2']['name'];
  $buku_nikah = $_FILES['buku_nikah']['name'];
  $KK = $_FILES['kk']['name'];
  $agunan = $_FILES['agunan']['name'];
  $SPPT = $_FILES['sppt_stnk']['name'];

if($Formulir != "" AND $KTP1 != "" AND $KTP2 != "" AND $buku_nikah != "" AND $KK != "" AND $agunan != "" AND $SPPT != "") {
  $ekstensi_diperbolehkan = array('heic','png','jpg','jpeg','heif','hevc');
  $x = explode('.', $Formulir AND $KTP1 AND $KTP2 AND $buku_nikah AND $KK and $agunan and $SPPT);
  $ekstensi = strtolower(end($x));
  $file_tmp1 = $_FILES['form_daftar']['tmp_name'];    
  $file_tmp2 = $_FILES['ktp_p1']['tmp_name'];    
  $file_tmp3 = $_FILES['ktp_p2']['tmp_name'];    
  $file_tmp4 = $_FILES['buku_nikah']['tmp_name'];    
  $file_tmp5 = $_FILES['kk']['tmp_name'];    
  $file_tmp6 = $_FILES['agunan']['tmp_name'];    
  $file_tmp7 = $_FILES['sppt_stnk']['tmp_name'];    
  $angka_acak     = rand(1,999);
  $nama_formulir1 = $angka_acak.'-'.$Formulir;
  $nama_formulir2 = $angka_acak.'-'.$KTP1;
  $nama_formulir3 = $angka_acak.'-'.$KTP2;
  $nama_formulir4 = $angka_acak.'-'.$buku_nikah;
  $nama_formulir5 = $angka_acak.'-'.$KK;
  $nama_formulir6 = $angka_acak.'-'.$agunan;
  $nama_formulir7 = $angka_acak.'-'.$SPPT; 
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp1, 'kreditbaru/form/'.$nama_formulir1 AND $file_tmp2, 'kreditbaru/KTP1/'.$nama_formulir2 AND $file_tmp3, 'kreditbaru/KTP2/'.$nama_formulir3 AND $file_tmp4, 'kreditbaru/bukunikah/'.$nama_formulir4 AND $file_tmp5, 'kreditbaru/KK/'.$nama_formulir5 AND $file_tmp6, 'kreditbaru/agunan/'.$nama_formulir6 AND $file_tmp7, 'kreditbaru/spptstnk/'.$nama_formulir7); 
                  $query = "INSERT INTO daftar_kredit (nama_inisiator,form_daftar,ktp_p1,ktp_p2,buku_nikah,kk,agunan,sppt_stnk) VALUES ('$nama_inisiator','$nama_formulir1','$nama_formulir2','$nama_formulir3','$nama_formulir4','$nama_formulir5','$nama_formulir6','$nama_formulir7')";
                  $result = mysqli_query($koneksi, $query);
                 
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    
                    echo "<script>alert('Data berhasil ditambah.');window.location='daftar_kredit.php';</script>";
                  }

            } else {     
            
                echo "<script>alert('Ekstensi FOTO yang boleh hanya jpg atau png.');window.location='daftar_kredit.php';</script>";
            }
} else {
   $query = "INSERT INTO daftar_kredit (nama_inisiator,form_daftar,ktp_p1,ktp_p2,buku_nikah,kk,agunan,sppt_stnk)) VALUES ('$nama_inisiator','null','null','null', 'null', 'null','null','null')";
                  $result = mysqli_query($koneksi, $query);

                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    
                    echo "<script>alert('Data berhasil ditambah.');window.location='daftar_kredit.php';</script>";
                  }
}
