<?php
  if(isset($_GET['title'])){
    $title=$_GET['title'];
  }else{
    $title="Aplikasi Perpustakaan";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=strtoupper($title) ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">  <link rel="stylesheet" href="dist/css/darkmode.css">
</head><body class="hold-transition sidebar-mini normal-mode"> <!-- Add normal-mode class -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" id="dark-mode-toggle" href="#" role="button" title="Toggle dark mode">
            <i class="fas fa-sun" id="dark-mode-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4 bg">
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/gojo.WEBP" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">M Haliq</a>
          </div>
        </div>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="index.php?page=dashboard&title=dashboard" class="nav-link <?php if($title==='dashboard') echo 'active'; ?>">
                <i class="fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item <?php echo ($title === 'siswa' || $title === 'siswa_create' || $title === 'siswa_edit') ? 'menu-open' : ''; ?>">
              <a href="index.php?page=siswa&title=siswa" class="nav-link <?php if($title === 'siswa' || $title === 'siswa_create' || $title === 'siswa_edit'){ echo 'active'; } ?>">
                <i class="fas fa-users"></i>
                <p>
                  Siswa 
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php?page=siswa&title=siswa" class="nav-link <?php if($title === 'siswa') echo 'active'; ?>">
                    <i class="fas fa-database"></i>
                    <p>Database</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?page=siswa_create&title=siswa_create" class="nav-link <?php if($title === 'siswa_create') echo 'active'; ?>">
                    <i class="fas fa-plus"></i>
                    <p>Create</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?page=siswa_edit&title=siswa_edit" class="nav-link <?php if($title === 'siswa_edit') echo 'active'; ?>">
                    <i class="far fa-edit"></i>
                    <p>Edit</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="index.php?page=pegawai&title=pegawai" class="nav-link <?php if($title==='pegawai') echo 'active'; ?>">
                <i class="fas fa-users-cog"></i>
                <p>Pegawai</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?page=buku&title=buku" class="nav-link <?php if($title==='buku') echo 'active'; ?>">
                <i class="fas fa-book-open"></i>
                <p>Buku</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

<?php
if (isset($_GET['page'])){

  if($_GET['page']=='dashboard'){
  include "view/dashboard.php";
  }
  elseif($_GET['page']=='pegawai'){
    include "view/pegawai.php";
  }
  elseif($_GET['page']=='siswa'){
    include "view/siswa/index.php";
  }
  elseif($_GET['page'] == 'siswa_create') {
    include "view/siswa/create.php";
  }
  elseif($_GET['page']=='siswa_edit'){
    include "view/siswa/edit.php";
  }
  else{
    include "view/buku.php";
  }
}
else {
  include "view/dashboard.php";
}

?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2024 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="dist/js/darkmode.js"></script>
</body>
</html>
