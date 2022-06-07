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
        $dpto=$data["dpto"];
        $municipio=$data["municipio"];
        $establec_salud=$data["establec_salud"];
        $num_hc=$data["num_hc"];
        $ci_med=$data["ci_med"];

        $nombres=$data["nombres"];
        $paterno=$data["paterno"];
        $materno=$data["materno"];
        $nom_completo=$data["nom_completo"];
        $ci=$data["ci"];
        $edad=$data["edad"];
        $sexo=$data["sexo"];
        $lugar_nac=$data["lugar_nac"];
        $fecha_nac=$data["fecha_nac"];
        $ocupa=$data["ocupa"];
        $domicilio=$data["domicilio"];
        $telf=$data["telf"];
        $instrucción=$data["instrucción"];
        $eCivil=$data["eCivil"];
        $nacOrig=$data["nacOrig"];
        $idioma=$data["idioma"];
        $foto_paciente=$data["foto_paciente"];

        $estado=$data["estado"];
        //$autor=$data["autor"];
        $fecha_crea=$data["fecha_crea"];
        //$edit=$data["edit"];
        //$fecha_edit=$data["fecha_edit"];
        //$borrar=$data["borrar"];
        //$fecha_del=$data["fecha_del"];


        $stmt = Conexion::conectar()->prepare("INSERT INTO paciente(
            dpto,
            municipio,
            establec_salud,
            num_hc,
            ci_med,

            nombres,
            paterno,
            materno,
            nom_completo,
            ci,
            edad,
            sexo,
            lugar_nac,
            fecha_nac,
            ocupa,
            domicilio,
            telf,
            instrucción,
            eCivil,
            nacOrig,
            idioma,
            foto_paciente,

            estado,
            fecha_crea
            ) VALUES (
                '$dpto',
                '$municipio',
                '$establec_salud',
                '$num_hc',
                '$ci_med',

                '$nombres',
                '$paterno',
                '$materno',
                '$nom_completo',
                '$ci',
                '$edad',
                '$sexo',
                '$lugar_nac'
                '$fecha_nac',
                '$ocupa',
                '$domicilio',
                '$telf',
                '$instrucción',
                '$eCivil',
                '$nacOrig',
                '$idioma',
                '$foto_paciente',                

                '$estado',
                '$fecha_crea'
                
                )");

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
