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
            $usuario = ControladorUsuario::ctrInfoUsuarios();
            //var_dump($usuario);

            foreach ($usuario as $value) {
            ?>
              <tr>
                <td><?php echo $value['id_usuario']; ?> </td>
                <td><?php echo $value['nom_completo']; ?> </td>
                <td><?php echo $value['login']; ?> </td>
                <td><?php echo $value['perfil']; ?> </td>
                <?php
                if ($value['foto'] == '') {
                ?>
                  <td><img src="assest/img/usuario/user.png" alt="" width="50px"></td>
                <?php
                } else {
                ?>
                  <td><img src="assest/img/usuario/<?php echo $value['foto']; ?>" alt="" width="50px"></td>
                <?php
                }
                ?>
                <td><?php echo $value['ultimo_login']; ?> </td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-info">
                      <i class="fas fa-eye"></i>
                    </button>
                    <button class="btn btn-secondary">
                      <i class="fas fa-edit"></i>
                    </button>
                    <button class="btn btn-danger">
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