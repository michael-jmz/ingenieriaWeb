<link rel="stylesheet" type="text/css" href="../css/style.css">

<?php

include ("../dll/conexion.php"); // incluidos el archivo de conexion para poder conectarnos a la db
include ("../dll/class_mysql.php"); // incluidos el archivo de conexion para poder conectarnos a la db

 $miConexion= new class_mysqli();
 $miConexion->conectar (DBHOST, DBUSER, DBPASS, DBNAME);

//extract ($_POST);   //obtiene todo

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


$sql="INSERT INTO personal VALUES ('','$nombre','$apellidos','$cedula','$telefono', '$direccion','$fecha','$correo')";
//$sql ="delete from personal where id=1";
//$sql = "update personal set nombres= 'Rousmary' , apellidos='Pardo' where id=2";
$resSQL=$miConexion->consulta ($sql);

if ($resSQL==""){
    echo "problemas de ejecucion";
}else{
    echo "Guardado correctamente";
    echo '<script> alert ("Sentencia Ejecutada...");</script>';
    echo "<script> location.href='adopcion.php'</script>";
}

?>