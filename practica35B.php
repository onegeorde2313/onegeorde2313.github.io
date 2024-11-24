<?php
// Comienza el script PHP primero
$usuario = $_GET['usuario'];
$password = $_GET['contrasenna'];
$usuarioAcceso = "santi";
$contrasenna = "123";

if ($usuario == $usuarioAcceso && $password == $contrasenna) {
    header("Location: practica35C.html");
    exit(); // Detiene la ejecución
} else {
    header("Location: practica35A.html");
    exit(); // Detiene la ejecución
}
?>
