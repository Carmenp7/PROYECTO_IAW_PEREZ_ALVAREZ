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

        if ($result = $connection->query("select IdReparacion, r.Matricula, km, FechaEntrada, Averia, FechaSalida from 
        clientes c join vehiculos v on c.CodCliente = v.CodCliente join reparaciones r on v.Matricula = r.Matricula where 
        r.Matricula ='$_GET[Matricula]';")) {
        
        echo "<table class='table table-hover'>"
    ?>
            <thead>
                <tr>
                    <th>Id Reparacion</th>
                    <th>Matricula</th>
                    <th>Km</th>
                    <th>Fecha de Entrada</th>
                    <th>Fecha de Salida</th>
                    <th>Avería</th>
                </tr>
            </thead>
    <?php
        while($obj = $result->fetch_object()) {
            echo "<tr>";
                echo "<td>$obj->IdReparacion</td>";
                echo "<td>$obj->Matricula</td>";
                echo "<td>$obj->km</td>";
                echo "<td>$obj->FechaEntrada</td>";
                echo "<td>$obj->FechaSalida</td>";
                echo "<td>$obj->Averia</td>";
            echo "</tr>";
        }
        } else {
        echo "<td>"."No se han encontrado datos"."</td>";
        };
    ?>
        </table>
    </div>
</div>

<?php include_once 'pie_user.php'; ?>

</body>
</html>