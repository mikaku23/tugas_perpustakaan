 <?php
      include "koneksi.php";
      $nobuku=$_GET['nobuku'];
      $query="SELECT * FROM buku WHERE nobuku='$nobuku'";
      $find_one=mysqli_query($koneksi,$query);
      $data=mysqli_fetch_assoc($find_one);

      ?>


      <!-- Default box -->
      <div class="card card-success">
          <div class="card-header">
              <h3 class="card-title">Data buku <?=$data['judul'] ?></h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <div class="card-body">

              <div class="form-group">
                  <label for="nobuku">Nomor buku</label>
                  <input type="text" class="form-control" id="nobuku" name="nobuku"  disabled value="<?=$data['nobuku'] ?>">
              </div>
              <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" id="judul" name="judul" disabled value="<?=$data['judul'] ?>">
              </div>
              <div class="form-group">
                  <label for="pengarang">Pengarang</label>
                  <input type="text" class="form-control" id="pengarang" name="pengarang" disabled value="<?=$data['pengarang'] ?>">
              </div>
              <div class="form-group">
                  <label for="penerbit">Penerbit</label>
                  <input type="text" class="form-control" id="penerbit" name="penerbit" disabled value="<?=$data['penerbit'] ?>">
              </div>
              <div class="form-group">
                  <label for="ISBN">ISBN</label>
                  <input type="text" class="form-control" id="ISBN" name="ISBN" disabled value="<?=$data['ISBN'] ?>">
              </div>
              <div class="form-group">
                  <label for="tanggalcatat">Tanggal catat</label>
                  <input type="date" class="form-control" id="tanggalcatat" name="tanggalcatat" disabled value="<?=$data['tanggalcatat'] ?>">
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
 
        </div>
      </div>
      <!-- /.card -->