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
    <link rel="stylesheet" href="/Proyecto%20Final/css/clientes_admin.css" TYPE="text/css" MEDIA=screen>
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


<div class="row" style='width: 1320px;'>      
  <div id="tabla" class="col-md-12">
    
  <?php
//CREATING THE CONNECTION
$connection = new mysqli("localhost", "root", "2asirtriana", "proyecto");
$connection->set_charset("utf8");

//TESTING IF THE CONNECTION WAS RIGHT
if ($connection->connect_errno) {
    printf("Connection failed: %s\n", $connection->connect_error);
    exit();
}

//MAKING A SELECT QUERY
/* Consultas de selección que devuelven un conjunto de resultados */
if ($result = $connection->query("select * from clientes;")) {

   echo "<table method='post' class='table table-hover'>";
    ?>
    <thead>
      <tr>
        <th>CodCliente</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Correo</th>
        <th>password</th>
        <th>Fecha Alta</th>
        <th>
          <a href='anadir_clientes.php'><img class="anadir" src='/Proyecto%20Final/IMAGENES/anadir_cliente.ico'/></a>     
        </th>     
      </tr>
    </thead>

<?php

    //FETCHING OBJECTS FROM THE RESULT SET
    //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
    while($obj = $result->fetch_object()) {
        //PRINTING EACH ROW
        echo "<tr>";
        echo "<td>".$obj->CodCliente."</td>";
        echo "<td>".$obj->Nombre."</td>";
        echo "<td>".$obj->Apellidos."</td>";
        echo "<td>".$obj->Correo."</td>";
        echo "<td>".$obj->password."</td>";
        echo "<td>".$obj->Fecha_Alta."</td>";
        echo "<td class='imagenes'><a method='post' href='editar_clientes.php?CodCliente=$obj->CodCliente&Nombre=$obj->Nombre&Apellidos=$obj->Apellidos&Correo=$obj->Correo&Fecha_Alta=$obj->Fecha_Alta'><img class='editar' src='/Proyecto%20Final/IMAGENES/editar_cliente.ico'/></a>
                  <a href='eliminar_cliente.php?CodCliente=$obj->CodCliente'><img class='editar' src='/Proyecto%20Final/IMAGENES/eliminar_cliente.ico'/></a>      
              </td>";
        echo "</tr>";
    }
    echo "</table>";
    //Free the result. Avoid High Memory Usages
    $result->close();
    unset($obj);
    unset($connection);

} //END OF THE IF CHECKING IF THE QUERY WAS RIGHT

?>
  </div>
</div>

<?php include_once 'pie_admin.php'?>

</html>
