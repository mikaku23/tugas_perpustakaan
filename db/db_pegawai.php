<?php

$proses = $_GET['proses'];
include "../koneksi.php";

if ($proses == 'insert') {
    // Ambil ID pegawai terakhir dari database
    $query = mysqli_query($koneksi, "SELECT MAX(idpegawai) AS max_id FROM pegawai");
    $data = mysqli_fetch_assoc($query);
    
    // Tentukan ID pegawai baru
    $idpegawai = $data['max_id'] ? $data['max_id'] + 1 : 1; // Jika tidak ada data, mulai dari 1
    if ($idpegawai > 999) {
        // Jika ID pegawai sudah mencapai batas maksimum
        echo "ID pegawai sudah mencapai batas maksimum 999.";
        exit;
    }

    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];

    // Simpan data pegawai baru
    mysqli_query($koneksi, "INSERT INTO pegawai SET idpegawai='$idpegawai', nama='$nama', nohp='$nohp', alamat='$alamat'");
}

header("location:../index.php?page=pegawai&title=pegawai");
?>
