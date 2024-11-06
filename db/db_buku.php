<?php

$proses = $_GET['proses'];
include "../koneksi.php";


if($proses == 'insert'){
    // Ambil nomor buku terakhir
    $query = mysqli_query($koneksi, "SELECT nobuku FROM buku ORDER BY nobuku DESC LIMIT 1");
    $data = mysqli_fetch_array($query);
    $lastNo = $data['nobuku'];

    // Jika nomor buku terakhir ada, tambah 1; jika tidak, mulai dari NB01
    if($lastNo){
        $nobuku = 'NB' . str_pad(substr($lastNo, 2) + 1, 2, '0', STR_PAD_LEFT);
    } else {
        $nobuku = 'NB01';
    }

    // Ambil data lain dari form
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $ISBN = $_POST['ISBN'];
    $tanggal = $_POST['tanggalcatat'];
    $idpegawai = $_POST['idpegawai'];

    // Query untuk memasukkan data ke tabel buku
   mysqli_query($koneksi, "INSERT INTO buku SET nobuku='$nobuku', judul='$judul', pengarang='$pengarang', penerbit='$penerbit', ISBN='$ISBN', tanggalcatat='$tanggal', idpegawai='$idpegawai'");

}
elseif ($proses == "edit") {
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $ISBN = $_POST['ISBN'];
    $tanggal = $_POST['tanggalcatat'];

    mysqli_query($koneksi, "UPDATE buku SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit', ISBN='$ISBN', tanggalcatat='$tanggal'");
}

elseif($proses=='hapus'){
    $nobuku=$_GET['nobuku'];

    $query="DELETE FROM buku WHERE nobuku='$nobuku'";
    mysqli_query($koneksi,$query);
}
header("location:../index.php?page=buku&title=buku");

?>
