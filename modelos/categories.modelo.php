<?php
require_once "conexion.php";

Class ModeloCategorias{
    //Mostrar categorias
    public static function mdlMostrarCategorias($tabla,$item,$valor){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt ->bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();         
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt ->execute();
            return $stmt -> fetchAll();
        }


    }
    //Mostrar subcategorias
    public static function mdlMostrarSubCategorias($tabla, $item, $valor){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt ->bindParam(":".$item, $valor, PDO::PARAM_STR);
        $stmt -> execute();
        return $stmt -> fetchAll();

    }

}