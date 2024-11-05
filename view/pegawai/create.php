<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
    <div class="card card-success">
          <div class="card-header">
              <h3 class="card-title">Tambah Data Pegawai</h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <form action="" method="post">
          <div class="card-body">

              <div class="form-group">
                  <label for="nisn">Id Pegawai</label>
                  <input type="text" class="form-control" id="nisn" placeholder="Masukkan NISN" required>
              </div>
              <div class="form-group">
                  <label for="nama">Nama Pegawai</label>
                  <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" required>
              </div>
              <div class="form-group">
                  <label for="Alamat">Alamat</label>
                  <textarea class="form-control" rows="3" id="alamat" placeholder="Masukkan Alamat" required></textarea>
              </div>
              <div class="form-group">
                  <label for="nohp">No HP</label>
                  <input type="text" class="form-control" id="nohp" placeholder="Masukkan nohp" required>
              </div>
           

          </div>
          <!-- /.card-body -->

          <div class="card-footer text-right">
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
              <button type="reset" class="btn btn-warning">
                <ion-icon name="refresh-circle-outline" class="reset-icon"></ion-icon> Reset </button>
          </div>
          </form>
      </div>
</body>
</html>