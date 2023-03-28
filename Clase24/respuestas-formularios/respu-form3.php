<?php 

$usuario = $_POST['usuario'];

$contraseña = $_POST['contraseña'];

// Datos de validacion
$user = "lucas";

$password = "1234";


if (($usuario == $user) && ($contraseña == $password)) {
    header('location: ../formularios/form-3.php');
} else {
    echo("Datos incorrectos");
}

?>