<?php

require '../config/Conexion.php';

class Usuario{
    public $cx;

    function __construct(){
      
        $this -> cx = Conexion::ConectarBD();
    }

    function validarUsuario($email, $password){
        $query = "SELECT * FROM usuario WHERE UsuarioUsu = ?";
        $result = $this->cx->prepare($query);
        $result -> bindParam(1, $email);
        $result -> execute();
        $fila = $result->fetch();
        
        if($password == $fila['ClaveUsu']){
            return $fila;
        }
        return false;
    }

    function registerUser($fullName, $email, $password){
        $query = "INSERT INTO nivel(DescripcionNiv) VALUES(?)";
        $result = $this -> cx -> prepare($query);
        $result -> bindParam(1,$fullName);

        if($result->execute())
        {
            return true;
        }
        return false;
    }
}