<?php
date_default_timezone_set('America/La_Paz');
$fechaActual = date('m-d-Y h:i:s');
?>
<div class="modal-header">
  <h4 class="modal-title">Registro Nuevo Usuario</h4>
</div>
<div class="modal-body">
  <!-- Aqui va el contenido -->
  <form action="" id="FRegNuevoUsuario" enctype="multipart/form-data">
    <div class="card-body">
      <div class="row">
        <div class="form-group col-sm-3">
          <label>Perfil</label>
          <select class="form-control form-control-sm" name="perfil" id="perfil" placeholder="SELECCIONE EL ROL">
            <option value="ADMIN">ADMIN</option>
            <option value="MODERADOR">MODERADOR</option>
          </select>
        </div>
        <div class="form-group col-sm-3">
          <label>Nombres</label>
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="nombres" name="nombres" placeholder="NOMBRES">
        </div>
        <div class="form-group col-sm-3">
          <label>Apellido Paterno</label>
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="apPaterno" name="apPaterno" placeholder="APELLIDO PATERNO">
        </div>
        <div class="form-group col-sm-3">
          <label>Apellido Materno</label>
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="apMaterno" name="apMaterno" placeholder="APELLIDO MATERNO">
        </div>
      </div>      
      <div class="row">
        <div class="form-group col-sm-3">
          <label>C.I.</label>
          <input type="text" class="form-control form-control-sm" id="ci" name="ci" placeholder="CÉDULA DE IDENTIDAD">
        </div>
        <div class="form-group col-sm-3">
          <label>Teléfono</label>
          <input type="text" class="form-control form-control-sm" id="telefono" name="telefono" placeholder="TELEFONO">
        </div>
        <div class="form-group col-sm-6">
          <label>Sucursal</label>
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="sucursal" name="sucursal" placeholder="SUCURSAL">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-4">
          <label>Login</label>
          <input type="text" class="form-control form-control-sm" id="login" name="login" autocomplete="off">
        </div>
        <div class="form-group col-sm-4">
          <label>Contraseña</label>
          <input type="password" class="form-control form-control-sm" id="pass1" name="pass1" autocomplete="off">
        </div>
        <div class="form-group col-sm-4">
          <label>Repita la contraseña</label>
          <input type="password" class="form-control form-control-sm" id="pass2" name="pass2" autocomplete="off">
        </div>
      </div>
      <p class="text-danger" id="error-pass"></p>
      <!-- /.card-body -->
      <div class="row">
        <input type="file" class="form-control" name="fotoUsu" id="fotoUsu">
      </div>

      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-primary" onclick="RegNuevoUsuario()">Guardar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
  </form>
</div>
<div id="mensaje-lg" style="display:flex; justify-content:center;">
  <!-- Aqui va el mensaje de confirmación -->
</div>
<!-- form start -->