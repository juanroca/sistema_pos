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

    /*=====REGISTRO DE NUEVO PACIENTE======*/
static public function ctrRegPaciente()
    {
        require_once "../modelo/pacienteModelo.php";
        $C_fechaActual = date('Y-m-d');
        $C_horaActual = date('h:i:s');

        $C_dpto= strtoupper(trim($_POST['dpto']));
        $C_municipio= strtoupper(trim($_POST['munic']));
        $C_establec_salud= strtoupper(trim($_POST['consultorio']));
        $C_num_hc= trim($_POST['numHC']);
        $C_ci_med= trim($_POST['ci_med']);

        $C_nombres= strtoupper(trim($_POST['nombres']));
        $C_paterno= strtoupper(trim($_POST['apPaterno']));
        $C_materno= strtoupper(trim($_POST['apMaterno']));
        //$C_nom_completo= ;
        $C_ci= trim($_POST['ci_pac']);
        $C_edad= trim($_POST['edad']);
        $C_sexo= strtoupper(trim($_POST['sexo']));
        $C_lugar_nac= strtoupper(trim($_POST['lug_nac']));
        $C_fecha_nac= trim($_POST['f_nac']);
        $C_ocupa= strtoupper(trim($_POST['ocupa']));
        $C_domicilio= strtoupper(trim($_POST['dom']));
        $C_telf= trim($_POST['telf']);
        $C_instrucción= strtoupper(trim($_POST['instruccion']));
        $C_eCivil= strtoupper(trim($_POST['eCivil']));
        $C_nacOrig= strtoupper(trim($_POST['nacOrig']));
        $C_idioma= strtoupper(trim($_POST['idioma']));     
        
        $C_foto = $_FILES['fotoPac'];
        $C_nomFoto = $C_foto['name'];   //captura el nombre del archivo de la imagen en la variable $C_imagen 
        $C_rutaFoto = $C_foto['tmp_name'];
        $C_rutaSave = '../assest/img/paciente/';
        move_uploaded_file($C_rutaFoto, $C_rutaSave.$C_nomFoto); //Subir el nombre de la imagen al sistema

        $data = array(
            'dpto'=>$C_dpto,
            'municipio'=>$C_municipio,
            'establec_salud'=>$C_establec_salud,
            'num_hc'=>$C_num_hc,
            'ci_med'=>$C_ci_med,
            
            'nombres'=>$C_nombres,
            'paterno'=>$C_paterno,
            'materno'=>$C_materno,
            'nom_completo'=>$C_nombres." ".$C_paterno." ".$C_materno,
            'ci'=>$C_ci,
            'edad'=>$C_edad,
            'sexo'=>$C_sexo,
            'lugar_nac'=>$C_lugar_nac,
            'fecha_nac'=>$C_fecha_nac,
            'ocupa'=>$C_ocupa,
            'domicilio'=>$C_domicilio,
            'telf'=>$C_telf,
            'instrucción'=>$C_instrucción,
            'eCivil'=>$C_eCivil,
            'nacOrig'=>$C_nacOrig,
            'idioma'=>$C_idioma,
            'foto_paciente'=>$C_nomFoto,
            
            'estado'=>'ACTIVO',
            //'autor'=>session('usuario'),
            'fecha_crea'=>$C_fechaActual,
            //'edit'=>$C_edit,
            //'fecha_edit'=>$C_fecha_edit,
            //'borrar'=>$C_borrar,
            //'fecha_del'=>$C_fecha_del,            
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
