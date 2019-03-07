
<?php
 $user = $_SESSION['user'];
             

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
if ($result = $connection->query("select * from clientes where id ='$user';")) {
    ?>

    <!-- PRINT THE TABLE AND THE HEADER -->
    <table>
    <thead>
      <tr>
        <th>Codigo Cliente</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Correo</th>
        <th>Password</th>
        <th>Fecha de alta</th>
       </tr>
    </thead>

<?php

    //FETCHING OBJECTS FROM THE RESULT SET
    //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
    while ($obj = $result->fetch_object()) {
        //PRINTING EACH ROW
        echo "<tr>";
        echo "<td>".$obj->CodCliente."</td>";
        echo "<td>".$obj->Nombre."</td>";
        echo "<td>".$obj->Apellidos."</td>";
        echo "<td>".$obj->Correo."</td>";
        echo "<td>".$_SESSION['password']."</td>";
        echo "<td>".$obj->Fecha_Alta."</td>";
        echo "</tr>";
    }

    //Free the result. Avoid High Memory Usages
    $result->close();
    unset($obj);
    unset($connection);
} //END OF THE IF CHECKING IF THE QUERY WAS RIGHT
echo "</table>";

?>