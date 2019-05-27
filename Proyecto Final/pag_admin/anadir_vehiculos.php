<?php session_start();

if ($_SESSION["tipo"] !=='administra') { 
    session_destroy();
    header("Location: ../login.php");}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Proyecto%20Final/css/anadir_vehiculos.css" TYPE="text/css" MEDIA=screen>
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
    <?php
        $connection = new mysqli("localhost", "root", "2asirtriana", "proyecto");

        //TESTING IF THE CONNECTION WAS RIGHT
        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }
    ?>
    <div>
    
    <?php if (!isset($_POST["Matricula"])) : ?>
        <form method="post">
            <div class="row">
            <div class="login-form">
            <div class="main-div">
                <div class="form-group">
                    <input type="text" class="form-control" name="Matricula" placeholder="Matricula" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="Marca" placeholder="Marca" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="Modelo" placeholder="Modelo" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="Color" placeholder="Color" required>
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="FechaMatriculacion" placeholder="FechaMatriculacion" required>
                </div>
                <div class="form-group">
                    <select name='CodCliente' class='form-control' placeholder='Cliente'>
                    <?php
                            $query="SELECT CodCliente, Nombre, Apellidos FROM clientes";
                            if ($result=$connection->query($query)) {
                                while($obj=$result->fetch_object()) {
                                echo "<option value='".$obj->CodCliente."'>";
                                echo $obj->Apellidos.", ".$obj->Nombre;
                                echo "</option>";
                                }
                            } else {
                                echo "NO SE HA PODIDO RECUPERAR DATOS DE LOS CLIENTES";
                            }
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
            </div>
            </div>
        </form>           
           
          
           <?php else:?>
           <?php

          //MAKING A SELECT QUERY
          //Password coded with md5 at the database. Look for better options
          $consulta="INSERT into vehiculos (Matricula,Marca,Modelo,Color,FechaMatriculacion,CodCliente) values
          ('$_POST[Matricula]','$_POST[Marca]','$_POST[Modelo]','$_POST[Color]','$_POST[FechaMatriculacion]','$_POST[CodCliente]')";

          $consulta2="select * from vehiculos where Matricula='$_POST[Matricula]'";

          //Test if the query was correct
          //SQL Injection Possible
          //Check http://php.net/manual/es/mysqli.prepare.php for more security
          if ($result2 = $connection->query($consulta2)) {
            
              //No rows returned
              if ($result2->num_rows===0) {
                if ($result1 = $connection->query($consulta)) {
                    header("Location: vehiculos_admin.php");
                    
                }
              } else {
                    header("Location: anadir_vehiculos.php");
              }

          } else {
            echo "Wrong Query";
          }
   
    ?>
          <?php endif ?>

    </div>
</body>
<?php include_once 'pie_admin.php'; ?>
</html>
