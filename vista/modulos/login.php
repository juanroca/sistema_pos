
<body class="hold-transition login-page">
<div id="back">

</div>
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Sis</b>TEGO</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Ingrese su usario y contraseña</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usuario" name="loginUsuario" id="loginUsuario" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" name="passUsuario" id="passUsuario" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
        </div>

        <?php
        //instanciamos el controlador usuario
        $login=new ControladorUsuario();

        //convocamos al metodo ctrIngresoUsuario del controlador 
        $login->ctrIngresoUsuario();
        ?>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="vista/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vista/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vista/dist/js/adminlte.min.js"></script>
</body>
</html>