
<?php

$aksi=$_GET['action'];
include "../koneksi.php";

if($aksi=='create'){
    $id_pegawai=$_POST['idpegawai'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];

  mysqli_query($koneksi, "INSERT INTO pegawai2 SET idpegawai='$idpegawai', nama='$nama', username='$username',password='$password', alamat='$alamat', nohp='$nohp'");
}
elseif($aksi=="edit"){
  $idpegawai=$_POST['idpegawai'];
  $nama=$_POST['nama'];
  $username=$_POST['username'];
  $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
  $alamat=$_POST['alamat'];
  $nohp=$_POST['nohp'];
  //var_dump($nisn,$nama,$alamat);

  $query="UPDATE pegawai2 SET nama='$nama',username='$username',password='$password', 
  alamat='$alamat', nohp='$nohp' WHERE idpegawai='$idpegawai'";

  $update=mysqli_query($koneksi,$query);

}
elseif($aksi=='hapus'){
    $idpegawai=$_GET['idpegawai'];

    $query="DELETE FROM pegawai2 WHERE idpegawai='$idpegawai'";
    mysqli_query($koneksi,$query);
}
header("location:../index.php?title=pegawai&page=pegawai");