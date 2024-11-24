<?php
$hostname = "localhost";
$username = "root";
$password = "alumno123";
$bd = "dulceria";

$conexion = @mysqli_connect($hostname, $username, $password, $bd);

if (!$conexion) {
    die("No se ha conectado correctamente: " . mysqli_connect_error());
}
// No envíes ningún mensaje de conexión exitosa
?>
