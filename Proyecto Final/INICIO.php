<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/INICIO.css" TYPE="text/css" MEDIA=screen>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</head>  
<body> 
<div>
  <nav  class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a id="menu" class="navbar-brand" href="principal.php">AUTOINYECCION DIESEL</a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="INICIO.php">INICIO</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="QUIENESSOMOS.php">QUIENES SOMOS</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="SERVICIOS.php" id="navbardrop" data-toggle="dropdown">
          SERVICIOS
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="SERVICIOS.php">Mecánica básica</a>
          <a class="dropdown-item" href="SERVICIOS.php">Mecánica Especializa</a>
          <a class="dropdown-item" href="SERVICIOS.php">Inyección</a>
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="SEMINUEVOS.php">SEMINUEVOS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="NOTICIAS.php">NOTICIAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="CONTACTO.php">CONTACTO</a>
      </li>    
    </ul>
  </nav>
</div>
<div class="separator small center" style="margin-top: 7px;margin-bottom: 38px; background-color:black;"></div>
<div class="container" id="carrusel">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="IMAGENES/porshe.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="IMAGENES/rep.JPG" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="IMAGENES/uno.jpg" alt="Third slide">
      </div>
    </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


    <?php
    ?>
</body>
</html>