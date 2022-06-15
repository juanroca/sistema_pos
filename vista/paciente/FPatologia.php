<?php
date_default_timezone_set('America/La_Paz');
$fechaActual = date('m-d-Y h:i:s');
?>
<div class="modal-header">
  <h4 class="modal-title">Antecedentes Patológicos</h4>
</div>
<div class="modal-body">
  <!-- Aqui va el contenido -->
  <form action="" id="FRegNuevoUsuario" enctype="multipart/form-data">
    <div class="card-body">
      <h5>Persona que brinda la información</h5>
      <div class="row">
        <div class="form-group col-sm-4">
          <label>Nombre completo</label>
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="nombreF" name="nombreF" placeholder="NOMBRE COMPLETO">
        </div>
        <div class="form-group col-sm-3">
          <label>Dirección</label>
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="domF" name="domF">
        </div>
        <div class="form-group col-sm-3">
          <label>Telefono</label>
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="telfF" name="telfF">
        </div>
      </div>
      <h5>Antecedentes patológicos personales</h5>
      <div class="row">
        <div class="form-group col-sm-3">
          <input type="checkbox" name="patologia[]" value="ANEMIA"><label>Anemia</label><br />
          <input type="checkbox" name="patologia[]" value="ASMA"><label>Asma</label><br />
          <input type="checkbox" name="patologia[]" value="CARDIOPATIAS"><label>Cardiopatias</label><br />
          <input type="checkbox" name="patologia[]" value="DIABETES MEL."><label>Diabetes Mel</label><br />
          <input type="checkbox" name="patologia[]" value="ENF. GASTRICAS"><label>Enf. Gastricas</label><br />
        </div>
        <div class="form-group col-sm-3">
          <input type="checkbox" name="patologia[]" value="EPILEPSIA"><label>Epilepsia</label><br />
          <input type="checkbox" name="patologia[]" value="HEPATITIS"><label>Heptitis</label><br />
          <input type="checkbox" name="patologia[]" value="HIPERTENSION"><label>Hipertensión</label><br />
          <input type="checkbox" name="patologia[]" value="TUBERCULOSIS"><label>Tuberculosis</label><br />
          <input type="checkbox" name="patologia[]" value="VIH"><label>VIH</label><br />
        </div>
        <div class="form-group col-sm-3">
          <label>Alergias</label>
          <select class="form-control form-control-sm" name="perfil" id="perfil">
            <option value="NO" selected>NO</option>
            <option value="SI">SI</option>
          </select>
          <label>Embarazo</label>
          <select class="form-control form-control-sm" name="perfil" id="perfil">
            <option value="NO" selected>NO</option>
            <option value="SI">SI</option>
          </select>
        </div>
        <div class="form-group col-sm-3">
          <label>Otros</label>
          <input type="text" class="form-control form-control-sm" id="otros" name="otros" value="NINGUNO">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-4">
          <label>Actualmente está en algún tratamiento médico?</label>
          <select class="form-control form-control-sm" name="perfil" id="perfil">
            <option value="NO" selected>NO</option>
            <option value="SI">SI</option>
          </select>
        </div>
        <div class="form-group col-sm-4">
          <label>Actualmente recibe algun medicamento?</label>
          <select class="form-control form-control-sm" name="perfil" id="perfil">
            <option value="NO" selected>NO</option>
            <option value="SI">SI</option>
          </select>
        </div>
        <div class="form-group col-sm-4">
          <label>Tuvo hemorragia despues de una extracción dental?</label>
          <select class="form-control form-control-sm" name="perfil" id="perfil">
            <option value="NO" selected>NO</option>
            <option value="SI">SI</option>
          </select>
        </div>
      </div>
      <p class="text-danger" id="error-pass"></p>
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