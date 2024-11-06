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
                          <div class="row">
                  <div class="col">
                      <a href="index.php?page=pegawai_create&title=pegawai_create" class="btn btn-success btn-md"><i class="fas fa-plus"></i> Tambah Data</a>
                  </div>
              </div>
              <div class="row pt-3">
                <div class="col">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Id pegawai</th>
                    <th>Nama pegawai</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>

                    <?php
                        include "koneksi.php";
                        $no=1;
                        $idpegawai=1;
                        $sql=mysqli_query($koneksi,"SELECT * FROM pegawai");
                        while($data=mysqli_fetch_array($sql)){

                            echo "
                            <tr>
                                <td>$no</td>
                                <td>P00$idpegawai</td>
                                <td>{$data['nama']}</td>
                                <td>
                                    <a href='index.php?title=pegawai_view&page=pegawai_detail&idpegawai=$data[idpegawai]' class='btn btn-outline-primary btn-sm'><i class='fas fa-eye'></i></a>
                                    <a href='index.php?title=pegawai_edit&page=pegawai_edit&idpegawai=$data[idpegawai]' class='btn btn-outline-warning btn-sm'><i class='fas fa-pencil-alt'></i></a>
                                    <a href='db/db_pegawai.php?action=hapus&idpegawai=$data[idpegawai]' class='btn btn-danger btn-sm'><i class='far fa-trash-alt'></i></a>
                                </td>
                            </tr>";
                            $no++;
                            $idpegawai++; 
                        }

                        ?>
            
                </tbody>
                </table>
                </div>
              </div>

          </div>
          <!-- /.card-body -->

      </div>