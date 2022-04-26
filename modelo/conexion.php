<?php
class Conexion{
    static public function conectar(){

        $host="localhost";
        $db="sistema_pos";
        $userBD="root";
        $passBD="";

        $link=new PDO("mysql:host=".$host.";"."dbname=".$db,$userBD,$passBD);
        $link->exec("set names utf8");
        return $link;
    }
}