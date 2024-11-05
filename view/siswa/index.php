<div class="card">
          <div class="card-header">
              <h3 class="card-title">Data Siswa</h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="col">
                      <a href="index.php?page=siswa_create&title=siswa_create" class="btn btn-success btn-md"><i class="fas fa-user-plus"></i> Tambah Data</a>
                      <a href="index.php?page=siswa_edit&title=siswa_edit" class="btn btn-success btn-md"><i class="fas fa-user-plus"></i> Edit Data</a>
                  </div>
              </div>
              <div class="row pt-3">
                <div class="col">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NISN</th>
                    <th>Nama siswa</th>
                    <th>Alamat</th>
                    <th>Nohp</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                        include "koneksi.php";
                        $nisn=1;
                        $sql=mysqli_query($koneksi,"SELECT * FROM siswa");
                        while($data=mysqli_fetch_array($sql)){
                            echo "
                            <tr>
                            <td>$nisn</td>
                            <td>$data[nama]</td>
                            <td>$data[alamat]</td>
                            <td>$data[nohp]</td>
                            <td><div class='btn-group'>
                            <a href='#' class='btn btn-sm btn-success' title='Ubah'>
                                <i class='fa fa-pencil-alt'>
                                </i>
                            </a>

                            <a href='#' class='btn btn-sm btn-danger' title='Hapus'>
                                <i class='fa fa-trash-alt'>
                                </i>
                            </a>   
                        </div></td>
                          </tr>";
                          $nisn++; 
                        }
                        ?>
            
                </tbody>
                </table>
                </div>
              </div>

          </div>
          <!-- /.card-body -->

      </div>