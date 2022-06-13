<?php
date_default_timezone_set('America/La_Paz');
$fechaActual = date('m-d-Y h:i:s');
?>
<div class="modal-header">
  <h4 class="modal-title">Examen Oral</h4>
</div>
<div class="modal-body">
  <!-- Aqui va el contenido -->
  <form action="" id="FRegNuevoUsuario" enctype="multipart/form-data">
    <div class="card-body">
      <div class="row">
        <div class="form-group col-sm-4">
          <h5>Examen Extra Oral</h5>
          <label>ATM
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="nombreF" name="nombreF" value="NINGUNO">
        </label>
          <label>Ganglios linfáticos
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="nombreF" name="nombreF" value="NINGUNO">
          </label>
          <label>Respirador
          <select class="form-control form-control-sm" name="perfil" id="perfil">
            <option value="NINGUNO" selected>NINGUNO</option>
            <option value="NASAL">NASAL</option>
            <option value="BUCAL">BUCAL</option>
            <option value="BUCONASAL">BUCONASAL</option>
          </select>
          </label>
          <label>Otros
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="nombreF" name="nombreF" value="NINGUNO">
          </label>
          <h5>Antecedentes Bucodentales</h5>
          <label>Fecha de última visita odontológica</label>
                <input type="date" class="form-control form-control-sm" id="f_nac" name="f_nac">
          <label>Hábitos</label>
          <select class="form-control form-control-sm" name="perfil" id="perfil">
            <option value="NINGUNO" selected>NINGUNO</option>
            <option value="FUMA">FUMA</option>
            <option value="BEBE">BEBE</option>
            <option value="FUMA Y BEBE">FUMA Y BEBE</option>
          </select>      
          <label>Otros</label>
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="nombreF" name="nombreF" value="NINGUNO">

        </div>
        <div class="form-group col-sm-2">
        
        </div>
        <div class="form-group col-sm-4">
          <h5>Examen Intra Oral</h5>
        <label>Labios</label>
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="nombreF" name="nombreF" value="NINGUNO">
          <label>Lengua</label>
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="nombreF" name="nombreF" value="NINGUNO">
          <label>Paladar</label>
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="nombreF" name="nombreF" value="NINGUNO">
          <label>Piso boca</label>
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="nombreF" name="nombreF" value="NINGUNO">
          <label>Mucosa yugal</label>
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="nombreF" name="nombreF" value="NINGUNO">
          <label>Encias</label>
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="nombreF" name="nombreF" value="NINGUNO">
          <label>Utiliza prótesis</label>
          <select class="form-control form-control-sm" name="perfil" id="perfil">
            <option value="NO" selected>NO</option>
            <option value="SI">SI</option>
          </select>
        </div>
      </div>
      <h5>Antecedentes de Higiene Oral</h5>
      <div class="row">
        <div class="form-group col-sm-4">
        <label>Utiliza cepillo dental?
          <select class="form-control form-control-sm" name="perfil" id="perfil">
            <option value="NO">NO</option>
            <option value="SI" selected>SI</option>
          </select>
          </label>
        </div>
        <div class="form-group col-sm-4">
        <label>Utiliza hilo dental?
          <select class="form-control form-control-sm" name="perfil" id="perfil">
            <option value="NO">NO</option>
            <option value="SI" selected>SI</option>
          </select>
          </label>
        </div><div class="form-group col-sm-4">
        <label>Utiliza enjuague bucal?
          <select class="form-control form-control-sm" name="perfil" id="perfil">
            <option value="NO">NO</option>
            <option value="SI" selected>SI</option>
          </select>
          </label>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-sm-6">
          <label>Frecuencia de cepillado dental
          <input type="text" style="text-transform:uppercase" class="form-control form-control-sm" id="nombreF" name="nombreF"></input></label>
        </div>
        <div class="form-group col-sm-6">
          <label>Durante el cepillado, sangran encias?
          <select class="form-control form-control-sm" name="perfil" id="perfil">
            <option value="NO" selected>NO</option>
            <option value="SI">SI</option>
          </select>
          </label>
        </div>
        <div class="form-group col-sm-3">
          <label>Higiene bucal</label>
          <select class="form-control form-control-sm" name="perfil" id="perfil">
            <option value="BUENA" selected>BUENA</option>
            <option value="REGULAR">REGULAR</option>
            <option value="MALA">MALA</option>
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