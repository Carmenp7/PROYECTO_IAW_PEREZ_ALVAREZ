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

<div class="container" style='height: 210px;'>
  <div class="row">
    <nav class="col-md-10" class="main-navigation">
      <div class="navbar-header animated fadeInUp">
        <a href="/Proyecto Final/pag_admin/principal_admin.php"><img src="/Proyecto%20Final/IMAGENES/logo.png" class="navbar-brand" id="logo" href="#"/></a>
      </div>
    </nav>
  <div class="col-md-2">
    <a href="perfil.php"><img id="usuario" src="/Proyecto%20Final/IMAGENES/usuario3.png"></a>
      
      <?php if (!isset($_POST["cerrar"])) : ?>
        <form id="salir" method="post">
        <a  href="/Proyecto%20Final/login.php"><img id="usuario" src="/Proyecto%20Final/IMAGENES/logout.png"/></a>
        </form>
  </div>
  <div class="row">
    <nav class="col-md-12" class="main-navigation">
      <ul class="nav-list">
      <li class="nav-list-item">
          <a href="clientes_admin.php"  id="menu" class="nav-link">Clientes</a>
        </li>
        <li class="nav-list-item">
          <a href="recambios_admin.php"  id="menu" class="nav-link">Recambios</a>
        </li>
        <li class="nav-list-item">
          <a href="vehiculos_admin.php"  id="menu" class="nav-link">Coches</a>
        </li>
        <li class="nav-list-item">
          <a href="reparaciones_admin.php"  id="menu" class="nav-link">Reparaciones</a>
        </li>
      </ul>
    </nav>
  </div>
  </div>
  <div class="row">
    <hr id="separador" noshade="noshade" size="4" width="100%" />
  </div>
</div>
<?php else: ?>
<?php
    session_destroy();
    header("Location: ../login.php");
?>
<?php endif?></li>
