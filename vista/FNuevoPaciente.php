<script src="assest/js/paciente.js"></script>
<!-- Content Wrapper. Contains page content -->

<!-- /.content-wrapper -->
<?php
date_default_timezone_set('America/La_Paz');
$fechaActual = date('m-d-Y h:i:s');
?>

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
        <h3 class="card-title">REGISTRO DE NUEVO PACIENTE</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form action="" id="FRegNuevoPaciente" enctype="multipart/form-data">
          <div class="card-body">
            <p>Datos Generales del Consultorio</p>
            <div class="row">
              <div class="form-group col-sm-2">
                <label>Departamento</label>
                <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="dpto" name="dpto" value="COCHABAMBA">
              </div>
              <div class="form-group col-sm-3">
                <label>Municipio</label>
                <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="munic" name="munic" value="COCHABAMBA">
              </div>
              <div class="form-group col-sm-3">
                <label>Consultorio</label>
                <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="consultorio" name="consultorio" placeholder="LOBO DENT">
              </div>
              <div class="form-group col-sm-2">
                <label>CI Médico</label>
                <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="ci_med" name="ci_med" placeholder="6464646">
              </div>
              <div class="form-group col-sm-2">
                <label>Num. HC</label>
                <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="numHc" name="numHC" placeholder="1000001">
              </div>
            </div>
            <p>Datos Generales del Paciente</p>
            <div class="row">
              <div class="form-group col-sm-3">
                <label>Nombres</label>
                <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="nombres" name="nombres">
              </div>
              <div class="form-group col-sm-3">
                <label>Apellido Paterno</label>
                <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="apPaterno" name="apPaterno">
              </div>
              <div class="form-group col-sm-3">
                <label>Apellido Materno</label>
                <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="apMaterno" name="apMaterno">
              </div>
              <div class="form-group col-sm-2">
                <label>CI paciente</label>
                <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="ci_pac" name="ci_pac">
              </div>
              <div class="form-group col-sm-1">
                <label>Edad</label>
                <input type="text" class="form-control form-control-sm" id="edad" name="edad">
              </div>
            </div>
            <div class="row">              
              <div class="form-group col-sm-2">
                <label>Sexo</label>
                <select class="form-control form-control-sm" name="sexo" id="sexo">
                  <option value="MASCULINO" selected>MASCULINO</option>
                  <option value="FEMENINA">FEMENINA</option>
                </select>
              </div>
              <div class="form-group col-sm-3">
                <label>Lugar de Nacimiento</label>
                <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="lug_nac" name="lug_nac" placeholder="COCHABAMBA, CHAPARE, SACABA">
              </div>
              <div class="form-group col-sm-2">
                <label>Fecha de Nac.</label>
                <input type="date" class="form-control form-control-sm" id="f_nac" name="f_nac">
              </div>
              <div class="form-group col-sm-2">
                <label>Telefono</label>
                <input type="text" class="form-control form-control-sm" id="telf" name="telf">
              </div>
              <div class="form-group col-sm-3">
                <label>Domicilio</label>
                <input type="text" class="form-control form-control-sm" id="dom" name="dom">
              </div>
            </div>
            <div class="row">
            <div class="form-group col-sm-2">
                <label>Ocupación</label>
                <input type="text" class="form-control form-control-sm" id="ocupa" name="ocupa">
              </div>
              <div class="form-group col-sm-2">
                <label>Grado de Instrucción</label>
                <select class="form-control form-control-sm" name="instruccion" id="instruccion">
                  <option value="BACHILLER" selected>BACHILLER</option>
                  <option value="PRIMARIA">PRIMARIA</option>
                  <option value="SECUNDARIA">SECUNDARIA</option>
                  <option value="LICENCIATURA">LICENCITURA</option>
                  <option value="TEC. SUPERIOR">TEC. SUPERIOR</option>
                </select>
              </div>
              <div class="form-group col-sm-2">
                <label>Estado Civil</label>
                <select class="form-control form-control-sm" name="eCivil" id="eCivil">
                  <option value="SOLTERO" selected>SOLTERO</option>
                  <option value="CASADO">CASADO</option>
                  <option value="DIVORCIADO">DIVORCIADO</option>
                  <option value="VIUDO">VIUDO</option>
                </select>
              </div>
              <div class="form-group col-sm-2">
                <label>Nacion Originaria</label>
                <select class="form-control form-control-sm" name="nacOrig" id="nacOrig">
                  <option value="QUECHUA" selected>QUECHUA</option>
                  <option value="AYMARA">AYMARA</option>
                  <option value="GUARANI">GUARANI</option>
                  <option value="CHIQUITANO">CHIQUITANO</option>
                  <option value="MOJEÑO">MOJEÑO</option>
                </select>
              </div>
              <div class="form-group col-sm-3">
                <label>Idioma</label>
                <input type="text" class="form-control form-control-sm" id="idioma" name="idioma" value="CASTELLANO, QUECHUA">
              </div>
            </div>
            <p class="text-danger" id="error-pass"></p>
            <!-- /.card-body -->
            <div class="row">
            <label>Foto paciente</label>
              <input type="file" class="form-control" name="fotoPac" id="fotoPac">
            </div>

            <div class="modal-footer justify-content-between">
              <input class="btn btn-primary" type="button" onclick="RegNuevoPaciente();" value="Guardar">
              <a class="btn btn-default" href="paciente">Cancelar</a>
            </div>
        </form>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->