<?php

require_once "conexion.php";

Class ModeloTemplade{
    static public function mdlEstiloTemplade($tabla){
        $stmt = Conexion::conectar()->prepare(query: "SELECT * FROM $tabla ");
        $stmt->execute();

        return $stmt ->fetch();
    }
}