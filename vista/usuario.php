<script src="assest/js/usuario.js"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">

    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Lista de usuarios</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="dataTableUsuario" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre completo</th>
              <th>Login</th>
              <th>Perfil</th>
              <th>Foto</th>
              <th>Ultimo acceso</th>
              <td>
                <button class="btn btn-primary" onclick="MNuevoUsuario()">Nuevo</button>
              </td>
            </tr>
          </thead>
          <tbody>
            <?php
            $listaUsuario = ControladorUsuario::ctrListaUsuarios();
            //var_dump($usuario);

            foreach ($listaUsuario as $usuario) {
            ?>
              <tr>
                <td><?php echo $usuario['id_usuario']; ?> </td>
                <td><?php echo $usuario['nom_completo']; ?> </td>
                <td><?php echo $usuario['login_usu']; ?> </td>
                <td><?php echo $usuario['perfil']; ?> </td>
                <?php
                if ($usuario['foto'] == '') {
                ?>
                  <td><img src="assest/img/usuario/user.png" alt="" width="50px"></td>
                <?php
                } else {
                ?>
                  <td><img src="assest/img/usuario/<?php echo $usuario['foto']; ?>" alt="" width="50px"></td>
                <?php
                }
                ?>
                <td><?php echo $usuario['ultimo_login']; ?> </td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-info" onclick="MVerUsuario(<?php echo $usuario['id_usuario']; ?>)">
                      <i class="fas fa-eye"></i>
                    </button>
                    <button class="btn btn-secondary" onclick="MEditUsuario(<?php echo $usuario['id_usuario']; ?>)">
                      <i class="fas fa-edit"></i>
                    </button>
                    <button class="btn btn-danger" onclick="MEliUsuario(<?php echo $usuario['id_usuario']; ?>)">
                      <i class="fas fa-trash"></i>
                    </button>

                  </div>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->