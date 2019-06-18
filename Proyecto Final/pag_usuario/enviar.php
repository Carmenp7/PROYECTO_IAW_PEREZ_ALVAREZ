﻿<?php
$remitente = $_POST['Email'];
$destinatario = 'admin@admin.es'; // email del destinatario.
$asunto = 'Mensaje'; // acá se puede modificar el asunto del mail
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nombre:" . $_POST["Nombre"] . "\r\n"; 
    $cuerpo = "Apellidos: " . $_POST["Apellidos"] . "\r\n"; 
    $cuerpo .= "Email: " . $_POST["Email"] . "\r\n";
	$cuerpo .= "Mensaje: " . $_POST["Mensaje"] . "\r\n";

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['Nombre']." ".$_POST['Apellidos']."\" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    echo "<script type='text/javascript'>alert('MENSAJE ENVIADO');</script>";
    header("refresh:0;url=contacta.php");
}
?>