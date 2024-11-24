<?php
include 'conexion.php';
$categoria="SELECT * FROM categoria";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
         <meta name="autor" content="Cabrera Ramirez Ricardo Antonio">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
        <title>Alta Marca</title>
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
        <center>
            <h2>CONSULTAS</h2>
            <br>
            <table width="689" border="1" align="center" cellpadding="2" cellspacing="1">
                <tr>
                    <td width="139" align="center" valign="middle"><div align="center">idCategoria</div></td> 
                    <td width="142" align="center" valign="middle"><div align="center">nombre:</div></td> 
                   
                </tr>
                <?php
                $resultado=mysqli_query($conexion,$categoria);
                    while($row=mysqli_fetch_assoc($resultado)) {?>
                        <tr align="center">
                            <td><?php echo $row["idCategoria"];?></td>
                            <td><?php echo $row["nombre"];?></td>
                           
                <?php } ?>
            </table>
        </center>
        <h2>Alta de Marcas</h2>
        
            <form id="form1" method="post" action="altasmarcaB.php">
                <table>
                    <tr>
                        <th>IdCategoria</th>
                        <th>Nombre:</th>
                    
                    </tr>
                    <tr>
                        <td><input type="text" name="idcategoria"></td>
                        <td><input type="text" name="nombre"></td>
                     
                    </tr>
              
                    <tr>
                        <td colspan="5">
                            <div class="form-buttons">
                               
                                <button type="submit">Enviar</button>
                                <button type="reset">Limpiar</button>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
    </body>
</html>