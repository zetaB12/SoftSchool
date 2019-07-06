<?php
session_start();
require "../model/Usuario.php";

$usuario = new Usuario();

switch($_REQUEST["operador"]) {
    
    case 'validar_usuario':

        if(isset($_POST["email"], $_POST["password"])){
            if ($user = $usuario -> validarUsuario(ltrim($_POST["email"]), $_POST["password"])) {
                foreach ($user as $key => $value) {
                    $_SESSION["user"][$key] = $value;
                }
                $response = "success";
            }else{
                $response = "notfound";
            }
        }
        echo $response;
        break;

    case 'register_user':

        if (isset($_POST["name"], $_POST["email"], $_POST["password"])){
            if ($usuario -> registerUser($_POST["name"], $_POST["email"], $_POST["password"])){
                $response = "success";
            }else
                $response = "notfound";
        }
        echo $response;

        break;

    case 'cerrar_sesion':

        header("location:../");
        session_destroy();

    break;
}