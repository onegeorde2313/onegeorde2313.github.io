<?php
include 'conexion.php';
$categoria="SELECT * FROM categoria";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="autor" content="Cabrera Ramirez Ricardo Antonio">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="stilo5.css">
           <!--Iconos-->
           <style>
    img.coco{
        height: 200px;
        width: 200px;
    }
    header img.logo { 
        height: 200px; 
        width: 200px; 
        vertical-align: middle; }
     header h1 { display: inline; 
        margin-left: 10px; 
        vertical-align: middle; }

    </style>
</head>
<body  onload="restoreScrollPosition()">
    <header>
        <img class="logo" src="imagenes/logopr.png" alt="Logo de Dulcería Sweet Treats"> 
        <h1>La Casa Del Sabor</h1>
        <nav>
            <ul>
                <li><a href="#" onclick="mostrarSeccion('consultar')">consultar</a>
                    <ul class="dropdown">
                        <li><a href="consultaproducto.php" onclick="mostrarSeccion('consultar productos')">consultar productos</a></li>
                        <li><a href="consultamarca.php" onclick="mostrarSeccion('consultar marcas')">consultar marcas</a></li>
                        <li><a href="consultasCategoria.php" onclick="mostrarSeccion('consultar categoria')">consultar categoria</a></li>
                    </ul>
                </li>
                <li><a href="#" onclick="mostrarSeccion('altas')">altas</a>
                    <ul class="dropdown">
                        <li><a href="altasproductos.php" onclick="mostrarSeccion('altas productos')">altas productos</a></li>
                        <li><a href="altasmarca.php" onclick="mostrarSeccion('altas marcas')">altas marcas</a></li>
                        <li><a href="altascategoria.html" onclick="mostrarSeccion('altas categoria')">altas categoria</a></li>
                    </ul>
                </li>
                <li><a href="#" onclick="mostrarSeccion('modificar y eliminar')">modificar y eliminar</a>
                    <ul class="dropdown">
                        <li><a href="modificarProducto.php" onclick="mostrarSeccion('productos')">productos</a></li>
                        <li><a href="modificarMarca.php" onclick="mostrarSeccion('marcas')">marcas</a></li>
                        <li><a href="modificarCategoria.php" onclick="mostrarSeccion('categoria')">categoria</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
            <br>
            <br>
           
            <br>
            
            <center>
                <h2>Modificar</h2>
                <br>
                <table width="690" border="1" align="center" cellpadding="2" cellspacing="1">
                    <tr>
                        <td width="139" align="center" valign="middle"><div align="center">Nombre: </div></td>
                        
                    </tr>
                    <?php
                    $resultado=mysqli_query($conexion,$categoria);
                        while ($row=mysqli_fetch_assoc($resultado)) { ?>
                            <tr align="center">
                                 <td><?php echo $row["nombre"];?></td>
                                <td>
                                    <a href="actualizarCategoria.php?id=<?php echo $row["idCategoria"]; ?>" class="table_item_link">Editar</a>
                                    <a href="eliminarcategoria.php?id=<?php echo $row["idCategoria"]; ?>" class="table_item_link_eliminar">Eliminar</a>
                                </td>
                            </tr>
                    <?php }mysqli_free_result($resultado); ?>

                </table>
            </center>
            <script src="confirmacion.js"></script>
        
    </body>
</html>