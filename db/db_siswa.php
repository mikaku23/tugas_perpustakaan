<?php

$proses=$_GET['proses'];
include "../koneksi.php";

if($proses=='insert'){
    $nisn=$_POST['nisn'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];

  $query="INSERT INTO siswa SET nisn='$nisn', nama='$nama', alamat='$alamat', nohp='$nohp'";
  mysqli_query($koneksi,$query);

  header("location:../index.php?page=siswa&title=siswa");
}