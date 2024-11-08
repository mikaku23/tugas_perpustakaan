<?php

session_start();
$username = $_POST['username'];
$password = $_POST['password'];
include "../koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * FROM pegawai2 WHERE username='$username' AND password='$password'");
$jumlah_pegawai = mysqli_num_rows($sql);
$data = mysqli_fetch_array($sql);
if ($jumlah_pegawai > 0) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['idpegawai'] = $data['idpegawai'];
    $_SESSION['status_login'] = true;
    $_SESSION['waktu'] = time();
    
    header("location:../index.php");
} else {
    echo "<script type='text/javascript'>
    alert('Username atau Password Salah');
    window.location='../view/login.php';
    </script>";
}


?>