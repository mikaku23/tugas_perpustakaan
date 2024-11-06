<?php

include "../koneksi.php";
$aksi = $_GET['action'];

if ($aksi == 'create') {
    $query = mysqli_query($koneksi, "SELECT MAX(idpegawai) AS max_id FROM pegawai");
    $data = mysqli_fetch_assoc($query);

    $idpegawai = $data['max_id'] ? $data['max_id'] + 1 : 1;
    if ($idpegawai > 999) {
        echo "ID pegawai sudah mencapai batas maksimum 999.";
        exit;
    }

    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];

    mysqli_query($koneksi, "INSERT INTO pegawai SET idpegawai='$idpegawai', nama='$nama', nohp='$nohp', alamat='$alamat'");
}

elseif ($aksi == "edit") {
    $idpegawai = $_POST['idpegawai'];
    $nama = $_POST['nama'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];

    mysqli_query($koneksi, "UPDATE pegawai SET nama='$nama', alamat='$alamat', nohp='$nohp' WHERE idpegawai='$idpegawai'");
}
elseif($aksi=='hapus'){
    $idpegawai=$_GET['idpegawai'];

    $query="DELETE FROM pegawai WHERE idpegawai='$idpegawai'";
    mysqli_query($koneksi,$query);
}

header("location:../index.php?page=pegawai&title=pegawai");

?>
