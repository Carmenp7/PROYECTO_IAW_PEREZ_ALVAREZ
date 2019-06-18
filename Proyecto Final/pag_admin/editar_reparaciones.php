<?php session_start();

if ($_SESSION["tipo"] !=='administra') { 
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
    <link rel="stylesheet" href="/Proyecto%20Final/css/editar_reparaciones.css" TYPE="text/css" MEDIA=screen>
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
        $connection = new mysqli("localhost", "root", "2asirtriana", "proyecto");

        //TESTING IF THE CONNECTION WAS RIGHT
        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        } 
    ?>
    
    <?php include_once "menu_admin.php"?>
    
    <div class="row">
        <div class="col-md-12">
        <?php if (!isset($_POST["IdReparacion"])) : ?>
            <form method="post">
                <div class="row">
                <div class="login-form">
                <div class="main-div">
                    <div class="form-group">
                        <input type="text" class="form-control" name="IdReparacion" placeholder="IdReparacion" readonly="IdReparacion" value="<?php echo $_GET['IdReparacion']; ?>" required>
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
                        <input type="text" class="form-control" name="km" placeholder="km" value="<?php echo $_GET['km']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="Averia" placeholder="Averia" value="<?php echo $_GET['Averia']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" name="FechaEntrada" placeholder="Fecha de Entrada" value="<?php echo $_GET['FechaEntrada']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" name="FechaSalida" placeholder="Fecha de Salida" value="<?php echo $_GET['FechaSalida']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>
                </div>
                </div>
            </form>

            <?php else:?>
            <?php
            //MAKING A SELECT QUERY
            //Password coded with md5 at the database. Look for better options
            $consulta="UPDATE reparaciones set IdReparacion='$_POST[IdReparacion]', Matricula='$_POST[Matricula]', km='$_POST[km]', Averia='$_POST[Averia]' where IdReparacion='$_GET[IdReparacion]'";

            var_dump($consulta);
            //Test if the query was correct
            //SQL Injection Possible
            //Check http://php.net/manual/es/mysqli.prepare.php for more security
            
                    if ($result = $connection->query($consulta)) {
                        header("Location: reparaciones_admin.php");
                        
                    }
                else {
                        echo "<h1>Reparaciones no actulizado</h1>";
                        header("refresh:3;url=editar_reparaciones.php");
                } ?>
            <?php endif ?>

        </div>
    </div>

</body>
<?php include_once 'pie_admin.php'; ?>
</html>