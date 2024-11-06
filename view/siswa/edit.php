<?php
        include "koneksi.php";
        $nisn = $_GET['nisn'];
        $query = "SELECT * FROM siswa WHERE nisn='$nisn'";
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

            <form action="db/db_siswa.php?action=edit" method="post">
          <div class="form-group">
            <input type="hidden" value="<?=$data['nisn'] ?>" id="nisn" name="nisn">
                  <label for="nisn">NISN</label>
                  <input type="number" class="form-control"  value="<?= $data['nisn'] ?>" disabled>
              </div>
              <div class="form-group">
                  <label for="nama">Nama Siswa</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama'] ?>" >
              </div>
              <div class="form-group">
                  <label for="Alamat">Alamat</label>
                  <textarea class="form-control" rows="3" id="alamat" name="alamat" > <?= $data['alamat'] ?></textarea>
              </div>
              <div class="form-group">
                  <label for="nohp">No HP</label>
                  <input type="text" class="form-control" id="nohp" name="nohp" value="<?= $data['nohp'] ?>" >
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