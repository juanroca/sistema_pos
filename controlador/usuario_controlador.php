<?php
//CAPTURAMOS LA URL
$ruta = parse_url($_SERVER['REQUEST_URI']);
//echo $ruta["query"];
//var_dump($ruta);
if (isset($ruta["query"])) {
    if ($ruta["query"] == "ctrRegUsuario" ||
        $ruta["query"] == "ctrEliUsuario")
    {
        $metodo = $ruta["query"];
        $usuario = new ControladorUsuario();
        $usuario->$metodo();
    }
}

class ControladorUsuario
{
    /*=====acceso al sistema======*/
    static public function ctrIngresoUsuario()
    {
        if (isset($_POST["loginUsuario"]) && isset($_POST["passUsuario"])) {
            echo "Se esta ingresando: " . $_POST["passUsuario"];

            /*Recepcionar los datos del formulario login.php*/
            $usuario = $_POST["loginUsuario"]; //capturamos el login
            $password = $_POST["passUsuario"]; //capturamos el password

            /*enviar datos al modelo */
            $respuesta = ModeloUsaurio::mdlMostrarUsuario($usuario);
            echo $respuesta;

            if ($respuesta == null || password_verify($password, $respuesta['pass_usu']) == false) {
                echo "<br><p class='alert alert-danger'>Error de acceso</p>";
            } else {
                $_SESSION["ingreso"] = "ok";
                $_SESSION["id_usu"] = $respuesta["id_usuario"];
                $_SESSION["completo_usu"] = $respuesta["nom_completo"];
                $_SESSION["perfil_usu"] = $respuesta["perfil"];
                $_SESSION["foto_usu"] = $respuesta["foto"];
                echo '<script>
                    window.location="inicio";
                    </script>';
            }
        }
    }

    /*=====MOSTRAR LISTA DE USUARIOS======*/
    static public function ctrListaUsuarios()
    {
        $respuesta = ModeloUsaurio::mdlListaUsuarios();
        return $respuesta;
    }

    /*=====REGISTRO DE NUEVO USUARIOS======*/
    static public function ctrRegUsuario()
    {
        require_once "../modelo/usuarioModelo.php";
        $fechaActual = date('Y-m-d');
        $horaActual = date('h:i:s');

        $nombres = strtoupper(trim($_POST['nombres']));
        $apPaterno = strtoupper(trim($_POST['apPaterno']));
        $apMaterno = strtoupper(trim($_POST['apMaterno']));
        $ci = trim($_POST['ci']);
        $perfil = strtoupper(trim($_POST['perfil']));
        //$estado=strtoupper(trim($_POST['estado']));
        $loginUsuario = trim($_POST['login']);
        $password = password_hash(trim($_POST['pass1']), PASSWORD_DEFAULT);
        $telf = trim($_POST['telefono']);
        $sucursal = strtoupper(trim($_POST['sucursal']));

        $fotoUsu = $_FILES['fotoUsu'];
        $nomFoto = $fotoUsu['name'];   //captura el nombre del archivo de la imagen en la variable $imagen 
        $rutaFoto = $fotoUsu['tmp_name'];
        $rutaSave = '../assest/img/usuario/';
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
            'login_usu' => $loginUsuario,
            'pass_usu' => $password,
            'foto' => $nomFoto,
            //'usu_crea'=>session('login'),
            //'edit_usu'=>$editor,
            //'fecha_edit_usu'=>$fechaActual,
        );
        //var_dump($data);
        $respuesta = ModeloUsaurio::mdlRegUsuario($data);
        echo $respuesta;
    }

    /*=====DETALLE DE USUARIO======*/
    static public function ctrDetalleUsuarios($idUsuario)
    {
        $respuesta = ModeloUsaurio::mdlDetalleUsuario($idUsuario);
        return $respuesta;
    }

    /*=====ELIMINAR DE USUARIO======*/
    static public function ctrEliUsuario()
    {
        require_once "../modelo/usuarioModelo.php";
        $idUsuario=$_POST["idUsuario"];
        $respuesta=ModeloUsaurio::mdlEliUsuario($idUsuario);
        echo $respuesta;
    }
}
