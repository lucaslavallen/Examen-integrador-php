<?php

$usuario = $_POST['usuario'];

$contraseña = $_POST['contraseña'];

// Datos de validacion
$user = "admin";

$password = "1234";



if (($usuario == $user) && ($contraseña == $password)) {
    header('location: ../formularios/bienvenidos.php');
} else {
    echo("Datos invalidos");
}

?>