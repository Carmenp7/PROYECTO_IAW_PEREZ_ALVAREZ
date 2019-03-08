<?php
    $user = $_SESSION['Cod'];
    $connection = new mysqli("localhost", "root", "2asirtriana", "proyecto");
    $connection->set_charset("utf8");

    //TESTING IF THE CONNECTION WAS RIGHT
    if ($connection->connect_errno) {
        printf("Connection failed: %s\n", $connection->connect_error);
        exit();

    $consulta="UPDATE usuarios set Nombre='$_POST[Nombre]', Apellidos = '$_POST[Apellidos]', Correo= $_POST[Correo],password = md5('$_POST[password]') where CodCliente = '$Cod'"
    echo "Actualizacion correcta";
?>