<link rel="stylesheet" type="text/css" href="../css/style.css">

<?php

include ("../dll/conexion.php"); // incluidos el archivo de conexion para poder conectarnos a la db
include ("../dll/class_mysql.php"); // incluidos el archivo de conexion para poder conectarnos a la db

 $miConexion= new class_mysqli();
 $miConexion->conectar (DBHOST, DBUSER, DBPASS, DBNAME);

//extract ($_POST);   //obtiene todo

$nombre=$_POST['nombres'];//debemos extraer una a uno por seguridad
$apellido=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$cedula=$_POST['cedula'];
$id_mascota=$_POST['mascotas'];

echo "Bienvenido".$nombre." <br> 💪</strong><br>";
echo $id_mascota."<br>";
echo $apellido."<br>";
echo "<strong class='colorRojo'>".$apellido."</strong> <br>";

$setencia="INSERT INTO personal VALUES ('','$nombre','$apellido','$direccion','$correo','$cedula')";

$miconexion->consulta($setencia);
$miconexion->consulta('SELECT max(id) FROM personal');
$lista=$miconexion->consulta_lista();
$miconexion->consulta("INSERT INTO mascota_personal VALUES('','$lista[0]','$id_mascota')");

$resSQL=$miConexion->consulta ($setencia);

if ($resSQL==""){
    echo "problemas de ejecucion";
}else{
    echo "Postulación exitosa";
    echo '<script> alert ("Postulación exitosa...");</script>';
    echo "<script> location.href='listadoPostulacion.php'</script>";
}

?>