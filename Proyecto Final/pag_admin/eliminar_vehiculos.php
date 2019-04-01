<?php ob_start(); ?>

<?php session_start();

if (isset($_SESSION["user"]) && $_SESSION["user"]=="admin") { ?>
 <!DOCTYPE html> 
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Proyecto%20Final/css/eliminar_clientes.css" TYPE="text/css" MEDIA=screen>
    <link rel="stylesheet" href="/Proyecto%20Final/css/menu_admin.css" TYPE="text/css" MEDIA=screen>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    </head>
    <body>

        <?php include_once "menu_admin.php"?>


    <?php if (!isset($_POST["eliminar"])) : ?>
            <form method="post">
            <div class="row">
            <div class="login-form">
            <div class="main-div row">
                <div id="pregunta"class="col-md-12" style="background-color: white; border-radius: 5px; margin-left: 250px; margin-top: 10px;">
                    <center><h4>¿Estás seguro de eliminar este coche?</h4></center>
                    <center><input type="submit" name="eliminar" class="btn btn-primary" value="Eliminar" style="margin-bottom: 5px;"></center>
                </div>
            </div>
            </div>
            </form>
           
          
           <?php else:?>
        <?php 

            $connection = new mysqli("localhost", "root", "2asirtriana", "proyecto");

          //TESTING IF THE CONNECTION WAS RIGHT
          if ($connection->connect_errno) {
              printf("Connection failed: %s\n", $connection->connect_error);
              exit();
          }
          
          $consulta="DELETE from vehiculos where Matricula='$_GET[Matricula]'";
        
                if ($result = $connection->query($consulta)) {
                    header("refresh:0;url=vehiculos_admin.php");
                }
               else {
                    header("refresh:0;url=eliminar_vehiculos.php");
   
              }
          ?> 
          <?php endif ?>

</body>
</html>

<?php } else {
    session_destroy();
    header("Location: ../login.php");
  }


 ?>