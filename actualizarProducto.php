<?php
    include'conexion.php';
    $id=$_GET["id"];
    $producto="SELECT * FROM producto WHERE idProducto='$id'";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
       <meta name="autor" content="Cabrera Ramirez Ricardo Antonio">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Documento</title>
        <link rel="stylesheet" href="stilo5.css">
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

            <h2>Actualizar Categoria</h2>
            <form id="form1" method="post" action="procesoactualizarproducto.php">
                <table>
                    <tr>
                        <th>idCategoria:</th>
                        <th>idMarca:</th>
                        <th>Nombre:</th>
                        <th>Cantidad:</th>
                        <th>Precio:</th>
                      
                    </tr>
                    <?php
                        $resultado=mysqli_query($conexion,$producto);
                        while ($row=mysqli_fetch_assoc($resultado)){?>
                        <tr>
                            <input type="hidden" value="<?php echo $row['idProducto'];?>" name="id">
                            <td><input type="text" value="<?php echo $row['idCategoria'];?>" name="idcategoria"></td>
                            <td><input type="text" value="<?php echo $row['idMarca'];?>" name="idmarca"></td>
                            <td><input type="text" value="<?php echo $row['nombre'];?>" name="nombre"></td>
                            <td><input type="text" value="<?php echo $row['cantidad'];?>" name="cantidad"></td>
                            <td><input type="text" value="<?php echo $row['precio'];?>" name="precio"></td>
                            
                        </tr> 
                    <?php } mysqli_free_result($resultado);?>
                    <tr>
                        <td colspan="6">
                            <div class="form-buttons">
                                <button type="submit">Actualizar</button>
                              
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
       
    </body>
</html>