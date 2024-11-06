<?php
include "../koneksi.php";
$aksi=$_GET['action'];

if($aksi=="create"){
    $nisn=$_POST['nisn'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];
    
    $query="INSERT INTO siswa SET nisn='$nisn', nama='$nama', alamat='$alamat', nohp='$nohp'";
    $insert=mysqli_query($koneksi,$query);
}elseif($aksi=="edit"){
    $nisn=$_POST['nisn'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $nohp=$_POST['nohp'];
    // var_dump($nisn,$nama,$alamat);

    $query="UPDATE siswa SET nama='$nama', alamat='$alamat', nohp='$nohp' WHERE nisn='$nisn'";

    $update=mysqli_query($koneksi,$query);
 

}elseif($aksi=='hapus'){
    $nisn=$_GET['nisn'];

    $query="DELETE FROM siswa WHERE nisn='$nisn'";
    mysqli_query($koneksi,$query);
}
header("location:../index.php?title=siswa&page=siswa");