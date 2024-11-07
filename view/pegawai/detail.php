 <?php
      include "koneksi.php";
      $idpegawai=$_GET['idpegawai'];
      $query="SELECT * FROM pegawai2 WHERE idpegawai='$idpegawai'";
      $find_one=mysqli_query($koneksi,$query);
      $data=mysqli_fetch_assoc($find_one);

      ?>


      <!-- Default box -->
      <div class="card card-success">
          <div class="card-header">
              <h3 class="card-title">Data <?=$data['nama'] ?></h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <div class="card-body">

              <div class="form-group">
                  <label for="idpegawai">Id pegawai</label>
                  <input type="text" class="form-control" id="idpegawai" name="idpegawai"  disabled value="<?=$data['idpegawai'] ?>">
              </div>
              <div class="form-group">
                  <label for="nama">Nama Pegawai</label>
                  <input type="text" class="form-control" id="nama" name="nama" disabled value="<?=$data['nama'] ?>">
              </div>
              <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" disabled value="<?=$data['username'] ?>">
              </div>
              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" disabled value="<?=$data['password'] ?>">
              </div>
              <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" rows="3" id="alamat" name="alamat" disabled> <?=$data['alamat'] ?></textarea>
              </div>
              <div class="form-group">
                  <label for="nohp">No HP</label>
                  <input type="text" class="form-control" id="nohp" name="nohp" disabled value="<?=$data['nohp'] ?>">
              </div>


          </div>
          <!-- /.card-body -->

         <div class="card-footer text-right">
            <a href='index.php?page=pegawai&title=pegawai'>
             <button type="submit" class="btn btn-primary">
                <i class="fas fa-arrow-circle-left"></i> Kembali
             </button>
             </a>
 
        </div>
      </div>
      <!-- /.card -->