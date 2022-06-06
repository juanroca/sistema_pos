<?php
require_once "conexion.php";
class ModeloPaciente
{
    /*=====LISTA PACIENTES======*/
    static public function mdlListaPacientes()
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM paciente");
        $stmt->execute();
        return $stmt->fetchAll();
        //cerramos la conexion
        $stmt->close;
        //vaciamos cache
        $stmt->null;
    }
    /*=====REGISTRAR NUEVO Paciente======*/
    static public function mdlRegPaciente($data)
    {
        $nombre = $data["nombres"];
        $paterno = $data["paterno"];
        $materno = $data["materno"];
        $nom_completo = $data["nom_completo"];
        $ci = $data["ci"];
        $telefono = $data["telefono"];
        $perfil = $data["perfil"];
        //$estado=$data["estado"];
        $sucursal = $data["sucursal"];
        $login_usu = $data["login_usu"];
        $pass_usu = $data["pass_usu"];
        $foto = $data["foto"];

        $stmt = Conexion::conectar()->prepare("INSERT INTO Paciente(nombres, paterno, materno, nom_completo, ci, telf, perfil, estado, sucursal, login_usu, pass_usu, foto) VALUES (
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

        if ($stmt->execute()) {
            return "correcto";
        } else {
            return "error";
        }
        $stmt->close;
        $stmt->null;
    }

    /*=====DETALLE Paciente======*/
    static public function mdlDetallePaciente($idPaciente)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM Paciente WHERE id_Paciente='$idPaciente'");
        $stmt->execute();
        return $stmt->fetch();
        $stmt->close;  //cerramos la conexion
        $stmt->null; //vaciamos cache       
    }

    /*=====ELIMINAR Paciente======*/
    static public function mdlEliPaciente($idPaciente)
    {
        $stmt = Conexion::conectar()->prepare("DELETE FROM Paciente WHERE id_Paciente=$idPaciente");
        if ($stmt->execute()) {
            return "eliminado";
        } else {
            return "error";
        }
        $stmt->close;  //cerramos la conexion
        $stmt->null; //vaciamos cache 
    }

    /*=====EDITAR Paciente======*/
    static public function mdlEditPaciente($data)
    {
        $idPaciente = $data['idPaciente'];
        $nombre = $data["nombres"];
        $paterno = $data["paterno"];
        $materno = $data["materno"];
        $nom_completo = $data["nom_completo"];
        $ci = $data["ci"];
        $telefono = $data["telefono"];
        $perfil = $data["perfil"];
        $sucursal = $data["sucursal"];
        $estado = $data["estado"];
        $pass_usu = $data["pass_usu"];
        $foto = $data["foto"];

        $stmt = Conexion::conectar()->prepare("UPDATE Paciente SET nombres='$nombre', paterno='$paterno', materno='$materno', nom_completo='$nom_completo', ci='$ci', telf='$telefono', perfil='$perfil', estado='$estado', sucursal='$sucursal', pass_usu='$pass_usu', foto='$foto' WHERE id_Paciente='$idPaciente'");

        if ($stmt->execute()) {
            return "correcto";
        } else {
            return "error";
        }
        $stmt->close;
        $stmt->null;
    }
}
