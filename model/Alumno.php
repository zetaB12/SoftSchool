<?php
require '../config/Conexion.php';

class Alumno{
    public $cx;

    function __construct(){
        $this -> cx = Conexion::ConectarBD() ;
    }

    function getStudentAll(){
        $query = "SELECT * FROM student";
        $result = $this->cx->prepare($query);
        $true = $result->execute();
        if ($true) {
            while ($fills = $result->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $fills;
            }
        }
        return $data;
    }

    function createStudent($nombre, $apellido, $dni, $celular, $direccion, $fecha){
        $query = "INSERT INTO student(nombre, apellido, dni, celular, direccion, fechaNacimiento) VALUES(?,?,?,?,?,?)";
        $result = $this->cx->prepare($query);
        $result->bindParam(1, $nombre);
        $result->bindParam(2, $apellido);
        $result->bindParam(3, $dni);
        $result->bindParam(4, $celular);
        $result->bindParam(5, $direccion);
        $result->bindParam(6, $fecha);

        return ($result->execute()) ? true : false ;
    }
}