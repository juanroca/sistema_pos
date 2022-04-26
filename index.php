<?php
require_once "controlador/plantilla_controlador.php";
require_once "controlador/usuario_controlador.php";

require_once "modelo/conexion.php";
require_once "modelo/usuarioModelo.php";

$plantilla=new ControladorPlantilla();
$plantilla->ctrPlantilla();
