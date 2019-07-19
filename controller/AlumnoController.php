<?php
require "../model/Alumno.php";
$alumno = new Alumno();

switch ($_REQUEST["operador"]) {

    case 'create_alumno':

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $celular = $_POST['celular'];
        $direccion = $_POST['direccion'];
        $fecha = $_POST['fecha'];

        if ($register = $alumno->create($nombre, $apellido, $dni, $celular, $direccion, $fecha)) {
            $response = 'success';
        }else {
         $response = 'error';
        }
        echo $response;

        break;
}
