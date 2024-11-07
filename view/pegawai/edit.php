<?php
        include "koneksi.php";
        $idpegawai = $_GET['idpegawai'];
        $query = "SELECT * FROM pegawai2 WHERE idpegawai='$idpegawai'";
        $find_one = mysqli_query($koneksi, $query);
        $data = mysqli_fetch_assoc($find_one);

        ?>
      <!-- Default box -->

      <div class="card card-warning">
          <div class="card-header">
              <h3 class="card-title">Ubah Data <?=$data['nama'] ?></h3>
              </div>
          </div>
          <div class="card-body">

           <form action="db/db_pegawai.php?action=edit" method="post">
          <div class="form-group">
            <input type="hidden" value="<?=$data['idpegawai'] ?>" id="idpegawai" name="idpegawai">
                  <label for="idpegawai">Id pegawai</label>
                  <input type="text" class="form-control"  value="<?= $data['idpegawai'] ?>" disabled>
              </div>
              <div class="form-group">
                  <label for="nama">Nama Pegawai</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama'] ?>" >
              </div>
              <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" value="<?= $data['username'] ?>" >
              </div>
              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" value="<?= $data['password'] ?>" >
              </div>
              <div class="form-group">
                  <label for="Alamat">Alamat</label>
                  <textarea class="form-control" rows="3" id="alamat" name="alamat" > <?= $data['alamat'] ?></textarea>
              </div>
              <div class="form-group">
                  <label for="nohp">No HP</label>
                  <input type="number" class="form-control" id="nohp" name="nohp" value="<?= $data['nohp'] ?>" >
              </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer text-right">
            <a href='index.php?page=siswa&title=siswa'>
             <button type="submit" class="btn btn-primary">
                <i class="fas fa-arrow-circle-left"></i> Kembali
             </button>
             </a>
              <button type="submit" class="btn btn-warning"><i class="fas fa-save"></i> Ubah</button>
          </div>
          </form>
      </div>
      <!-- /.card -->