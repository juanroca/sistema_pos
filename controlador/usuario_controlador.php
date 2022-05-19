<?php
//CAPTURAMOS LA URL
$ruta=parse_url($_SERVER['REQUEST_URI']);
//echo $ruta["query"];
//var_dump($ruta);
 if(isset($ruta["query"])){
     if($ruta["query"]=="ctrRegUsuario"){
         $metodo=$ruta["query"];
         $usuario=new ControladorUsuario();
         $usuario->$metodo();
     }
 }

class ControladorUsuario{
    /*=====acceso al sistema======*/
    static public function ctrIngresoUsuario(){
        if(isset($_POST["loginUsuario"])){
            //echo "Se esta ingresando: ".$_POST["loginUsuario"];

            /*Recepcionar los datos del formulario*/
            $usuario=$_POST["loginUsuario"]; //capturamos el login
            $password=$_POST["passUsuario"]; //capturamos el password

            /*enviar datos al modelo */
            $respuesta=ModeloUsaurio::mdlMostrarUsuario($usuario);
                //echo $respuesta;
                //var_dump($respuesta);

                if($respuesta==null) {
                    echo "<br><p class='alert alert-danger'>Error de acceso</p>";
                }
                else{
                    echo '<script>
                    window.location="inicio"
                    </script>';
                }

                /*if($respuesta["login"]==$usuario && $respuesta["password"]==$password){
                    $_SESSION["iniciarSesion"]=="ok";
                    echo '<script>
                        window.location="asideMenu.php";
                    </script>';
                }*/

        }
    }

    /*=====INFORMACION DE USUARIOS======*/
    static public function ctrInfoUsuarios(){
        $respuesta= ModeloUsaurio::mdlInfoUsuarios();
        return $respuesta;
    }

    /*=====REGISTRO DE NUEVO USUARIOS======*/
    static public function ctrRegUsuario(){
        echo ($_POST["login"]);
        
        //ModeloUsuario::mdlRegUsuarios();
    }



}