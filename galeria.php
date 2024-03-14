<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Angkor&display=swap" rel="stylesheet">
    <title>Tienda Virtual</title>
</head>
<body>
<header>
    <h1 class="angkor-regular">Tienda Virtual</h1> <!--style="background-color: #9546e3;"-->
</header>
    <!--<nav id="menuPrincipal">
        <a class="opcionMenu" href="?peticion=home">Home</a>
        <a class="opcionMenu" href="?peticion=somos">Quiénes Somos</a>
        <a class="opcionMenu" href="?peticion=galeria">Galería</a>
        <a class="opcionMenu" href="?peticion=iniciarSesion">Iniciar Sesión</a>     
    </nav>-->
    <nav id="nav" class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php">TiendaV</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="somos.php">Quiénes Somos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="galeria.php">Galería</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Iniciar Sesión</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button type="button" class="btn btn-outline-dark">Buscar</button>
      </form>
    </div>
  </div>
</nav>
    
    <section>
        <h3>Galería</h3>
        <?php
            while($producto = $datos->fetch_assoc()){

                echo '<tr>
                <div id="productos" style="width: 18rem; background-color: #4075d6; border-radius: 15%;">
                <img src="' .$producto['foto'].'" id="productos"  style="height: 250px;" />
                <div class="card-body">
                    <h5 class="card-title">'.$producto['nombre'].'</h5>
                    <p class="card-text">'.$producto['descripcion'].'</p>
                    <td><span>Modelo: '.$producto['modelo'].'</span></td>
                    <br>
                    <td><span>Precio: '.$producto['precio'].'</span></td>
                    <br>
                    <td><span>Stock: '.$producto['stock'].'</span></td>
                </div>
                </div>  
                </tr>';
            }
        ?>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
