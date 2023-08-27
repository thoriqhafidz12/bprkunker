<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $query = $db->prepare("SELECT * FROM petugas WHERE username = ?");
   $query->execute(array($username));
   $hasil = $query->fetch();
   if($query->rowCount() == 0)
   {echo "<div align='center'><h2>Username Belum Terdaftar!</h2> <a href='petugas.html'><h2>Back</h2></a></div>";}
   else {
   if($pass <> $hasil['password']) {
   echo "<div align='center'><h2>Password salah!</h2> <a href='petugas.html'><h2>Back</h2></a></div>";
   } else {
   $_SESSION['username'] = $hasil['username'];
   header('location:../dashboard/kunjptgs.php');
   }
   }
?>

