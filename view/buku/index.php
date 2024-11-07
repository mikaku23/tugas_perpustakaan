<div class="card">
          <div class="card-header">
              <h3 class="card-title">Data buku</h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <div class="card-body">
            <div class="row">
                  <div class="col">
                      <a href="index.php?page=buku_create&title=buku_create" class="btn btn-success btn-md"><i class="fas fa-plus"></i> Tambah Data</a>
                  </div>
              </div>
              <div class="row pt-3">
                <div class="col">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nomor buku</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Tanggal catat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                        include "koneksi.php";
                        $no=1;
                        $nobuku=1;
                        $sql=mysqli_query($koneksi,"SELECT * FROM buku");
                        while($data=mysqli_fetch_array($sql)){
                            echo "
                            <tr>
                            <td>$no</td>
                            <td>NB0$nobuku</td>
                            <td>$data[judul]</td>
                            <td>$data[pengarang]</td>
                            <td>$data[tanggalcatat]</td>
                            <td><div class='btn-group'>
                              <a href='index.php?title=buku_view&page=buku_detail&nobuku=$data[nobuku]' class='btn btn-outline-primary btn-sm'><i class='fas fa-eye'></i></a>
                              <a href='index.php?title=buku_edit&page=buku_edit&nobuku=$data[nobuku]' class='btn btn-outline-warning btn-sm'><i class='fas fa-pencil-alt'></i></a>
                              <a href='db/db_buku.php?proses=hapus&nobuku=$data[nobuku]' class='btn btn-danger btn-sm'><i class='far fa-trash-alt'></i></a>
                        </div></td>
                          </tr>"; 
                          $no++;
                          $nobuku++;
                        }

                        ?>
            
                </tbody>
                </table>
                </div>
              </div>

          </div>
          <!-- /.card-body -->

      </div>
      
                           