<!DOCTYPE html>
<html lang="en">
<head>
<?php require('modelo/head/head.php'); ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Prueba Nicolas</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Registrate para ingresar al sistema</p>

      <form id="frmRegistro" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="txtUsuario" placeholder="Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="txtNombres" placeholder="Nombres">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="txtEdad" placeholder="Edad">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="txtPass" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Registrarme</button>
            <div id="respuesta"></div>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-0">
        <a href="#" class="text-center btnRedireccionar" data-url="0">Ya estoy registrado</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<?php require('modelo/footer/footer.php') ?>
</body>
</html>
