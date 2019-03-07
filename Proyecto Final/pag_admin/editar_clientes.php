
<?php ob_start(); ?>

<!DOCTYPE html> 
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="editar_clientes.css" TYPE="text/css" MEDIA=screen>
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

  //Open the session
  session_start();

if (isset($_SESSION["user"]) && $_SESSION["user"]=="admin") { ?>
    
    <?php include_once 'menu_admin.php'?>
 
<div class="row">      
    <div id="tabla" class="col-md-12">
    <div class="container">
        <h2>DATOS DEL CLIENTE</h2>
        <p>Editar</p>
        <form action="/action_page.php">
        <div class="form-group">
            <label for="cod">Cod Cliente</label>
            <input type="password" class="form-control" id="pwd">
        </div>
        <div class="form-group">
            <label for="nom">Nombre</label>
            <input type="password" class="form-control" id="pwd">
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd">
        </div>
        <div class="form-group">
            <label for="nom">Password:</label>
            <input type="password" class="form-control" id="pwd">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
    </div>
</div>
    

<?php } else {
    session_destroy();
    header("Location: ../INICIO/index.php");
}
?>

</body>
</html>