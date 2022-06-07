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
        require_once "../modelo/pacienteModelo.php";
        $fechaActual = date('Y-m-d');
        $horaActual = date('h:i:s');

        $dpto= strtoupper(trim($_POST['dpto']));
        $municipio= strtoupper(trim($_POST['munic']));
        $establec_salud= strtoupper(trim($_POST['consultorio']));
        $num_hc= trim($_POST['numHC']);;
        $ci_med= trim($_POST['ci_med']);;

        $nombres= strtoupper(trim($_POST['nombres']));
        $paterno= strtoupper(trim($_POST['apPaterno']));
        $materno= strtoupper(trim($_POST['apMaterno']));
        //$nom_completo= ;
        $ci= trim($_POST['ci_pac']);;
        $edad= trim($_POST['edad']);;
        $sexo= strtoupper(trim($_POST['sexo']));
        $lugar_nac= strtoupper(trim($_POST['lug_nac']));
        $fecha_nac= trim($_POST['f_nac']);;
        $ocupa= strtoupper(trim($_POST['ocupa']));
        $domicilio= strtoupper(trim($_POST['dom']));
        $telf= trim($_POST['telf']);;
        $instrucción= strtoupper(trim($_POST['instruccion']));
        $eCivil= strtoupper(trim($_POST['eCivil']));
        $nacOrig= strtoupper(trim($_POST['nacOrig']));
        $idioma= strtoupper(trim($_POST['idioma']));     
        
        $foto = $_FILES['fotoPac'];
        $nomFoto = $foto['name'];   //captura el nombre del archivo de la imagen en la variable $imagen 
        $rutaFoto = $foto['tmp_name'];
        $rutaSave = './assest/img/paciente/';
        move_uploaded_file($rutaFoto, $rutaSave . $nomFoto); //Subir el nombre de la imagen al sistema

        $data = array(
            'dpto'=>$dpto,
            'municipio'=>$municipio,
            'establec_salud'=>$establec_salud,
            'num_hc'=>$num_hc,
            'ci_med'=>$ci_med,
            
            'nombres'=>$nombres,
            'paterno'=>$paterno,
            'materno'=>$materno,
            'nom_completo'=>$nombres." ".$paterno." ".$materno,
            'ci'=>$ci,
            'edad'=>$edad,
            'sexo'=>$sexo,
            'lugar_nac'=>$lugar_nac,
            'fecha_nac'=>$fecha_nac,
            'ocupa'=>$ocupa,
            'domicilio'=>$domicilio,
            'telf'=>$telf,
            'instrucción'=>$instrucción,
            'eCivil'=>$eCivil,
            'nacOrig'=>$nacOrig,
            'idioma'=>$idioma,
            'foto_paciente' =>$nomFoto,
            
            'estado'=>'ACTIVO',
            //'autor'=>session('usuario'),
            'fecha_crea'=>$fechaActual,
            //'edit'=>$edit,
            //'fecha_edit'=>$fecha_edit,
            //'borrar'=>$borrar,
            //'fecha_del'=>$fecha_del,            
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
