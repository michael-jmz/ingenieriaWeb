<link rel="stylesheet" type="text/css" href="../css/style.css">

<?php
$vars = 10;
$var1 = 4;
extract ($_POST);   //obtiene todo

$nombre=$_POST['nombres'];//debemos extraer una a uno por seguridad
$apellidos=$_POST['apellidos'];
$cedula=$_POST['cedula'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$fecha=$_POST['fechaNacimiento'];
$correo=$_POST['correo'];

echo "Bienvenido ".$nombre." <br> 💪</strong>";
echo $apellidos."<br>";
echo "<strong class='colorRojo'>".$apellidos."</strong> <br>";

?>