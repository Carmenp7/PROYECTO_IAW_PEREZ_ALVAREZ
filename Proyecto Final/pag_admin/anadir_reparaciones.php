<?php session_start();

if (isset($_SESSION["user"]) && $_SESSION["user"]=="admin") { ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/Proyecto%20Final/css/anadir_reparaciones.css" TYPE="text/css" MEDIA=screen>
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
    
    <?php if (!isset($_POST["IdReparacion"])) : ?>
        <form method="post">
            <div class="row">
            <div class="login-form">
            <div class="main-div">
                <div class="form-group">
                    <input type="number" class="form-control" name="IdReparacion" placeholder="IdReparacion" required>
                </div>
                <div class="form-group">
                    <select name='Matricula' class='form-control' placeholder='Matricula'>
                    <?php
                            $query="SELECT Matricula FROM vehiculos";
                            if ($result=$connection->query($query)) {
                                while($obj=$result->fetch_object()) {
                                    echo "<option value='".$obj->Matricula."'>";
                                    echo $obj->Matricula;
                                    echo "</option>";
                                }
                            } else {
                                echo "NO SE HA PODIDO RECUPERAR DATOS";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" name="km" placeholder="km" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="Averia" placeholder="Avería" required>
                </div>
                <div class="form-group">
                    <input type="date" type="date" class="form-control" name="FechaEntrada" placeholder="FechaEntrada" required>
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="FechaSalida" placeholder="FechaSalida" required>
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
          $consulta="INSERT into reparaciones (IdReparacion,Matricula,km,Averia,FechaEntrada,FechaSalida) values
          ('$_POST[IdReparacion]','$_POST[Matricula]','$_POST[km]','$_POST[Averia]','$_POST[FechaEntrada]','$_POST[FechaSalida]')";

          $consulta2="select * from reparaciones where IdReparacion='$_POST[IdReparacion]'";

          //Test if the query was correct
          //SQL Injection Possible
          //Check http://php.net/manual/es/mysqli.prepare.php for more security
          if ($result2 = $connection->query($consulta2)) {
            
              //No rows returned
              if ($result2->num_rows===0) {
                if ($result1 = $connection->query($consulta)) {
                    header("Location: reparaciones_admin.php");
                    
                }
              } else {
                    header("Location: anadir_reparaciones.php");
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

<?php } else {
    session_destroy();
    header("Location: ../login.php");
  }
?>