<?php
//requiero la conexión de .php
include 'conexion.php';
//recibo los valores
$id=$_GET['id'];
$eliminar= "DELETE FROM marca WHERE idMarca='$id'";

$resultado=mysqli_query($conexion,$eliminar);
if($resultado){
    header("location: modificarMarca.php");

}else{
    echo "<script>
    alert('No se pudo eliminar el archivo');
    window.history.go(-1);
    </script>";
}