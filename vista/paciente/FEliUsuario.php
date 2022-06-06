<?php
require_once "../../controlador/usuario_controlador.php";
require_once "../../modelo/usuarioModelo.php";

$idUsuario = $_GET["idUsuario"];

$usuario = ControladorUsuario::ctrDetalleUsuarios($idUsuario);

?>

<!-- Datos del usuario para ver en el modal -->
<div class="modal-header">
    <h3 class="modal-title">ELIMINAR USUARIO</h3>
</div>
<div class="modal-body">
    <!-- Aqui va el contenido -->
    <h4 class="text-danger">¿DESEA ELIMINAR AL USUARIO <?php echo $usuario['nom_completo']?>?</h4>
</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    <button type="button" class="btn btn-danger" onclick="EliUsuario(<?php echo $usuario['id_usuario'];?>)">Eliminar</button>
</div>