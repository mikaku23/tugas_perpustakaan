<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" type="module"></script>
    <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" nomodule></script>
    <style>
        .reset-icon {
            font-size: 1.2em;
            vertical-align: middle;
            position: relative;
            top: -2px;
        }
    </style>
</head>
<body>
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Tambah Data Buku</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        
        <form action="db/db_buku.php?proses=insert" method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label for="nobuku">Nomor Buku</label>
                    <input type="text" class="form-control" id="nobuku" name="nobuku" placeholder="Masukkan nomor buku" required>
                </div>
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul" required>
                </div>
                <div class="form-group">
                    <label for="pengarang">Pengarang</label>
                    <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Masukkan pengarang" required>
                </div>
                <div class="form-group">
                    <label for="penerbit">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Masukkan penerbit" required>
                </div>
                <div class="form-group">
                    <label for="ISBN">ISBN</label>
                    <input type="text" class="form-control" id="ISBN" name="ISBN" placeholder="Masukkan ISBN" required>
                </div>
                <div class="form-group">
                    <label for="tanggalcatat">Tanggal Catat</label>
                    <input type="date" class="form-control" id="tanggalcatat" name="tanggalcatat" required>
                </div>
                <div class="form-group">
                    <label for="idpegawai">ID Pegawai</label>
                    <select class="form-control" id="idpegawai" name="idpegawai" required>
                    <option value="">Pilih Pegawai</option>
                    <?php
                    include "koneksi.php";
                    $query = mysqli_query($koneksi, "SELECT idpegawai FROM pegawai");
                    while ($data = mysqli_fetch_assoc($query)) {
                        echo "<option value='" . $data['idpegawai'] . "'>" . $data['idpegawai'] .  "</option>";
                    }
                    ?>
                </select>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <button type="reset" class="btn btn-warning">
                    <ion-icon name="refresh-circle-outline" class="reset-icon"></ion-icon> Reset
                </button>
            </div>
        </form>
    </div>
</body>
</html>
