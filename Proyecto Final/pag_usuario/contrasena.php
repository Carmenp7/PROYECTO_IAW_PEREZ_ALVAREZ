<?php session_start();

if (!isset($_SESSION['tipo']) || ($_SESSION['tipo']!='usuario')) { 
    session_destroy();
    header("Location: ../login.php");}
?>

<!DOCTYPE html>
<html>
<title>CUSTOMS GARAGE</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Proyecto%20Final/css/contrasena.css" TYPE="text/css" MEDIA=screen>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    </head>
    <body>

        <?php include_once("menu_user.php"); ?>

            <?php if (!isset($_POST["password"])) : ?>
            <FORM id="formu" METHOD="POST">
            <div class="row" id="contrasena">
                <p class="seccion">ACTUALIZAR NOMBRE DE USUARIO Y CONTRASEÑA</p>
                <input class="botones" type='text' name='Nombre' placeholder='Nuevo Nombre'>
                <input class="botones"type='password' name='password' placeholder='Nueva Contraseña'>
                <button class="botones" href="/Proyecto Final/pag_usuario/contrasena.php" type='submit' name='Actualizar'>Actualizar</button>
            </div>
            <FORM>

            <?php else:?>
            <?php
            $connection2 = new mysqli("localhost", "root", "2asirtriana", "proyecto");

            //TESTING IF THE CONNECTION WAS RIGHT
            if ($connection2->connect_errno) {
                printf("Connection failed: %s\n", $connection2->connect_error);
                exit();
            }

            //MAKING A SELECT QUERY
            //Password coded with md5 at the database. Look for better options
            $consulta="UPDATE clientes set Nombre='$_POST[Nombre]', password = md5('$_POST[password]') where Nombre='$_SESSION[user]'";


            //Test if the query was correct
            //SQL Injection Possible
            //Check http://php.net/manual/es/mysqli.prepare.php for more security
            
            if ($result2 = $connection2->query($consulta)) {
                header("Location: /Proyecto Final/pag_usuario/servicios.php");  
            }
            else {
                echo "<h1>Usuario no actulizado</h1>";
            
                header("Location: /Proyecto Final/pag_usuario/noticias.php");  
            } ?>
            <?php endif ?>


    </body>
    <?php include_once("pie_user.php"); ?>
</html>

