<?php

Class Conexion {
    public static function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=heladeria",
                        "root",
                        "",
                        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //Para que muestre el error por consola.
                            PDO::MYSQL_ATTR_INIT_COMMAND => "Set NAMES utf8")); //Para que muestre la base de datos en un diccionario español
        return $link;
    }

}
?>