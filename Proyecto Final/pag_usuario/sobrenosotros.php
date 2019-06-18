<?php session_start();

if (!isset($_SESSION['tipo']) || ($_SESSION['tipo']!='usuario')) { 
    session_destroy();
    header("Location: ../login.php");}
?>

<!DOCTYPE html>
<html lang="en">
<title>CUSTOMS GARAGE</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/sobrenosotros.css" TYPE="text/css" MEDIA=screen>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
</head>  

<body> 
    
<?php include_once 'menu_user.php'; ?>

    
<div class="row" id="info">
    <div class="col-md-12">
        <p class="seccion">SOBRE NOSOTROS</p> 
        <p class="texto">En Customs Garage proporcionamos a nuestros clientes la solución más adecuada para su vehículo.</p>  
        <p class="texto">Nuestra actividad principal es la personalización y reparación de vehículos de alta gama.</p>
        <p class="texto">Todos nuestros montajes pasan un riguroso control de calidad ya que trabajamos con las primeras marcas
        del sector y siempre cumpliendo los plazos establecidos entre empresa y cliente, lo cual hace que Customs Garage sea una empresa líder del sector.</p>
        <img id="lambo"src="/Proyecto Final/IMAGENES/lambo.png"/>
    </div>
</div>

<?php include_once 'pie_user.php'; ?>

</body>
</html>
