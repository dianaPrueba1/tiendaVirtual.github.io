<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <script src="vista/js/sha256.js"></script>
    <script src="vista/js/funciones.js"></script>
    <title>Tienda Virtual</title>
</head>
<body>
<header>
        <h1>Proyecto xyz</h1>
    </header>
    
    <nav id="menuPrincipal">
        <a class="opcionMenu" href="perfilAdmin.php">Perfil</a>
        <a class="opcionMenu" href="registroProductos.php">Registro Productos</a>
        <a class="opcionMenu" href="galeria.php">Catalogo Productos</a>
        <a class="opcionMenu" href="cerrarSesion">Cerrar Sesión</a>
    </nav>

    <section>
        <h2>Productos</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="modelo" value=" <?php echo $datos['modelo']; ?>"><!--disabled si no quiero que lo modifique-->
            <input type="text" name="nombre" value=" <?php echo $datos['nombre']; ?>">
            <textarea name="descripcion" cols="30" rows="10" value=" <?php echo $datos['descripcion']; ?>" ></textarea>
            <input type="number" name="precio" step="0.01" value=" <?php echo $datos['precio']; ?>">
            <input type="number" name="stock" value=" <?php echo $datos['stock']; ?>">
            <label>Selecciona una Foto</label>
            <input type="file" name="foto">
            <input type="hidden" name="peticion" value="cambiarProducto">

            <input type="submit"  value="Guardar">
        </form>

        <p>
            <?php
                if(isset($nombre)){
                    if($datos)
                    echo 'El registro se realizo con éxito';
                else
                    echo 'No pudimos realizar el registro';
                }
            ?>
        </p>
    </section>   
</body>
</html>