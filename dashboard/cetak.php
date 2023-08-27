<?php
  include('koneksi.php'); //agar  terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
<head>
	<title>CETAK DMT-Kunker</title>

	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<style>
		table, td, th {
		border: 2px solid black;
		text-align: center;
		font-size: 11px;
		}

		table {
		border-collapse: collapse;
		width: 100%;
		}
	</style>
</head>
<body>
	<center>
		<h2>DATA KUNJUNGAN KERJA</h2>
	</center>
    <table>
      <thead>
        <tr>
			<th>No</th>
			<th>Tanggal Bertamu</th>
			<th>Nama Petugas</th>
			<th>Nama Debitur</th>
			<th>Alamat</th>
			<th>Tujuan</th>
			<th>Hasil</th>
			<th>Foto</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM kunker ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['tanggal_bertamu']; ?></td>
          <td><?php echo $row['nama_petugas']; ?></td>
          <td><?php echo $row['nama_debitur']; ?></td>
          <td><?php echo $row['alamat']; ?></td>
          <td><?php echo $row['tujuan']; ?></td>
          <td><?php echo $row['hasil']; ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['gamlap']; ?>" style="width: 120px;"></td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
  </body>

	<script>
		window.print();
	</script>

</body>
</html>