<?php

//CREATING THE CONNECTION
$connection = new mysqli("localhost", "root", "2asirtriana", "proyecto");
$connection->set_charset("utf8");

//TESTING IF THE CONNECTION WAS RIGHT
if ($connection->connect_errno) {
    printf("Connection failed: %s\n", $connection->connect_error);
    exit();
}

?>
    <thead>
        <tr>
            <th>Datos Cliente:</th> 
            <?php 
                if ($result = $connection->query("select Nombre, Apellidos from clientes where c.Nombre='$_SESSION[user]'")) {
                    $obj = $result->fetch_object();
                }
            ?>  
        </tr>
        <tr>
            <th>Matricula</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Color</th>
            <th>Fecha de Matriculación</th>   
        </tr>
    </thead>

<?php

    //FETCHING OBJECTS FROM THE RESULT SET
    //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
    if ($result = $connection->query("select Nombre, Apellidos, Matricula from vehiculos v join clientes c on v.CodCliente = c.Codcliente
    where c.Nombre='$_SESSION[user]'")) {


        //FETCHING OBJECTS FROM THE RESULT SET
        //THE LOOP CONTINUES WHILE WE HAVE ANY OBJECT (Query Row) LEFT
    $obj = $result->fetch_object();
            //PRINTING EACH ROW
            echo "<tr><td><b>Matricula: </b></td><td>$obj->Matricula</td></tr>";
            echo "<tr><td><b>Marca: </b></td><td>$obj->Marca</td></tr>";
            echo "<tr><td><b>Modelo: </b></td><td>$obj->Modelo</td></tr>";
            echo "<tr><td><b>Color: </b></td><td>$obj->Color</td></tr>";
            echo "<tr><td><b>Fecha de matriculación: </b></td><td>$obj->FechaMatriculacion</td></tr>";
    //Free the result. Avoid High Memory Usages
    $result->close();
    unset($obj);
    unset($connection);

} //END OF THE IF CHECKING IF THE QUERY WAS RIGHT

?>
