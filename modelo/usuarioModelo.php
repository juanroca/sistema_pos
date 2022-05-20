<?php
require_once "conexion.php";
class ModeloUsaurio
{
    /*=====MOSTRAR USUARIO======*/
    static public function mdlMostrarUsuario($valor)
    {
        //echo "Llego el usuario: ".$valor. " al modelo";

        $stmt = Conexion::conectar()->prepare("SELECT * FROM usuario WHERE login='$valor'");
        $stmt->execute();
        return $stmt->fetch();
        //cerramos la conexion
        $stmt->close;
        //vaciamos cache
        $stmt->null;
    }

    /*=====MOSTRAR USUARIO======*/
    static public function mdlInfoUsuarios()
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM usuario ");
        $stmt->execute();
        return $stmt->fetchAll();
        //cerramos la conexion
        $stmt->close;
        //vaciamos cache
        $stmt->null;
    }
    /*=====REGISTRAR NUEVO USUARIO======*/
    static public function mdlRegUsuarios($data){
        $nombre=$data['nombres'];
        $paterno=$data['paterno'];
        $materno=$data['materno'];
        $completo=$data['nom_completo'];
        $ci=$data['ci'];
        $telefono=$data['telefono'];
        $perfil=$data['perfil'];
        $estado=$data['estado'];
        $sucursal=$data['sucursal'];
        $login_usu=$data['login_usu'];
        $pass_usu=$data['pass_usu'];
        $foto=$data['foto'];               

        $stmt = Conexion::conectar()->prepare("inser into usuario(nombres, paterno, materno, nom_completo, ci, telefono, perfil, estado, sucursal, login_usu, pass_usu, foto) VALUES (
            '$nombre', 
            '$paterno', 
            '$materno', 
            '$completo', 
            '$ci', 
            '$telefono', 
            '$perfil', 
            '$estado', 
            '$sucursal', 
            '$login_usu', 
            '$pass_usu', 
            '$foto')");
        $stmt->execute();   
    }
}
