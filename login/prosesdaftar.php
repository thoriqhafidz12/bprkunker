<?php
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $query = $db->prepare("SELECT * FROM petugas WHERE username = ?");
   $query->execute(array($username));
   if($query->rowCount() != 0) {
    echo "<div align='center'><h2>Username Sudah Terdaftar!</h2> <a href='daftar.php'><h2>Back</h2></a></div>";}
    else {
    if(!$username || !$pass) {
    echo "<div align='center'><h2>Masih ada data yang kosong!</h2> <a href='daftar.php'><h2>Back</h2></a>";}
    else {
    $sql = $db->prepare("INSERT INTO petugas (username, password) VALUES (?, ?)");
    $simpan = $sql->execute(array($username, $pass));
    if($simpan)
    {echo "<div align='center'><h2>Pendaftaran Petugas Baru Sukses</h2> <a href='daftar.php'><h2>Back</h2></div>";}
    else {echo "<div align='center'><h2>Proses Pendaftaran Gagal!</h2></div>";}
 }
 }
?>
