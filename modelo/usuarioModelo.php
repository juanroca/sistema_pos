<?php
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
    static public function mdlRegUsuarios()
    {
    }
}
