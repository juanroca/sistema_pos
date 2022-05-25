<?php
require_once "conexion.php";
class ModeloUsaurio
{
    /*=====ACCESO DE USUARIO AL SISTEMA======*/
    static public function mdlMostrarUsuario($valor)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM usuario WHERE login_usu='$valor'");
        $stmt->execute();  //ejecutamos la consulta
        return $stmt->fetch(); //retornar el valor recuperado con la consulta
        $stmt->close;  //cerramos la conexion
        $stmt->null; //vaciamos cache       
    }

    /*=====LISTA USUARIOS======*/
    static public function mdlListaUsuarios()
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

    /*=====DETALLE USUARIO======*/
    static public function mdlDetalleUsuario($idUsuario)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM usuario WHERE id_usuario='$idUsuario'");
        $stmt->execute();
        return $stmt->fetch();
        $stmt->close;  //cerramos la conexion
        $stmt->null; //vaciamos cache       
    }    
}
