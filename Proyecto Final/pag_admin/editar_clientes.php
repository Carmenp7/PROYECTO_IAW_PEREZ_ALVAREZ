
<?php ob_start(); ?>

<!DOCTYPE html> 
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="editar_clientes.css" TYPE="text/css" MEDIA=screen>
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
    <?php

  //Open the session
  session_start();

  if (isset($_SESSION["user"]) && $_SESSION["user"]=="admin") { ?>

        <?php include_once "menu_admin.php"?>
 
    
    <div class="row">
        <div class="col-md-12">

        
            <?php if (!isset($_POST["user"])) : ?>

                <form method="post">
                    <div class="row">
                        <div class="login-form">
                            <div class="main-div">
                            <div class="form-group">
                            <input type="text" class="form-control" name="Nombre" placeholder="Nombre" value="<?php echo $_GET['Nombre']; ?>">
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" name="Apellidos" placeholder="Apellidos" value="<?php echo $_GET['Apellidos']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="Correo" placeholder="Correo" value="<?php echo $_GET['Correo']; ?>">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Contraseña" value="<?php echo $_GET['password']; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary">Editar</button>
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
            $consulta="UPDATE clientes set Nombre='$_POST[Nombre]', Apellidos='$_POST[Apellidos]', Correo='$_POST[Correo]', password=md5('$_POST[password]')' 
            where CodCliente=$_GET[CodCliente]";


            //Test if the query was correct
            //SQL Injection Possible
            //Check http://php.net/manual/es/mysqli.prepare.php for more security
            
                    if ($result = $connection->query($consulta)) {
                        header("Location: clientes_admin.php");
                        
                    }
                else {
                        echo "<h1>Usuario no actulizado</h1>";
                    

                } ?>
            <?php endif ?>

        </div>
    </div>

<?php } else {
    session_destroy();
    header("Location: ../login.php");
  }


 ?>

</body>
</html>