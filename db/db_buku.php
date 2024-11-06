<?php

$proses = $_GET['proses'];
include "../koneksi.php";

if($proses == 'insert'){
    $nobuku = $_POST['nobuku'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $ISBN = $_POST['ISBN'];
    $tanggal = $_POST['tanggalcatat']; // Pastikan nama sesuai dengan form
    $idpegawai=$_POST['idpegawai']; // Ambil idpegawai dari form

    // Query untuk memasukkan data ke tabel buku dengan idpegawai sebagai referensi
    // $insert_query = "INSERT INTO buku SET nobuku='$nobuku', judul='$judul', pengarang='$pengarang', penerbit='$penerbit', ISBN='$ISBN', tanggalcatat='$tanggal', idpegawai='$idpegawai'";
    // mysqli_query($koneksi, $insert_query);
     mysqli_query($koneksi, "INSERT INTO buku SET nobuku='$nobuku', judul='$judul', pengarang='$pengarang', penerbit='$penerbit', ISBN='$ISBN', tanggalcatat='$tanggal', idpegawai='$idpegawai'");
}

header("location:../index.php?page=buku&title=buku");
?>
