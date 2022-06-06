<?php
//CAPTURAMOS LA URL
$ruta = parse_url($_SERVER['REQUEST_URI']);
//echo $ruta["query"];
//var_dump($ruta);
if (isset($ruta["query"])) {
    if ($ruta["query"] == "ctrRegPaciente" ||
        $ruta["query"] == "ctrEliPaciente" ||
        $ruta["query"] == "ctrEditPaciente")
    {
        $metodo = $ruta["query"];
        $paciente = new ControladorPaciente();
        $paciente->$metodo();
    }
}

class ControladorPaciente
{
    /*=====MOSTRAR LISTA DE PACIENTES======*/
    static public function ctrListaPacientes()
    {
        $respuesta = ModeloPaciente::mdlListaPacientes();
        return $respuesta;
    }

    /*=====REGISTRO DE NUEVO PacienteS======*/
    static public function ctrRegPaciente()
    {
        require_once "../modelo/PacienteModelo.php";
        $fechaActual = date('Y-m-d');
        $horaActual = date('h:i:s');

        $nombres = strtoupper(trim($_POST['nombres']));
        $apPaterno = strtoupper(trim($_POST['apPaterno']));
        $apMaterno = strtoupper(trim($_POST['apMaterno']));
        $ci = trim($_POST['ci']);
        $perfil = strtoupper(trim($_POST['perfil']));
        //$estado=strtoupper(trim($_POST['estado']));
        $loginPaciente = trim($_POST['login']);
        $password = password_hash(trim($_POST['pass1']), PASSWORD_DEFAULT);
        $telf = trim($_POST['telefono']);
        $sucursal = strtoupper(trim($_POST['sucursal']));

        $fotoUsu = $_FILES['fotoUsu'];
        $nomFoto = $fotoUsu['name'];   //captura el nombre del archivo de la imagen en la variable $imagen 
        $rutaFoto = $fotoUsu['tmp_name'];
        $rutaSave = '../assest/img/Paciente/';
        move_uploaded_file($rutaFoto, $rutaSave . $nomFoto); //Subir el nombre de la imagen al sistema

        $data = array(
            'perfil' => $perfil,
            'estado' => 'ACTIVO',
            'nombres' => $nombres,
            'paterno' => $apPaterno,
            'materno' => $apMaterno,
            'nom_completo' => $nombres . ' ' . $apPaterno . ' ' . $apMaterno,
            'ci' => $ci,
            'telefono' => $telf,
            'sucursal' => $sucursal,
            'login_usu' => $loginPaciente,
            'pass_usu' => $password,
            'foto' => $nomFoto,
            //'usu_crea'=>session('login'),
            //'edit_usu'=>$editor,
            //'fecha_edit_usu'=>$fechaActual,
        );
        //var_dump($data);
        $respuesta = ModeloPaciente::mdlRegPaciente($data);
        echo $respuesta;
    }

    /*=====DETALLE DE Paciente======*/
    static public function ctrDetallePacientes($idPaciente)
    {
        $respuesta = ModeloPaciente::mdlDetallePaciente($idPaciente);
        return $respuesta;
    }

    /*=====ELIMINAR DE Paciente======*/
    static public function ctrEliPaciente()
    {
        require_once "../modelo/PacienteModelo.php";
        $idPaciente=$_POST["idPaciente"];
        $respuesta=ModeloPaciente::mdlEliPaciente($idPaciente);
        echo $respuesta;
    }

    /*=====EDITAR PacienteS======*/
    static public function ctrEditPaciente()
    {
        require_once "../modelo/PacienteModelo.php";
        $idPaciente=$_POST["idPaciente"];
        $fechaActual = date('Y-m-d');
        
        $nombres = strtoupper(trim($_POST['nombres']));
        $apPaterno = strtoupper(trim($_POST['apPaterno']));
        $apMaterno = strtoupper(trim($_POST['apMaterno']));
        $ci = trim($_POST['ci']);
        $perfil = strtoupper(trim($_POST['perfil']));        
        //$loginPaciente = trim($_POST['login']);
        $telf = trim($_POST['telefono']);
        $sucursal = strtoupper(trim($_POST['sucursal']));
        $estado = trim($_POST['estado']);
        /* *****ACTUALIZAR PASSWORD****** */
        $passActual = $_POST['pass1Actual'];
        $passEdi = $_POST['pass1'];
            if($passActual!=$passEdi){
            $password = password_hash(trim($_POST['pass1']), PASSWORD_DEFAULT);
            } else{
            $password = $_POST['pass1Actual'];
            }
        /* *****ACTUALIZAR FOTO****** */
        $fotoUsu = $_FILES['fotoUsu'];
        if($fotoUsu['name']==""){           
            $nomFoto=$_POST['fotoUsuActual']; //recuperamos la información del formulario
        }else{            
            $nomFoto = $fotoUsu['name'];   //captura el nombre del archivo de la imagen en la variable $imagen 
            $rutaFoto = $fotoUsu['tmp_name'];
            $rutaSave = '../assest/img/Paciente/';
            move_uploaded_file($rutaFoto, $rutaSave . $nomFoto); //Subir el nombre de la imagen al sistema
        };
            

        $data = array(
            'idPaciente' => $idPaciente,
            'perfil' => $perfil,
            'nombres' => $nombres,
            'paterno' => $apPaterno,
            'materno' => $apMaterno,
            'nom_completo' => $nombres . ' ' . $apPaterno . ' ' . $apMaterno,
            'ci' => $ci,
            'telefono' => $telf,
            'sucursal' => $sucursal,
            'estado' => $estado,
            'pass_usu' => $password,
            'foto' => $nomFoto,
            //'usu_crea'=>session('Paciente'),
            //'edit_usu'=>$editor,
            'fecha_edit_usu'=>$fechaActual,
        );
        //var_dump($data);
        $respuesta = ModeloPaciente::mdlEditPaciente($data);
        echo $respuesta;
    }
}
