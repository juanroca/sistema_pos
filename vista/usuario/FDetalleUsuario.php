<?php
require_once "../../controlador/usuario_controlador.php";
require_once "../../modelo/usuarioModelo.php";

$idUsuario = $_GET["idUsuario"];

$usuario = ControladorUsuario::ctrDetalleUsuarios($idUsuario);

?>

<!-- Datos del usuario para ver en el modal -->
<div class="modal-header">
    <h4 class="modal-title">DETALLE DEL USUARIO</h4>
</div>
<div class="modal-body">
    <!-- Aqui va el contenido -->
    <div class="row">
        <div class="col-6">
            <table class="">
                <tr>
                    <th>Id Usuario</th>
                    <td><?php echo $usuario['id_usuario'] ?></td>
                </tr>
                <tr>
                    <th>Login</th>
                    <td><?php echo $usuario['login_usu'] ?></td>
                </tr>
                <tr>
                    <th>Nombre</th>
                    <td><?php echo $usuario['nom_completo'] ?></td>
                </tr>
                <tr>
                    <th>CI</th>
                    <td><?php echo $usuario['ci'] ?></td>
                </tr>
                <tr>
                    <th>Telefono</th>
                    <td><?php echo $usuario['telf'] ?></td>
                </tr>
                <tr>
                    <th>Sucursal</th>
                    <td><?php echo $usuario['sucursal'] ?></td>
                </tr>
                <tr>
                    <th>Perfil</th>
                    <td><?php echo $usuario['perfil'] ?></td>
                </tr>
                <tr>
                    <th>Estado</th>
                    <td>
                        <?php
                        if ($usuario['estado'] == "1") {
                            echo "<small class='badge badge-success'>ACTIVO</small>";
                        } else {
                            echo "<small class='badge badge-danger'>INACTIVO</small>";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Fecha de registro</th>
                    <td><?php echo $usuario['fecha_usu'] ?></td>
                </tr>
            </table>
        </div>
        <div>
            <img src="assest/img/usuario/<?php echo $usuario['foto']; ?>" alt="" width="300px">
        </div>
    </div>
</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
</div>