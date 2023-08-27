<?php
  session_start();
  if(!isset($_SESSION['username']))
  { header('location:kunjptgs.php');} else {
  $username = $_SESSION['username'];}
  include('../login/koneksi.php');
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
      <a class="nav-link px-3 " href="home_daftarkredit.php"/>PENDAFTARAN KREDIT</a>
    </div>
  </div>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3 " href="riwayatkunj.php" >RIWAYAT</a>
    </div>
  </div>
   <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Sign Out</a>
    </div>
  </div>
</header>

<?php
  $query = $db->query("SELECT nama FROM petugas WHERE username ='$_SESSION[username]'");
  $query -> setFetchMode(PDO::FETCH_ASSOC);
  while ( $row = $query->fetch()) {
    $nama = $row['nama'] ;
  } 
?>

<div class="container-fluid">
  <div class="row">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">FORM PENDATAAN KUNJUNGAN KERJA</h1>
      </div>
      <div class="col-md-10 py-5">
        <h4 align="center" class="mb-4">Silahkan isi data dibawah ini</h4><br><br>
          <form method="POST" action="simpanbaru.php" enctype="multipart/form-data" >
            <section class="base">
            <div class="row">
             <div class="col-md-12">
                <div class="form-group first">
                  <label>Nama Debitur/Calon Debitur/Nasabah</label>
                  <input type="text" class="form-control" name="nama_petugas" value="<?php echo $nama?>" hidden/>
                  <input type="text" class="form-control" name="nama_debitur" onkeypress="return huruf(event)" required/>
                  <br>
                </div>    
              </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" onkeypress="return huruf dan angka(event, false)" required/>
                    <br>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label>Tujuan</label>
                    <br>
                    <select name='tujuan' class="form-control" required="">
                     <option value='Prospek'>Prospek</option>
                      <option value='Survey'>Survey</option>
                      <option value='Penagihan'>Penagihan</option>
                      <option value='Pick Up Dana'>Pick Up Dana</option>
                      <option value='Lain lain'>Lain-lain</option>
                    </select>
                    <br>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group last mb-3">
                    <label>Hasil</label>
                    <input input type="text" class="form-control" name="hasil">
                    <label>Pengisian Hasil dilarang menggunakan tanda petik ( ' )</label>
                    <br>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group last mb-3">
                    <label>Foto</label>
                    <input input type="file" class="form-control" name="gamlap">
                      
                    <br>
                  </div>
                </div>
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