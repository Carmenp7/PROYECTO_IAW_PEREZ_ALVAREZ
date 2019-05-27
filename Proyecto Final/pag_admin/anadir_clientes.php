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
    <link rel="stylesheet" href="/Proyecto%20Final/css/anadir_clientes.css" TYPE="text/css" MEDIA=screen>
    <link rel="stylesheet" href="/Proyecto%20Final/css/menu_admin.css" TYPE="text/css" MEDIA=screen>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<?php include_once 'menu_admin.php'?>
        
    <?php if (!isset($_POST["Nombre"])):?>
        <form method="post">
            <div class="row">
            <div class="login-form">
            <div class="main-div">
                <div class="form-group">
                    <input type="text" class="form-control" name="Nombre" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="Apellidos" placeholder="Apellidos" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="Correo" placeholder="Correo" required>
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
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

          //MAKING A SELECT QUERY
          //Password coded with md5 at the database. Look for better options
          $consulta="select * from clientes where Nombre='$_POST[Nombre]'";

          $consulta1="INSERT into clientes 
          (Nombre,Apellidos,Correo,password,Fecha_Alta) values
          ('$_POST[Nombre]','$_POST[Apellidos]','$_POST[Correo]',md5('$_POST[password]'),curdate())";

          
          if ($result = $connection->query($consulta)) {
              //No rows returned
              if ($result->num_rows===0) {
                if ($result1 = $connection->query($consulta1)) {
                    header("Location: clientes_admin.php");
                }
              } else {
                    echo "<h1>Cliente ya registrado; ingrese otro cliente</h1>";
                    header("refresh:8;url=anadir_clientes.php");
                
              }
          } else {
            echo "Wrong Query";
          }

    ?>
    <?php endif ?>

</body>
<?php include_once 'pie_admin.php'; ?>
</html>
