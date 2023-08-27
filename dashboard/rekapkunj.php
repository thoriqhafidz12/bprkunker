<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>DMT-Kunker</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../bootstrap/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="home.php">DMT Apps</a>
  
  
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Sign out</a>
    </div>
  </div>
</header>

    
    <!-- KONEKSI -->
    <?php
      include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
      
    ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">REKAPITULASI HASIL KUNJUNGAN KERJA</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
		  	    <a href="cetak.php" target="_blank">
            <button class="btn btn-sm btn-outline-secondary">CETAK</button></a>
          </div>
        </div>
      </div>
       <?php 
			      $s_tujuan="";
            $s_petugas="";
            $s_keyword="";
            $s_tanggal="";
            if (isset($_POST['search'])) {
                $s_tujuan = $_POST['s_tujuan'];
                $s_petugas = $_POST['s_petugas'];
                $s_tanggal = $_POST['s_tanggal'];
            }
		?>
		<form method="POST" action="">
	        <div class="row mb-3">
			    <div class="col-sm-12"><h4>Cari</h4></div>
			    <div class="col-sm-3">
			        <div class="form-group">
			            <select name="s_tujuan" id="s_tujuan" class="form-control">
			                <option value="">Filter tujuan</option>
			                <option value="Prospek" <?php if ($s_tujuan=="Prospek"){ echo "selected"; } ?>>Prospek</option>
			                <option value="Survey" <?php if ($s_tujuan=="Survey"){ echo "selected"; } ?>>Survey</option>
			                <option value="Penagihan" <?php if ($s_tujuan=="Penagihan"){ echo "selected"; } ?>>Penagihan</option>
			                <option value="Ambil Tabungan" <?php if ($s_tujuan=="Ambil Tabungan"){ echo "selected"; } ?>>Pick Up Tabungan</option>
			                <option value="Lain lain" <?php if ($s_tujuan=="Lain lain"){ echo "selected"; } ?>>Lain lain</option>
			            </select>
			        </div>
			        </div>
			    <div class="col-sm-2">
			        <div class="form-group">
			            <input type="text" placeholder="Nama Petugas" name="s_petugas" id="s_petugas" class="form-control" value="<?php echo $s_petugas; ?>">
			        </div>
			    </div>
			    
			        </div>
			    </div>
			             <div class="col-sm-2">
			        <div class="form-group">
			            <input type="date" placeholder="tanggal" name="s_tanggal" id="s_tanggal" class="form-control" value="<?php echo $s_tanggal; ?>">
			        </div>
			    </div>
			    <div class="col-sm-2" >
			        <button id="search" name="search" class="btn btn-warning">Cari</button>
			    </div>
			</div>
		</form>
      <div class="table-fixed" >
        <table class="table table-bordered" border=5 cellpadding =5>
          <thead align="center" style=word-break>
          <tr>
            <th>No</th>  
            <th>Tanggal</th>
			<th>Waktu</th>
			<th>Nama debitur</th>
			<th>Alamat</th>
			<th>Jumlah</th>
			<th>Rata-rata waktu kunjungan</th>
       
          </tr>
          </thead>
          <tbody align="center" style=word-break>
          <?php
		    $search_tujuan = '%'. $s_tujuan .'%';
			  $search_tanggal = '%'. $s_tanggal .'%';
		    $search_keyword = '%'. $s_keyword .'%';
		    $search_petugas = '%'. $s_petugas .'%';
		    $no = 1;
		    $query = "SELECT * FROM kunker WHERE tujuan LIKE ? AND tanggal_bertamu LIKE ? AND nama_petugas LIKE ? AND (tujuan LIKE ? OR nama_debitur LIKE ? OR alamat LIKE ?) ORDER BY id DESC";
		    $dewan1 = $koneksi->prepare($query);
		    $dewan1->bind_param('ssssss', $search_tujuan,$search_tanggal, $search_petugas,  $search_keyword, $search_keyword, $search_keyword);
		    $dewan1->execute();
		    $res1 = $dewan1->get_result();

		    if ($res1->num_rows > 0) {
		        while ($row = $res1->fetch_assoc()) {
		               $id = $row['id'];
		               $Tanggal = $row['Tanggal'];
		               $Waktu = $row['Waktu'];
		               $nama_debitur = $row['nama_debitur'];
                       $alamat = $row['alamat'];
					   $jumlah = $row['jumlah_debitur'];
		               $hasil = $row['rata_rata_waktu_kunjungan'];
							
		    ?>
		    <tr>
		      <td><?php echo $no++; ?></td>
		      <td><?php echo $Tanggal; ?></td>
		      <td><?php echo $Waktu; ?></td>
		      <td><?php echo $nama_debitur; ?></td>
			  <td><?php echo $alamat; ?></td>
			  <td><?php echo $jumlah; ?></td>
		      <td><?php echo $hasil; ?></td>
			  
             </td>
		  </tr>
		  <?php } } else { ?> 
		      <tr>
		        <td colspan='7'>Tidak ada data ditemukan</td>
		      </tr>
		  <?php } ?>
        </tbody>
        </table>
      </div>
      <br>
      
    </main>
  </div>
</div>
<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script><script src="/bootstrap/js/dashboard.js"></script>
</body>
</html>
