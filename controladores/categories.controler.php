<?php

include_once __DIR__ . '/../modelos/categories.modelo.php';

class ControladorCategorias{
    public static function ctrMostrarCategorias($item,$valor){
        $tabla = "categorias";
        $respuesta = ModeloCategorias::mdlMostrarCategorias($tabla,$item,$valor);
        return $respuesta;
    }
    public static function ctrMostrarSubCategorias($item,$valor){
        $tabla = "subcategorias";
        $respuesta = ModeloCategorias::mdlMostrarSubCategorias($tabla,$item,$valor);
        return $respuesta;
    }


}