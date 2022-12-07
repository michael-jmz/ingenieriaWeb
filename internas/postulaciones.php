<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Happy Pets</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="icon" href="../images/logo.png" sizes="32x32" />
    <link rel="icon" href="../images/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
<div class="contenedor">
	<header class="cabeceraPrincipal">
		<section class="logotipo"><img src="../images/logotipoPet.png"></section>
		<nav class="menuPrincipal">
			<a href="../">Inicio</a>
			<a href="servicios.php">Servicios</a>
			<a href="#">Productos</a>
			<a href="#">Adopción</a>
			<a href="postulacion.php">Postulaciones </a>
			<a href="listadoPostulacion.php">Listado de Postulantes</a>
		</nav>
	</header>
	<main>
	<?php

	include ("../dll/conexion.php"); // incluidos el archivo de conexion para poder conectarnos a la db
	include ("../dll/class_mysql.php"); // incluidos el archivo de conexion para poder conectarnos a la db
	$miConexion= new class_mysqli();
	$miConexion->conectar (DBHOST, DBUSER, DBPASS, DBNAME);
	
?>
		<h2>Formulario de postulaciones</h2>
		<form method="post" action="guardarPostulacion.php">
			<div class="grupoinput">
				<label for="nombres">Nombres</label> 
				<input id="nombres"type="text" name="nombres" placeholder="Ingrese nombres" required>
			</div>
			<div class="grupoinput">
				<label for="sapellidos">Apellidos</label> 
				<input id="apellidos"type="text" name="apellidos" placeholder="Ingrese sus apellidos"required>
			</div>
			
			<div class="grupoinput">
				<label for="direccion">Dirección</label> 
				<input id="direccion"type="text" name="direccion" placeholder="Ingrese su direccion"required>
			</div>
            <div class="grupoinput">
				<label for="correo">Correo</label> 
				<input id="correo"type="mail" name="correo" placeholder="Ingrese su correo"required>
			</div>
			<div class="grupoinput">
				<label for="cedula">Cédula</label> 
				<input id="cedula"type="text" name="cedula" placeholder="Ingrese su cedula"required>
			</div>
			<div class="grupoinput">
				<label for="cars">Mascota</label>
				<select name="mascota" id="mascota" required>
        			<?php
					$miConexion->consulta('SELECT mascota_id , nombre FROM mascotas');
					$miConexion->verMascotas();
        			?>
      			</select>
			</div>
			<button class ="button"type="submit"> Postular Adopción</button>
			
		</form>

	</main>
	<footer class="piePagina">
		<section class="derechos">
			<h6>Derechos Reservados UTPL 2022</h6>
		</section>
		<nav class="redesSociales">
			<a href=""><i class="fa-brands fa-facebook"></i></a>
			<a href=""><i class="fa-brands fa-instagram"></i></a>
			<a href=""><i class="fa-brands fa-tiktok"></i></a>
		</nav>
	</footer>
</div>
</body>
</html>