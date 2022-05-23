<?php
require_once "conexion.php";
class ModeloUsaurio
{
    /*=====MOSTRAR USUARIO======*/
    static public function mdlMostrarUsuario($valor)
    {
        //echo "Llego el usuario: ".$valor. " al modelo";

        $stmt = Conexion::conectar()->prepare("SELECT * FROM usuario WHERE login_usu='$valor");
        $stmt->execute();
        return $stmt->fetch();
        //cerramos la conexion
        $stmt->close;
        //vaciamos cache
        $stmt->null;
    }

    /*=====MOSTRAR USUARIOS======*/
    static public function mdlInfoUsuarios()
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM usuario");
        $stmt->execute();
        return $stmt->fetchAll();
        //cerramos la conexion
        $stmt->close;
        //vaciamos cache
        $stmt->null;
    }
    /*=====REGISTRAR NUEVO USUARIO======*/
    static public function mdlRegUsuario($data){
        $nombre=$data["nombres"];
        $paterno=$data["paterno"];
        $materno=$data["materno"];
        $nom_completo=$data["nom_completo"];
        $ci=$data["ci"];
        $telefono=$data["telefono"];
        $perfil=$data["perfil"];
        //$estado=$data["estado"];
        $sucursal=$data["sucursal"];
        $login_usu=$data["login_usu"];
        $pass_usu=$data["pass_usu"];
        $foto=$data["foto"];               

        $stmt = Conexion::conectar()->prepare("INSERT INTO usuario(nombres, paterno, materno, nom_completo, ci, telf, perfil, estado, sucursal, login_usu, pass_usu, foto) VALUES (
            '$nombre', 
            '$paterno', 
            '$materno', 
            '$nom_completo', 
            '$ci', 
            '$telefono', 
            '$perfil', 
            '1', 
            '$sucursal', 
            '$login_usu', 
            '$pass_usu', 
            '$foto')");
        
        if($stmt->execute()){
            return "correcto";
        }else{
            return "error";
        }
        $stmt->close;
        $stmt->null;
    }
}
