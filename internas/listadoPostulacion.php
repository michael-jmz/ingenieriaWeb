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
			<a href="adopcion.php">Adopción</a>
			<a href="#">Personal</a>
            <a href="postulaciones.php">Postulaciones </a>
			<a href="listadoPostulaiones.php">Listados de Postulantes</a>

		</nav>
	</header>
	<main>
        <h2> Listado de Perosnal</h2>
        <?php

    include ("../dll/conexion.php"); // incluidos el archivo de conexion para poder conectarnos a la db
    include ("../dll/class_mysql.php"); // incluidos el archivo de conexion para poder conectarnos a la db

	//SELECT personal.nombre, personal.apellido, mascotas.nombre, mascotas.raza FROM personal INNER JOIN mascotas ON personal.persona_id= mascotas.mascota_id
//INNER JOIN mascota_personal ON mascota_personal.mascota_peronsal_id= personal.persona_id
//GROUP BY personal.nombre

// consulta sql tabla intermedia

//SELECT personal.persona_id, personal.nombre, personal.apellido, mascotas.nombre, mascotas.raza FROM personal INNER JOIN mascota_personal ON personal.persona_id= mascota_personal.persona_id
//INNER JOIN mascotas ON mascota_personal.mascota_id= mascotas.mascota_id

    $miConexion= new class_mysqli();
    $miConexion->conectar (DBHOST, DBUSER, DBPASS, DBNAME);
    //$miConexion->consulta ("select *from personal");
	$miConexion->consulta("SELECT 	personal.persona_id 'ID', 
									personal.nombre 'Nombres', 
                                    personal.apellido 'Apellidos',
                                    personal.cedula 'Cédula', 
                                    mascotas.nombre 'Mascota', 
                                    mascotas.raza 'Raza'
                                    FROM personal INNER JOIN mascota_personal ON personal.persona_id= mascota_personal.persona_id
									INNER JOIN mascotas ON mascota_personal.mascota_id= mascotas.mascota_id");
	$miConexion->verLsitaPostulaciones();
    ?>
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