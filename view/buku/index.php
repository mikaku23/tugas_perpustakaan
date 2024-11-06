<div class="card">
          <div class="card-header">
              <h3 class="card-title">Data Pegawai</h3>

              <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                  </button>

              </div>
          </div>
          <div class="card-body">
              <div class="row pt-3">
                <div class="col">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nomor buku</th>
                    <th>img</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Tanggal catat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                        include "koneksi.php";
                        $sql=mysqli_query($koneksi,"SELECT * FROM buku");
                        while($data=mysqli_fetch_array($sql)){

                            echo "
                            <tr>
                            <td>$data[nobuku]</td>
                            <td></td>
                            <td>$data[judul]</td>
                            <td>$data[pengarang]</td>
                            <td>$data[tanggalcatat]</td>
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
                        }

                        ?>
            
                </tbody>
                </table>
                </div>
              </div>

          </div>
          <!-- /.card-body -->

      </div>
      
                           