<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/contacta.css" TYPE="text/css" MEDIA=screen>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
</head>  

<body> 
    
<?php include_once 'menu_user.php'; ?>

<div class="row" id="contacta">
    <div class="col-md-5">
    <p class="seccion">CONTACTA CON NOSOTROS</p>
        <img id="imagen" src="/Proyecto Final/IMAGENES/rep.JPG">
    </div>
    <div class="col-md-7">
        <form action="" method="get">
            <div class="row" style="height:55px;">
                <input type="text" name="Nombre" size="30" required placeholder=" Nombre *">
                <input type="text" name="Apellidos" size="45" required placeholder=" Apellidos *">
            </div>
            <div class="row" style="height:55px;">
                <input type="text" name="Email" size="83" required placeholder=" Email *">
            </div>
            <input class="botones" type="submit" value="Enviar">
            <input class="botones" type="reset" value="Borrar">
            
        </form>
    </div>
</div>

<?php include_once 'pie_user.php'; ?>

</body>
</html>