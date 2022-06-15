<script src="assest/js/paciente.js"></script>
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
        <h3 class="card-title">Lista de Pacientes</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="dataTablePaciente" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre completo</th>
              <th>CI</th>
              <th>Sexo</th>
              <th>Centro de salud</th>
              <th>Foto</th>
              <th>Opciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $listaPaciente = ControladorPaciente::ctrListaPacientes();
            //var_dump($paciente);

            foreach ($listaPaciente as $paciente) {
            ?>
              <tr>
                <td><?php echo $paciente['id_paciente']; ?> </td>
                <td><?php echo $paciente['nom_completo']; ?> </td>
                <td><?php echo $paciente['ci']; ?> </td>
                <td><?php echo $paciente['sexo']; ?> </td>
                <td><?php echo $paciente['establec_salud']; ?> </td>
                <?php
                if ($paciente['foto_paciente'] == '') {
                ?>
                  <td><img src="assest/img/paciente/user.png" alt="" width="50px"></td>
                <?php
                } else {
                ?>
                  <td><img src="assest/img/paciente/<?php echo $paciente['foto_paciente']; ?>" alt="" width="50px"></td>
                <?php
                }
                ?>
                <td>
                  <div class="btn-group">
                    <button title="Ver Paciente" class="btn btn-success" onclick="MVerPaciente(<?php echo $paciente['id_paciente']; ?>)">
                    <i class="fas fa-eye"></i>
                    </button>
                    <button title="Antecentes Patológicos" class="btn btn-warning" onclick="MPatologias(<?php echo $paciente['id_paciente']; ?>)">
                    <i>AP</i>
                    </button>
                    <button title="Examen Oral" class="btn btn-secondary" onclick="MExtraOral(<?php echo $paciente['id_paciente']; ?>)">
                      <i>EH</i>
                    </button>
                    <button title="Odontograma" class="btn btn-primary" onclick="MOdontograma(<?php echo $paciente['id_paciente']; ?>)">
                      <i>OG</i>
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