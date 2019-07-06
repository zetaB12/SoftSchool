<?php

class Conexion{

    static function ConectarBD(){
        try {
            require '_Global.php';
            $cn = new PDO(DSN, USER, PASSWORD);
            return $cn;
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }
}