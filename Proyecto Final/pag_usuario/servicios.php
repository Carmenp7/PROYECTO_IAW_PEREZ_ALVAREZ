<?php session_start();

if (!isset($_SESSION['tipo']) || ($_SESSION['tipo']!='usuario')) { 
    session_destroy();
    header("Location: ../login.php");}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/servicios.css" TYPE="text/css" MEDIA=screen>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>  

<body> 
    
<?php include_once 'menu_user.php'; ?>

<div class="section_bg_gray">
    <div class="container">
        <div class="row" style="padding-bottom:70px;">
		    <div class="col-md-12">
		        <div class="ptb-50">
		            <h2 class="text-left">SERVICIOS</h2>
		        </div>
		    </div>
	    </div>
	    <div class="row" id="servicios">
	        <div class="col-sm-6 col-md-3">
			    <div class="single_what_we_do" id="direccion">
				    <div class="top_line"></div>
					<div class="what_we_do_figure">
						<img src="/Proyecto Final/IMAGENES/llave.png" style="width:60px;" alt="" class="img-responsive">
					</div>
					<h4 class="what_we_do_title">ALINEACION DE DIRECCION</h4>
					<div class="what_we_do_content">Un correcto alineado de dirección es importante para conducir con seguridad.</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="single_what_we_do" id="faros">
					<div class="top_line"></div>
					<div class="what_we_do_figure">
						<img src="/Proyecto Final/IMAGENES/f.png" style="width:60px;" alt="" class="img-responsive">
					</div>
					<h4 class="what_we_do_title">PULIDO Y LACADO DE FAROS</h4>
					<div class="what_we_do_content">El sol con los años estropea nuestros faros dejándolos amarillos e inservibles.</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-3">
				<div class="single_what_we_do" id="motor">
					<div class="top_line"></div>
					<div class="what_we_do_figure">
						<img src="/Proyecto Final/IMAGENES/motor.png" style="width:60px;" alt="" class="img-responsive">
					</div>
					<h4 class="what_we_do_title">REPARACION DE MOTORES</h4>
					<div class="what_we_do_content">.</div>
				</div>
            </div>
            <div class="col-sm-6 col-md-3">
				<div class="single_what_we_do" id="ruedas">
					<div class="top_line"></div>
					<div class="what_we_do_figure">
						<img src="/Proyecto Final/IMAGENES/r.png" style="width:60px;" alt="" class="img-responsive">
					</div>
					<h4 class="what_we_do_title">MONTAJE DE NEUMATICOS</h4>
					<div class="what_we_do_content">Nada mas importante que cuidar los neumáticos de nuestro vehículo.</div>
				</div>
			</div>
	    </div>
    </div>
</div>

    <?php include_once 'pie_user.php'; ?>
</body>
</html>