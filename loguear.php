<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGUEAR</title>
</head>
<body>
    <?php
    //Requiero la conexion php
    require 'conexion.php';
    //Comenzar con la sesion
    session_start();

    //Recibo los valores
    $usuario=$_POST["usuario"];
    $clave=$_POST["clave"];

    //Realizo una consulta
    //Count: contar filas
    $query="SELECT COUNT(*) as contar from usuario where nombre='$usuario' and password='$clave'";
    //Ejecuto consulta 
    $consulta=mysqli_query($conexion,$query);
    //Guardo los datos en un arreglo
    $array=mysqli_fetch_array($consulta);

    if($array['contar']>0){
        $_SESSION['username']=$usuario;
        echo("DATOS CORRECTOS");
        echo "<script>
        
        window.location='ajustes.html';
    </script>";
    }else{
        echo("DATOS INCORRECTOS");
        echo("DATOS CORRECTOS");
        echo "<script>
        
        window.location='indes.html';
    </script>";
    
    }
    ?>
</body>
</html>