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
        $M_dpto=$data["dpto"];
        $M_municipio=$data["municipio"];
        $M_establec_salud=$data["establec_salud"];
        $M_num_hc=$data["num_hc"];
        $M_ci_med=$data["ci_med"];

        $M_nombres=$data["nombres"];
        $M_paterno=$data["paterno"];
        $M_materno=$data["materno"];
        $M_nom_completo=$data["nom_completo"];
        $M_ci=$data["ci"];
        $M_edad=$data["edad"];
        $M_sexo=$data["sexo"];
        $M_lugar_nac=$data["lugar_nac"];
        $M_fecha_nac=$data["fecha_nac"];
        $M_ocupa=$data["ocupa"];
        $M_domicilio=$data["domicilio"];
        $M_telf=$data["telf"];
        $M_instrucción=$data["instrucción"];
        $M_eCivil=$data["eCivil"];
        $M_nacOrig=$data["nacOrig"];
        $M_idioma=$data["idioma"];
        $M_foto_paciente=$data["foto_paciente"];

        $M_estado=$data["estado"];
        //$M_autor=$data["autor"];
        $M_fecha_crea=$data["fecha_crea"];
        //$M_edit=$data["edit"];
        //$M_fecha_edit=$data["fecha_edit"];
        //$M_borrar=$data["borrar"];
        //$M_fecha_del=$data["fecha_del"];


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
                '$M_dpto',
                '$M_municipio',
                '$M_establec_salud',
                '$M_num_hc',
                '$M_ci_med',

                '$M_nombres',
                '$M_paterno',
                '$M_materno',
                '$M_nom_completo',
                '$M_ci',
                '$M_edad',
                '$M_sexo', 
                '$M_lugar_nac',
                '$M_fecha_nac',

                '$M_ocupa',
                '$M_domicilio',
                '$M_telf',
                '$M_instrucción',
                '$M_eCivil',
                '$M_nacOrig',
                '$M_idioma',
                '$M_foto_paciente',

                '$M_estado',
                '$M_fecha_crea'
                
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
