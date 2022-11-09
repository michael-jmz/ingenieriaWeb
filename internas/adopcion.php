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
			<a href="adopcion.php">Productos</a>
			<a href="adopcion.php">Adopción</a>
			<a href="#">Contactos</a>
		</nav>
	</header>
	<main>
		<h2>Formulario de adopcion</h2>
		<form method="post" action="procesar.php">
			<div class="grupoinput">
				<label for="nombres">nombres</label> 
				<input id="nombres"type="text" name="nombres" placeholder="Ingrese nombres" required>
			</div>
			<div class="grupoinput">
				<label for="apellidos">apellidos</label> 
				<input id="apellidos"type="text" name="apellidos" placeholder="Ingrese sus apellidos">
			</div>
			<div class="grupoinput">
				<label for="cedula">cedula</label> 
				<input id="cedula"type="text" name="cedula" placeholder="Ingrese su cedula">
			</div>
			<div class="grupoinput">
				<label for="telefono">telefono</label> 
				<input id="telefono"type="text" name="telefono" placeholder="Ingrese su telefono">
			</div>
			<div class="grupoinput">
				<label for="direccion">direccion</label> 
				<input id="direccion"type="text" name="direccion" placeholder="Ingrese su direccion">
			</div>
			<div class="grupoinput">
				<label for="fechaNacimiento">fecha de nacimiento</label> 
				<input id="fechaNacimiento"type="date" name="fechaNacimiento" placeholder="Ingrese su fecha de nacimiento">
			</div>
			<div class="grupoinput">
				<label for="correo">correo</label> 
				<input id="correo"type="mail" name="correo" placeholder="Ingrese su correo">
			</div>
			<button class ="button"type="submit"> Guardar Datos</button>
			
		</form>

	</main>
	<section class="sponsor">
		<h3 class="colorAzul">Sponsor</h3>
	</section>
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