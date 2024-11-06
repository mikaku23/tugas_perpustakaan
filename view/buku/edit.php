<?php
        include "koneksi.php";
        $nobuku = $_GET['nobuku'];
        $query = "SELECT * FROM buku WHERE nobuku='$nobuku'";
        $find_one = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_assoc($find_one);

        ?>
      <!-- Default box -->

      <div class="card card-warning">
          <div class="card-header">
              <h3 class="card-title">Ubah Data Buku <?=$data['judul'] ?></h3>
              </div>
          </div>
          <div class="card-body">

           <form action="db/db_buku.php?proses=edit" method="post">
          <div class="form-group">
            <input type="hidden" value="<?=$data['nobuku'] ?>" id="nobuku" name="nobuku">
                  <label for="nobuku">No buku</label>
                  <input type="text" class="form-control"  value="<?= $data['nobuku'] ?>" disabled>
              </div>
              <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" value="<?= $data['judul'] ?>" >
              </div>
              <div class="form-group">
                  <label for="pengarang">Pengarang</label>
                  <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?= $data['pengarang'] ?>" >
              </div>
              <div class="form-group">
                  <label for="penerbit">Penerbit</label>
                  <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $data['penerbit'] ?>" >
              </div>
              <div class="form-group">
                  <label for="ISBN">ISBN</label>
                  <input type="text" class="form-control" id="ISBN" name="ISBN" value="<?= $data['ISBN'] ?>" >
              </div>
              <div class="form-group">
                  <label for="tanggalcatat">Tanggal catat</label>
                  <input type="date" class="form-control" id="tanggalcatat" name="tanggalcatat" value="<?= $data['tanggalcatat'] ?>" >
              </div>
              <div class="form-group">
                  <label for="idpegawai">Id pegawai</label>
                  <input type="text" class="form-control" id="idpegawai" name="idpegawai" disabled value="<?=$data['idpegawai'] ?>">
              </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer text-right">
            <a href='index.php?page=buku&title=buku'>
             <button type="submit" class="btn btn-primary">
                <i class="fas fa-arrow-circle-left"></i> Kembali
             </button>
             </a>
              <button type="submit" class="btn btn-warning"><i class="fas fa-save"></i> Ubah</button>
          </div>
          </form>
      </div>
      <!-- /.card -->