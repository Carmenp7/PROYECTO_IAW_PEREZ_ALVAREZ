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
    <link rel="stylesheet" href="/Proyecto%20Final/css/perfil_user.css" TYPE="text/css" MEDIA=screen>
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

        <div class="row" style='width:730px;'>      
            <div id="tabla" class="col-md-12">

                <?php
                $connection = new mysqli("localhost", "root", "2asirtriana", "proyecto");
                $connection->set_charset("utf8");

                if ($connection->connect_errno) {
                    printf("Connection failed: %s\n", $connection->connect_error);
                    exit();
                }
                if ($result = $connection->query("select * from clientes where Nombre='$_SESSION[user]'")) {


                $obj = $result->fetch_object();
                        echo "<table class='table custab'";
                        echo "<tr><td><b>Codigo de Cliente: </b></td><td>$obj->CodCliente</td></tr>";
                        echo "<tr><td><b>Nombre: </b></td><td>$obj->Nombre</td></tr>";
                        echo "<tr><td><b>Apellidos: </b></td><td>$obj->Apellidos</td></tr>";
                        echo "<tr><td><b>Correo: </b></td><td>$obj->Correo</td></tr>";
                        echo "<tr><td><b>Fecha de alta: </b></td><td>$obj->Fecha_Alta</td></tr>";
                        echo "</table>";

                    $result->close();
                    unset($obj);
                    unset($connection);

                }

                ?>
            </div>

            <?php if (!isset($_POST["user"])) : ?>
            <FORM id="formu" METHOD="post">
            <div id='tabla2'>
                <p>ACTUALIZAR CONTRASEÑA</p>
                <input style='padding-left:5px;' type='password' name='password' placeholder='Nueva Contraseña'>
                <button type='submit' name='Actualizar'>Actualizar</button>
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
            $consulta="UPDATE clientes set password = md5('$_POST[password]') where Nombre = $_SESSION[user]";


            //Test if the query was correct
            //SQL Injection Possible
            //Check http://php.net/manual/es/mysqli.prepare.php for more security
            
                    if ($result2 = $connection2->query($consulta)) {
                        header("Location: /Proyecto Final/pag_usuario/perfil.php");
                        
                    }
                else {
                        echo "<h1>Usuario no actulizado</h1>";
                        header("Location: /Proyecto Final/pag_usuario/perfil.php");
                } ?>
            <?php endif ?>


        </div>
    </body>
    <?php include_once("pie_user.php"); ?>
</html>
