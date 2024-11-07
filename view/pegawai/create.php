<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js" type="module"></script>
<script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js" nomodule></script>

</head>
<body>
    <style>
        .reset-icon {
    font-size: 1.2em; 
    vertical-align: middle;
    position: relative;
    top: -2px;
}

        </style>
    <div class="card card-success">
          <div class="card-header">
              <h3 class="card-title">Tambah Data Pegawai</h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <form action="db/db_pegawai.php?action=create" method="post">
          <div class="card-body">
              <div class="form-group">
                  <label for="nama">Nama Pegawai</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required>
              </div>
                <div class="form-group">
                  <label for="nohp">No HP</label>
                  <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Masukkan nohp" required>
              </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
              </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
              </div>
              <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" rows="3" id="alamat" name="alamat" placeholder="Masukkan Alamat" required></textarea>
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