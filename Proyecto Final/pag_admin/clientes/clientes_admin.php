<?php session_start();

if (isset($_SESSION["user"]) && $_SESSION["user"]=="admin") { ?>
<?php ob_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="clientes_admin.css" TYPE="text/css" MEDIA=screen>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
        <?php include_once "menu_admin.php"?>
    <div>
      <hr aling="left" noshade="noshade" size="2" width="80%"/>
    </div>
      <div class="row">
      <a href='anadir_cliente.php'><img class="anadir" src='/Proyecto%20Final/IMAGENES/anadir_cliente.ico'/></a>
        <div class="col-md-12">

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

   echo "<table class='table table-hover'>";
    ?>
    <thead>
      <tr>
        <th>CodCliente</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Correo</th>
        <th>Password</th>
        <th>Fecha Alta</th>
        <th></th>     
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
        echo "<td>".$obj->Apellido."</td>";
        echo "<td>".$obj->Correo."</td>";
        echo "<td>".$obj->password."</td>";
        echo "<td>".$obj->Fecha_Alta."</td>";
        echo "<td><a method='POST' action='clientes_admin.php' href='editar_clientes.php'?CodCliente=$obj->CodCliente&Nombre=$obj->Nombre&Apellidos=$obj->Apellidos&Correo=$obj->correo&password=$obj->password&Fecha_Alta=$obj->Fecha_Alta'><img src='/Proyecto%20Final/IMAGENES/editar_cliente.ico'/></a>
                  <a href='eliminar_cliente.php'?CodCliente=$obj->CodCliente&Nombre=$obj->Nombre&Apellidos=$obj->Apellidos&Correo=$obj->correo&password=$obj->password&Fecha_Alta=$obj->Fecha_Alta'><img src='/Proyecto%20Final/IMAGENES/eliminar_cliente.ico'/></a>      
              </td>";
        echo "</tr>";
    }

    //Free the result. Avoid High Memory Usages
    $result->close();
    unset($obj);
    unset($connection);

} //END OF THE IF CHECKING IF THE QUERY WAS RIGHT

?>
    </div>
    </div>


</body>
</html>

<?php } else {
    session_destroy();
    header("Location: ../login.php");
  }


 ?>