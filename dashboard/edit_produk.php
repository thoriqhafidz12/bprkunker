 <?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM kunker WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='tampilkunj.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD Produk dengan gambar - Gilacoding</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Edit Hasil Kunjungan <?php echo $data['nama_petugas']; ?></h1>
      <center>
      <form method="POST" action="edit.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
          <label>Nama Petugas</label>
          <input type="text" name="nama_petugas" value="<?php echo $data['nama_petugas']; ?>" autofocus="" required="" />
        </div>
        <div>
        <label>Nama Debitur/Calon Debitur/Nasabah</label>
         <input type="text" name="nama_debitur" value="<?php echo $data['nama_debitur']; ?>" />
        </div>
        <div>
        <label>Alamat</label>
         <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" />
        </div>
        <div>
        <label>Tujuan</label>
        <select name='tujuan' value="<?php echo $data['tujuan']; ?>" required="">
          <option value='Prospek'>Prospek</option>
          <option value='Survey'>Survey</option>
          <option value='Penagihan'>Penagihan</option>
          <option value='Pick Up Dana'>Pick Up Dana</option>
          <option value='Lain lain'>Lain lain</option>
        </select>
        </div>
        
        <div>
          <label>Hasil</label>
         <input type="text" name="hasil" value="<?php echo $data['hasil']; ?>" />
        </div>
        <div>
          <label>Gambar Produk</label>
          <img src="gambar/<?php echo $data['gamlap']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="gamlap" />
          <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
        </div>
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
      </form>
  </body>
</html>