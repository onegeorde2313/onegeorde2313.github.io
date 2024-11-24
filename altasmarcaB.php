<?php
//requiero la conexion
include 'conexion.php';
//comenzar con la sesion
session_start();

//recibo los valores
$idcategoria=$_POST["idcategoria"];
$nombre=$_POST["nombre"];

//consulta para insertar
$insertar="INSERT INTO marca(idCategoria,nombre) VALUES('$idcategoria','$nombre')";
$verificar_nombre=mysqli_query($conexion, "SELECT * FROM marca WHERE nombre='$nombre'");
//Indica la cantidaad de nombres iguales
if(mysqli_num_rows($verificar_nombre)>0){
    echo("El nombre de la marca  ya está registrado");
    //Para que salga:
    exit;
}

//ejecutar la consulta
$resultado=mysqli_query($conexion,$insertar);
if(!$resultado){
    echo("Error al registrarse");
}
else{
    echo "<script>
    alert('Se han guardado los cambios correctamente');
    window.location='altasmarca.php';
</script>";
}

//cerrar la conexion
mysqli_close($conexion);