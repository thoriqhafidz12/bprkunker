<?php
  session_start();
  if(!isset($_SESSION['username']))
  { header('location:daftar_kredit.php');} else {
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
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-2 shadow">
  
  <img class="mb-4" src="../bootstrap/img/LOGO BPR.png" alt="" width="280" height="60" class="col-md-4">
  <a class="navbar-brand col-md-6 col-lg-2 me-0 px-1" href="kunjptgs.php"> FORM -- KUNJUNGAN KERJA</a>
  
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3 " href="daftar_kredit.php">PENDAFTARAN KREDIT</a>
    </div>
  </div>
   <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Sign Out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">PENDAFTARAN KREDIT UMUM (Bulanan/Musiman)</h1>
      </div>
      <div class="col-md-10 py-5">
        <h4 align="center" class="mb-4">Foto harus jelas, tidak boleh buram, dapat dibaca</h4><br><br>
          <form method="POST" action="simpankredit.php" enctype="multipart/form-data" >
            <section class="base">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group first">
                  <label>Nama Inisiator</label>
                  <input type="text" class="form-control" name="nama" onkeypress="return huruf(event)" required/>
                  <br>
                </div>    
              </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group last mb-3">
                    <label>FORMULIR PENDAFTARAN (disertai ttd)</label>
                    <input input type="file"  class="form-control" name="form_daftar">
                    <br>
                  </div>
                </div>
                </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group last mb-3">
                    <label>KTP Pihak 1 (Suami)</label>
                    <input input type="file" class="form-control" name="ktp_p1">
                    </div>    
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group last mb-3">
                    <label>KTP Pihak 2 (Istri)</label>
                    <input input type="file" class="form-control" name="ktp_p2">
                    <br>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group last mb-3">
                    <label>Buku Nikah / surat nikah (Jika Suami-Istri)</label>
                    <input input type="file" class="form-control" name="buku_nikah">
                    <br>
                  </div>
                </div>
                </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group last mb-3">
                    <label>KK (Kartu Keluarga)</label>
                    <input input type="file" class="form-control" name="kk">
                    <br>
                  </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                  <div class="form-group last mb-3">
                    <label>Agunan (Sertifikat/BPKB)</label>
                    <input input type="file" class="form-control" name="agunan">
                    <br>
                  </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                  <div class="form-group last mb-3">
                    <label>SPPT / STNK</label>
                    <input input type="file" class="form-control" name="sppt_stnk"
                    <br>
                  </div>
                </div>
                </div>
                <div class="col-md-10 py-5">
        <h4 align="center" class="mb-2">Data ini berfungsi untuk memepercepat pendaftaran Kredit & Proses SLIK</h4>
        </div>
              <!--<div class="row">-->
              <!--  <div class="col-md-12">-->
              <!--    <div class="form-group last mb-3">-->
              <!--      <label>Lokasi</label>-->
              <!--      <input input type="file" class="form-control" name="lokasi">-->
              <!--      <br>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <div class="d-flex mb-5 mt-4 align-items-center">
                <div class="d-flex align-items-center"><input type="checkbox" required/>
                <label class="control control--checkbox mb-0"><span class="caption"> Saya telah mengisi data diatas dengan jujur & benar</a>.</span>
                  
                  <div class="control__indicator"></div>
                </label>
              </div>
              </div>

              <input type="submit" value="Submit" class="btn px-5 btn-primary">
   </tr>
 </tbody>
</table>
            </section>
            </form>
          </div>
      </div>
    </main>
  </div>
</div>
  </body>