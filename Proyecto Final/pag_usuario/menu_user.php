<?php ob_start(); ?>
<link rel="stylesheet" href="/Proyecto%20Final/css/menu_admin.css" TYPE="text/css" MEDIA=screen>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />

<div class="container" style='height: 210px; margin-bottom:20px;'>
  <div class="row" >
    <nav class="col-md-10" class="main-navigation">
      <div class="navbar-header animated fadeInUp">
        <a href="/Proyecto Final/pag_usuario/principal_user.php"><img src="/Proyecto%20Final/IMAGENES/logo.png" class="navbar-brand" id="logo" href="#"/></a>
      </div>
    </nav>
    <div class="col-md-2" style='padding:0px; width:200px;'>
      <a href="/Proyecto Final/pag_usuario/perfil.php"><img id="usuario" src="/Proyecto%20Final/IMAGENES/usuario3.png"></a>
      <a href="/Proyecto Final/pag_usuario/contrasena.php"><img id="usuario" src="/Proyecto%20Final/IMAGENES/contrasena.png"></a>
      
      <?php if (!isset($_POST["cerrar"])) : ?>
        <form id="salir" method="post" style="margin-right:0px;">
          <a  href="/Proyecto%20Final/login.php"><img id="usuario" src="/Proyecto%20Final/IMAGENES/logout.png"/></a>
        </form>
    </div>
  </div>
  <div class="row" style='padding-top: 70px;'>
    <nav class="col-md-12" class="main-navigation">
      <ul class="nav-list" style='padding-right: 70px;'>
        <li class="nav-list-item">
          <a href="/Proyecto Final/pag_usuario/sobrenosotros.php" class="nav-link">Sobre Nosotros</a>
        </li>
        <li class="nav-list-item">
          <a href="/Proyecto Final/pag_usuario/servicios.php" class="nav-link">Servicios</a>
        </li>
        <li class="nav-list-item">
          <a href="/Proyecto Final/pag_usuario/noticias.php" class="nav-link">Noticias</a>
        </li>
        <li class="nav-list-item">
          <a href="/Proyecto Final/pag_usuario/contacta.php" class="nav-link">Contacta</a>
        </li>
        <li class="nav-list-item">
          <a href="/Proyecto Final/pag_usuario/vehiculos_user.php" id="vehiculos" class="nav-link">MIS VEHICULOS</a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="row">
    <hr style='margin-top: 95px;' noshade="noshade" size="4" width="100%" />
  </div>
</div>
<?php else: ?>
<?php
    session_destroy();
    header("Location: ../login.php");
?>
<?php endif?></li>
