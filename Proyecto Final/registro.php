<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUSTOMS GARAGE</title>
    <link rel="stylesheet" type="text/css" href="css/registro.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  </head>
  <body>
	<?php if (!isset($_POST["user"])) : ?>
  <form method="post">
		<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>Crea tu cuenta</h3>
					<div class="d-flex justify-content-end social_icon">
						<span><i class="fab fa-facebook-square"></i></span>
						<span><i class="fab fa-google-plus-square"></i></span>
						<span><i class="fab fa-twitter-square"></i></span>
					</div>
				</div>

				<div class="card-body">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><img src="IMAGENES/arroba.png" style="width:20px ; height:22px"/></i></span>                           
							</div>
							<input name="correo" type="text" class="form-control" placeholder="E-mail">						
						</div>

						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input name="user" required type="text" class="form-control" placeholder="Usuario">							
						</div>

						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input name="password" required type="password" required class="form-control" placeholder="Contraseña">
						</div>

						<form action="login.php">
						<div class="form-group">
							<input type="submit" value="Crear" class="btn float-right login_btn">
						</div>
						</form>
				</div>
    
				<div class="card-footer">
					<div class="d-flex justify-content-center links">
						Si ya tienes tu cuenta <a href="login.php">Inicia Sesión</a>
					</div>
				</div>
				</form> 
			</div>
		</div>
	</div>

<?php else:?>

<?php
      $connection = new mysqli("localhost", "root", "2asirtriana", "proyecto");

      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }

			$consulta1="select * from clientes where Nombre='$_POST[user]'";

			$consulta2="INSERT into clientes (Correo,Nombre,password,Fecha_Alta,tipo) values
      ('$_POST[correo]','$_POST[user]',md5('$_POST[password]'),curdate(),'usuario')";

      if ($result = $connection->query($consulta1)) {
          if ($result->num_rows==0) {
            if ($result = $connection->query($consulta2)) {
							header("Location: login.php");
						}
					} else {
						header("refresh:0;url=registro.php");
						echo "<h3>Este usuario ya está registrado</h3>";
					}

      } else {
        echo "Wrong Query";
      }
      
  ?>
	<?php endif ?>
	</body>
</html>