<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Tienda Virtual</title>
</head>
<body>
    <header>
        <h1>Proyecto EVN502</h1>
    </header>
    
    <nav id="menuPrincipal">
        <a class="opcionMenu" href="index.php">Perfil</a>
        <a class="opcionMenu" href="registroProductos.php">Nuevo Producto</a>
        <a class="opcionMenu" href="galeria.php">Productos</a>
        <a class="opcionMenu" href="iniciarSesion">Cerrar Sesión</a>
    </nav>

    <section>
        <h2>Productos</h2>
        <table>
            <tr>
                <th>Cancelar</th>
                <th>Foto</th>
                <th>Modelo</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Modificacion</th>
                
            </tr>
        
        <?php
            while($producto = $datos->fetch_assoc()){

                echo '<tr>
                    <td><a href="?peticion=cancelarProducto&modelo='.$producto['modelo'].'"/>
                    <img class="icono" src="vista/imagenes/cancelar.png">
                    </a></td>
                    <td><img src="'.$producto['foto'].'" /></td>
                    <td><span>'.$producto['modelo'].'</span></td>
                    <td><span>'.$producto['nombre'].'</span></td>
                    <td><span>'.$producto['descripcion'].'</span></td>
                    <td><span>'.$producto['precio'].'</span></td>
                    <td><span>'.$producto['stock'].'</span></td>
                    <td><a href="?peticion=modificarProducto&modelo='.$producto['modelo'].'"/>
                    <img class="icono" src="vista/imagenes/modificar.png">
                    </a></td>
                </tr>';
            }
        ?>
        </table>

    </section>
</body>
</html>