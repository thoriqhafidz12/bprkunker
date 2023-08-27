<?php
    //mengambil data gambar dan menyimpannya kedalam variabel
    include "koneksi.php";
    $nama_petugas     = $_POST['nama_petugas'];
    $tujuan    = $_POST['tujuan'];
    $nama_debitur    = $_POST['nama_debitur'];
    $alamat    = $_POST['alamat'];
    $hasil    = $_POST['hasil'];
    $gamlap = $_FILES['gamlap']['name'];
    $ukuran_file = $_FILES['gamlap']['size'];
    $tipe_file = $_FILES['gamlap']['type'];
    $tmp_file = $_FILES['gamlap']['tmp_name'];

    $path = "gambar/".$gamlap;

    if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ 
        if($ukuran_file <= 10000000){ 

          //memindahkan lokasi gambar dari tempat asal ke dalam folder website
          //memiliki 2 parameter yang harus diisi, yaitu parameter tempat asal gambar dan paramter tempat tujuan gambar
          if(move_uploaded_file($tmp_file, $path)){ 
            //query untuk memasukkan data ke dalam database
            $sql = mysqli_query($koneksi,"INSERT INTO kunker (nama_petugas,nama_debitur,alamat, tujuan, hasil, gamlap) VALUES ('$nama_petugas','$nama_debitur','$alamat', '$tujuan', '$hasil', '$gamlap')");
            //jika insert data berhasil, maka akan dikembalikan ke halaman tampilgambar.php
            if($sql){ 
                echo "<script>alert('Data berhasil ditambah.');window.location='kunjptgs.php';</script>";
            }else{
                //jika gagal insert data ke database maka akan memunculkan pesan seperti di bawah ini
                echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.');window.location='kunjptgs.php';</script>";
            }
          }else{
            echo "<script>alert('Maaf, Gambar gagal untuk diupload.');window.location='kunjptgs.php';</script>";
          }
        }else{
          //jika ukuran gambar lebih besar dari 1MB maka akan memunculkan pesan seperti di bawah ini
          echo "<script>alert('Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB');window.location='kunjptgs.php';</script>";
        }
      }else{
        //jika tipe gambar yang diupload bukan jpg atau png maka akan memunculkan pesan seperti di bawah ini
        echo "<script>alert('Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.');window.location='kunjptgs.php';</script>";
      }
?>