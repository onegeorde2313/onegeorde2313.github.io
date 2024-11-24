<?php
//requiero la conexion de .php:
include 'conexion.php';

//recibo los valores:
$id=$_POST['id'];
$idcategoria=$_POST['idcategoria'];
$nombre=$_POST['nombre'];


//actualizar los datos:
$actualizar="UPDATE marca SET idCategoria='$idcategoria',nombre='$nombre' WHERE idMarca='$id'";
$resultado=mysqli_query($conexion,$actualizar);
if($resultado){
    echo "<script>
            alert('Se han guardado los cambios correctamente');
            window.location='modificarMarca.php';
        </script>";
}
else{
    echo "<script>
            alert('No se pudo actualizar los datos');
            window.location='modificarMarca.php';
        </script>";
}
?>