<link rel="stylesheet" type="text/css" href="../css/style.css">

<?php

include ("../dll/conexion.php"); // incluidos el archivo de conexion para poder conectarnos a la db
include ("../dll/class_mysql.php"); // incluidos el archivo de conexion para poder conectarnos a la db

 $miConexion= new class_mysqli();
 $miConexion->conectar (DBHOST, DBUSER, DBPASS, DBNAME);

//extract ($_POST);   //obtiene todo

$nombres=$_POST['nombres'];//debemos extraer una a uno por seguridad
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$cedula=$_POST['cedula'];

echo "Bienvenido ".$nombre." <br> 💪</strong>";
echo $apellidos."<br>";
echo "<strong class='colorRojo'>".$apellidos."</strong> <br>";


$sql="INSERT INTO postulaciones VALUES ('','$nombres','$apellidos','$direccion', '$correo','$cedula')";
$resSQL=$miConexion->consulta ($sql);

if ($resSQL==""){
    echo "problemas de ejecucion";
}else{
    echo "Postulación exitosa";
    echo '<script> alert ("Postulación exitosa...");</script>';
    echo "<script> location.href='listadoPostulacion.php'</script>";
}

?>