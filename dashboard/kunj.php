<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>DMT-Kunjungan Kerja</title>

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
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="home.php">DMT-Kunjungan kerja</a>
  
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="/login/daftar.php">
              <span data-feather="plus-circle"></span>
              Tambah Petugas
            </a>
          </li>
        </ul>
        <!--HASIL SIMPAN DATA -->
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved Reports</span>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="tampilkunj.php">
            <span data-feather="layers"></span>
             Hasil Kunjungan
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">FORM BUKU PENDATAAN KUNJUNGAN KERJA</h1>
      </div>
      <div class="col-md-10 py-5">
        <h4 align="center" class="mb-4">Silahkan isi daftar dibawah ini</h4><br><br>
          <form action="simpankunj.php" method="post">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group first">
                  <label>Nama Petugas</label>
                  <input type="text" class="form-control" name="nama_petugas" onkeypress="return huruf(event)" />
                  <br>
                </div>    
              </div>
              <div class="col-md-6">
                <div class="form-group first">
                  <label>Nama Debitur/Calon Debitur/nasabah</label>
                  <input type="text" class="form-control" name="nama_debitur" onkeypress="return huruf(event)" />
                  <br>
                </div>    
              </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" onkeypress="return huruf dan angka(event, false)">
                    <br>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label>Tujuan</label>
                    <input type="text" class="form-control" name="tujuan">
                    <br>
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label>Tanggal</label>
                    <input type="datetime-local" class="form-control" name="tanggal_bertamu" onkeypress="return huruf dan angka(event)">
                    <br>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group last mb-3">
                    <label>Hasil</label>
                    <input input type="text" class="form-control" name="hasil" onkeypress="return huruf dan angka(event)">
                    <br>
                  </div>
                </div>
              </div>
              
              <div class="d-flex mb-5 mt-4 align-items-center">
                <div class="d-flex align-items-center"><input type="checkbox"/>
                <label class="control control--checkbox mb-0"><span class="caption">Saya telah mengisi data diatas dengan benar</a>.</span>
                  
                  <div class="control__indicator"></div>
                </label>
              </div>
              </div>

              <input type="submit" value="Submit" class="btn px-5 btn-primary">

            </form>
          </div>
      </div>
    </main>
  </div>
  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script><script src="../bootstrap/js/dashboard.js"></script>
</div>
  </body>