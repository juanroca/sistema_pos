<?php
require_once "../../controlador/usuario_controlador.php";
require_once "../../modelo/usuarioModelo.php";

$idUsuario = $_GET["idUsuario"];

$usuario = ControladorUsuario::ctrDetalleUsuarios($idUsuario);

date_default_timezone_set('America/La_Paz');
$fechaActual = date('m-d-Y h:i:s');

?>
<div class="modal-header">
  <h4 class="modal-title">Editar datos del Usuario <?php echo $usuario['id_usuario']?></h4>
</div>
<div class="modal-body">
  <!-- Aqui va el contenido -->
  <form action="" id="FEditUsuario" enctype="multipart/form-data">
    <div class="card-body">
      <div class="row">
        <div class="form-group col-sm-3">
          <label>Perfil</label>
          <select class="form-control form-control-sm" name="perfil" id="perfil" placeholder="SELECCIONE EL ROL">
            <option value="ADMIN" <?php if($usuario['perfil']=="ADMIN"):?>selected<?php endif;?>>ADMIN</option>
              <option value="MODERADOR" <?php if($usuario['perfil']=="MODERADOR"):?>selected<?php endif;?>>MODERADOR</option>
          </select>
        </div>
        <div class="form-group col-sm-3">
          <label>Nombres</label>
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="nombres" name="nombres" value="<?php echo $usuario['nombres']?>">
          <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $idUsuario?>">
        </div>
        <div class="form-group col-sm-3">
          <label>Ap. Paterno</label>
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="apPaterno" name="apPaterno" value="<?php echo $usuario['paterno']?>">
        </div>
        <div class="form-group col-sm-3">
          <label>Ap. Materno</label>
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="apMaterno" name="apMaterno" value="<?php echo $usuario['materno']?>">
        </div>
      </div>      
      <div class="row">
        <div class="form-group col-sm-3">
          <label>C.I.</label>
          <input type="text" class="form-control form-control-sm" id="ci" name="ci" value="<?php echo $usuario['ci']?>">
        </div>
        <div class="form-group col-sm-3">
          <label>Teléfono</label>
          <input type="text" class="form-control form-control-sm" id="telefono" name="telefono" value="<?php echo $usuario['telf']?>">
        </div>
        <div class="form-group col-sm-6">
          <label>Sucursal</label>
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="sucursal" name="sucursal" value="<?php echo $usuario['sucursal']?>">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-4">
          <label>Login</label>
          <input type="text" class="form-control form-control-sm" id="login" name="login" autocomplete="off" value="<?php echo $usuario['login_usu']?>" readonly>
        </div>
        <div class="form-group col-sm-4">
          <label>Vuelva a ingresar su Contraseña</label>
          <input type="password" class="form-control form-control-sm" id="pass1" name="pass1" autocomplete="off" value="<?php echo $usuario['pass_usu']?>">
          <input type="hidden" name="pass1Actual" id="pass1Actual" value="<?php echo $usuario['pass_usu']?>">
        </div>
        <div class="form-group col-sm-4">
          <label>Estado</label>
          <select class="form-control form-control-sm" name="estado" id="estado">
            <option value="1"<?php if($usuario['estado']=="1"):?>selected<?php endif;?>>ACTIVO</option>
            <option value="0"<?php if($usuario['estado']=="0"):?>selected<?php endif;?>>INACTIVO</option>
          </select>
        </div>
      </div>
      <p class="text-danger" id="error-pass"></p>
      <!-- /.card-body -->
      <div class="row">
        <input type="file" class="form-control" name="fotoUsu" id="fotoUsu">
        <input type="hidden" name="fotoUsuActual" id="fotoUsuActual" value="<?php echo $usuario['foto']?>">
        <img src="assest/img/usuario/<?php echo $usuario['foto']; ?>" alt="" width="300px">
      </div>

      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-primary" onclick="EditUsuario()">Actualizar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
  </form>
</div>
<div id="mensaje-lg" style="display:flex; justify-content:center;">
  <!-- Aqui va el mensaje de confirmación -->
</div>
<!-- form start -->
