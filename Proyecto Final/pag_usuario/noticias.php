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
    <link rel="stylesheet" href="../css/noticias.css" TYPE="text/css" MEDIA=screen>
    <link rel="stylesheet" href="../css/hola.js" TYPE="text/js" MEDIA=screen>
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

<div class="container">
<div class="row">
	<div class="col-sm-12 col-md-6 col-lg-6  py-0 pl-3 pr-1 featcard">
	   <div id="featured" class="carousel slide carousel-fade" data-ride="carousel">
 		 <div class="carousel-inner">
	  	    <div class="carousel-item active">			  
	  	        <div class="card bg-dark text-white">
		            <img class="card-img img-fluid" src="/Proyecto Final/IMAGENES/x7.jpg" alt="">
		            <div class="card-img-overlay d-flex linkfeat">
		                <a href="https://www.actualidadmotor.com/oficial-bmw-x5-m50i-bmw-x7-m50i-530-cv/" target="_blank" class="align-self-end">
		        	        <span class="badge">Novedad</span> 
		                    <h4 class="card-title">Ya están confirmados los BMW X5 M50i y BMW X7 M50i con 530 CV</h4>
		                    <p class="textfeat" style="display: none;">makro.id– Paket kebijakan ekonomi dinilai dapat memberikan kemudahan dalam pengurusan perizinan berinvestasi dan memberikan efek yang cukup signifikan kepada investor.
                            Ketua Umum Himpunan Kawasan Industri (HKI) Sanny Iskandar menyatakan saat ini</p>
		                </a>
		            </div>
		        </div>
	  		</div>
	  	</div>
	  </div>
	</div>
	<div class="col-6 py-0 px-1 d-none d-lg-block">
		<div class="row">
			<div class="col-6 pb-2 mg-1	">
				<div class="card bg-dark text-white">
		        <img class="card-img img-fluid" src="/Proyecto Final/IMAGENES/gls2.jpg" alt="">
		            <div class="card-img-overlay d-flex">
		                <a href="https://www.actualidadmotor.com/nuevo-mercedes-benz-gls-mas-lujo-espacio/" target="_blank" class="align-self-end">
		        	        <span class="badge">Novedad</span> 
		                    <h6 class="card-title">Mercedes-Benz GLS: Más lujo y espacio para el gigante de la estrella</h6>
		                </a>
		            </div>
		      	</div>
			</div>
			<div class="col-6 pb-2 mg-2	">
				<div class="card bg-dark text-white">
		            <img class="card-img img-fluid" src="/Proyecto Final/IMAGENES/Genesis.jpg" alt="">
		            <div class="card-img-overlay d-flex">
		                <a href="https://www.actualidadmotor.com/genesis-essentia-2021/" target="_blank" class="align-self-end">
		        	        <span class="badge">Novedad</span> 
		                    <h6 class="card-title">El Genesis Essentia podría llegar al mercado en el año 2021</h6>
		                </a>
		            </div>
		      	</div>
			</div>
			<div class="col-6 pb-2 mg-3	">
				<div class="card bg-dark text-white">
		            <img class="card-img img-fluid" src="/Proyecto Final/IMAGENES/audi.jpg" alt="">
		            <div class="card-img-overlay d-flex">
		                <a href="https://www.actualidadmotor.com/audi-s6-audi-s7-diesel-tdi-oficial/" target="_blank" class="align-self-end">
		        	        <span class="badge">Novedad</span> 
		                    <h6 class="card-title">¡Los Audi S6 y Audi S7 Sportback se pasan al diésel!</h6>
		                </a>
		            </div>
		      	</div>
			</div>
		    <div class="col-6 pb-2 mg-4	">
				<div class="card bg-dark text-white">
		            <img class="card-img img-fluid" src="/Proyecto Final/IMAGENES/fca.jpg" alt="">
		            <div class="card-img-overlay d-flex">
		                <a href="https://www.actualidadmotor.com/grupo-fca-retira-propuesta-fusion-grupo-renault/?utm_source=destacados&utm_medium=banner2" target="_blank" class="align-self-end">
		        	        <span class="badge">Novedad</span> 
		                    <h6 class="card-title">¡Bombazo! El Grupo FCA retira su propuesta de fusión al Grupo Renault</h6>
		                </a>
		            </div>
		      	</div>
			</div>
		</div>
	</div>
</div>
</div>

<?php include_once 'pie_user.php'; ?>
</body>
</html>