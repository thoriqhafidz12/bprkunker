<?php
  session_start();
  if(!isset($_SESSION['username']))
  { header('location:home.php');} else {
  $username = $_SESSION['username'];}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>DMT-Kunjungan kerja</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="/bootstrap/css/dashboard.css" rel="stylesheet">
    
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="home_daftarkredit.php">DMT Apps</a>


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
            <a class="nav-link active" aria-current="page" href="home.php"hidden/>
              <span data-feather="home"hidden/></span>
              Dashboard
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="/login/daftar.php"hidden/>
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
            <a class="nav-link" href="tampilkunj.php"hidden/>
            <span data-feather="layers"></span>
             Hasil Kunjungan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://docs.google.com/forms/d/1VSTdquaniLt5zOnMjD3r9SWcZASvFnzs3Rv8gf4eePY/edit?chromeless=1#responses"hidden/>
            <span data-feather="inbox"></span>
             Hasil Pendaftaran Kredit
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Jenis Kredit</h1>
      </div>
      <div>
        
        <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSd0iV5pktPaF5r0ijZSmMqfqieU6aH7BVb3AcWL5Z7TCus80g/viewform">
          <span data-feather="inbox"></span>
          Kredit Umum
        </a>
       
        
        <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSdI7Z92qMPXAiYruzwlMkD_Lo9D_Jsd-hrFNxAstYNx7Mr47g/viewform?usp=sf_link">
          <span data-feather="layers"></span>
            Kredit Guru PNS/Sertifikasi/Inpassing
        
      </div>
      <canvas class="my-4 w-100" id="myChart" width="200" height="380"></canvas>
      
      
    </main>
  </div>
</div>
<script src="/bootstrap/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script><script src="/bootstrap/js/dashboard.js"></script>
  </body>
</html>