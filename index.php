<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Happy Pets</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="icon" href="images/logo.png" sizes="32x32" />
    <link rel="icon" href="images/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
	<div class="contenedor">
	<header class="cabeceraPrincipal">
		<section class="logotipo"><img src="images/logotipoPet.png"></section>
		<nav class="menuPrincipal">
			<a href="inicio.php">Inicio</a>
			<a href="internas/servicios.php">Servicios</a>
			<a href="#">Productos</a>
			<a href="#">Adopción</a>
			<a href="internas/personal.php">Personal</a>
			<a href="internas/postulaciones.php">Postulaciones </a>
			<a href="internas/listadoPostulaiones.php">Listados de Postulantes</a>


		</nav>
	</header>
	<section class="sliderPrincipal">
		<img src="images/slider1.jpg" title="slider">
	</section>

	<section class="titulo"><h2 class="colorAzul mayusculas">Adopción</h2></section>

	<section class="adopcion1">
		<img class="imgdog" src="images/dog1.jpg" title="firulais" descrition="Perro de adopcion">
		<article class ="card1">
			<h3 class="mayusculas colorAzul">Firulais</h3>
			<p class="derecha">
			Lorem ipsum dolor sit amet, consectetur 
			adipiscing elit, sed do eiusmod tempor 
			incididunt ut labore et dolore magna aliqua. 
			Sed egestas egestas fringilla phasellus faucibus
			scelerisque. Et molestie ac feugiat sed lectus 
			vestibulum mattis ullamcorper velit. Nisl vel
			pretium lectus quam id leo in vitae turpis. 
			Laoreet non curabitur gravida arcu ac tortor 
			dignissim.
			</p>
			
			<div class="buttonDererecha">
				<button class="button button1">Mas Informacion</button>
			</div>
		</article>
	</section>

	<section class="adopcion2">
		<img class="imgdog" src="images/dog2.jpg" title="rex">
		<article class="card1">
			<h3 class="mayusculas colorAzul">Firulais</h3>
			<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
				sed do eiusmod tempor incididunt ut labore et dolore 
				magna aliqua. Sed egestas egestas fringilla 
				phasellus faucibus scelerisque. 
				Et molestie ac feugiat sed lectus vestibulum 
				mattis ullamcorper velit. Nisl vel pretium lectus 
				quam id leo in vitae turpis. Laoreet non curabitur 
				gravida arcu ac tortor dignissim.</p>
			<div class="buttonDererecha">
				<button class="button button1">Mas Informacion</button>
			</div>
		</article>
	</section>	
	<section class="tituloDoctores"><h2 class="colorAzul mayusculas">Doctores</h2></section>
	<section class="doctor">
		<article class="carDoctor">
			<img class="img1" src="images/doctor1.jpg" alt="Doctor 1"title="doctor 1">
		</article>

		<article class="carDoctor">
			<img class="img1" src="images/doctor2.jpg" alt="Dcotor 2"title="doctor 2">
		</article>

		<article class="carDoctor">
			<img class="img1" src="images/doctor3.jpg" alt="Doctor 3"title="doctor 3">
		</article>

		<article class="carDoctor">
			<img class="img1" src="images/doctor4.jpg" alt="Doctor 4"title="doctor 4">
		</article>
	
	</section>
	
	
	<section class="sponsor">
		<h3 class="colorAzul">Sponsor</h3>
		<img src="images/logohappypets.png">
		<img src="images/logoUtpl.png">

			
	</section>
	
<!--FOOTER-->
	<?php include ("footer.php");?>
	</div>

</body>
</html>
