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
        <div class="form-group col-sm-2">
          <label>Rol Usuario</label>
          <select class="form-control form-control-sm" name="rol" id="rol" placeholder="SELECCIONE EL ROL">
            <option value="ADMIN">ADMIN</option>
            <option value="MODERADOR">MODERADOR</option>
          </select>
        </div>
        <div class="form-group col-sm-4">
          <label>Nombres</label>
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="nombres" name="nombres" placeholder="Nombres">
        </div>
        <div class="form-group col-sm-3">
          <label>Apellido Paterno</label>
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="apPaterno" name="apPaterno" placeholder="Apellido paterno">
        </div>
        <div class="form-group col-sm-3">
          <label>Apellido Materno</label>
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="apMaterno" name="apMaterno" placeholder="Apellido materno">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-sm-4">
          <label>Login</label>
          <input type="text" class="form-control form-control-sm" id="login" name="login" placeholder="">
        </div>
        <div class="form-group col-sm-4">
          <label>Contraseña</label>
          <input type="password" class="form-control form-control-sm" id="password1" name="password1" placeholder="">
        </div>
        <div class="form-group col-sm-4">
          <label>Repita la contraseña</label>
          <input type="password" class="form-control form-control-sm" id="password2" name="password2" placeholder="">
        </div>
      </div>
      <p class="text-danger" id="error-pass"></p>
      <div class="row">
        <div class="form-group col-sm-3">
          <label>C.I.</label>
          <input type="text" class="form-control form-control-sm" id="ci" name="ci" placeholder="">
        </div>
        <div class="form-group col-sm-3">
          <label>Teléfono</label>
          <input type="text" class="form-control form-control-sm" id="telefono" name="telefono" placeholder="Número de Teléfono">
        </div>
        <div class="form-group col-sm-6">
          <label>Sucursal</label>
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="sucursal" name="sucursal" placeholder="">
        </div>
      </div>
      <!-- /.card-body -->

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