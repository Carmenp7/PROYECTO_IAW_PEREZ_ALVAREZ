<?php session_start();

if (!isset($_SESSION['tipo']) || ($_SESSION['tipo']!='usuario')) { 
    session_destroy();
    header("Location: ../login.php");}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/vehiculos_user.css" TYPE="text/css" MEDIA=screen>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
</head>  

<body> 

<?php include_once 'menu_user.php'; ?>

<div class="row" style='width: 1320px; margin-left:0px; margin-right:0px;'>      
    <div id="tabla" class="col-md-12">

    <?php
        $connection = new mysqli("localhost", "root", "2asirtriana", "proyecto");
        $connection->set_charset("utf8");

        if ($connection->connect_errno) {
            printf("Connection failed: %s\n", $connection->connect_error);
            exit();
        }
        if ($result = $connection->query("select Matricula, Marca, Modelo, Color, FechaMatriculacion from clientes c join vehiculos 
        v on c.CodCliente = v.CodCliente where c.Nombre='$_SESSION[user]'")) {
        
        echo "<table class='table table-hover'>"
    ?>
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Color</th>
                    <th>Fecha de Matriculación</th>
                    <th></th>
                </tr>
            </thead>
    <?php
        $obj = $result->fetch_object();
            echo "<tr>";
                echo "<td>$obj->Matricula</td>";
                echo "<td>$obj->Marca</td>";
                echo "<td>$obj->Modelo</td>";
                echo "<td>$obj->Color</td>";
                echo "<td>$obj->FechaMatriculacion</td>";
                echo "<td>
                        <a href='reparaciones_user.php?Matricula=$obj->Matricula&Marca=$obj->Marca&Modelo=$obj->Modelo&Color=$obj->Color&FechaMatriculacion=$obj->FechaMatriculacion'><img id='imagen'src='/Proyecto%20Final/IMAGENES/coche.png'/></a> 
                    </td>";
            echo "</tr>";
        }
    ?>
        </table>;
    </div>
</div>

<?php include_once 'pie_user.php'; ?>

</body>
</html>