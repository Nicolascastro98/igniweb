<!DOCTYPE html>
<html lang="en">
<head>
  <title>Perfil</title>
  <?php require('modelo/head/head.php'); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item cerrarSesion">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-power-off "></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="modelo/dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['usuario_global'] ?></a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perfil</p>
                </a>
              </li>
              
            </ul>
          </li>
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Perfil</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Perfil usuario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="modelo/dist/img/avatar.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $_SESSION['usuario_global']; ?></h3>

                <p class="text-muted text-center">Usuario</p>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#datosUsuario" data-toggle="tab">Datos del usuario</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Modificar</a></li>
                  <li class="nav-item"><a class="nav-link" href="#api" data-toggle="tab">API</a></li>
                  <li class="nav-item"><a class="nav-link" href="#apiinactivos" data-toggle="tab">API INACTIVOS</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="datosUsuario">
                   
                    <!-- /.post -->


                <div class="card-body">
                <strong><i class="fas fa-user"></i> Usuario</strong>

                <p class="text-muted">
                  <?php echo $_SESSION['usuario_global']; ?>
                </p>

                <hr>
                
                </div>

                <div class="card-body">
                <strong><i class="fas fa-user"></i> Nombres</strong>

                <p class="text-muted">
                  <?php echo $_SESSION['nombres']; ?>
                </p>

                <hr>
                
                </div>

                <div class="card-body">
                <strong><i class="fas fa-user"></i> Edad</strong>

                <p class="text-muted">
                  <?php echo $_SESSION['edad']; ?>
                </p>

                <hr>
                
                </div>
              <!-- /.card-body -->

                    <!-- Post -->
                    
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal" id="frmDatoUsuario" method="POST">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Usuario</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control"name="txtUsuario" placeholder="Usuario" value="<?php echo $_SESSION['usuario_global']; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Nombres</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="txtNombres" placeholder="Nombres" value="<?php echo $_SESSION['nombres']; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Edad</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" name="txtEdad" placeholder="Edad" value="<?php echo $_SESSION['edad']; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Contraseña</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="txtPass" placeholder="Contraseña">
                        </div>
                      </div>
                      <div class="form-group row">
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                        <input required type="hidden" class="form-control" name="txtId" value="<?php echo $_SESSION['idUsuario'] ?>">
                          <button type="submit" class="btn btn-success">Modificar</button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <div class="tab-pane" id="api">
                    <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Filtrar" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <br>
      <table id="" class="table table-bordered table-hover example1">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Dato 1</th>
                    <th>Dato 2</th>
                    <th>Editar</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php include('controlador/logica/api_activos.php') ?>
                  </tbody>
                  


                </table>
                  </div>


                  <div class="tab-pane" id="apiinactivos">
                    <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Filtrar" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <br>
      <table id="" class="table table-bordered table-hover example1">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Dato 1</th>
                    <th>Dato 2</th>
                    <th>Editar</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php include('controlador/logica/api_inactivos.php') ?>
                  </tbody>
                  
                </table>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<?php require('modelo/footer/footer.php') ?>
</body>
</html>
