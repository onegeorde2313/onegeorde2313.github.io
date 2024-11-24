<?php
//requiero la conexion de .php:
include 'conexion.php';

//recibo los valores:
$id=$_POST['id'];
$idcategoria=$_POST['idcategoria'];
$idmarca=$_POST['idmarca'];
$nombre=$_POST['nombre'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];


//actualizar los datos:
$actualizar="UPDATE producto SET idCategoria='$idcategoria',idMarca='$idmarca',nombre='$nombre',cantidad='$cantidad',precio='$precio' WHERE idProducto='$id'";
$resultado=mysqli_query($conexion,$actualizar);
if($resultado){
    echo "<script>
            alert('Se han guardado los cambios correctamente');
            window.location='modificarProducto.php';
        </script>";
}
else{
    echo "<script>
            alert('No se pudo actualizar los datos');
            window.location='modificarProducto.php';
        </script>";
}
?>