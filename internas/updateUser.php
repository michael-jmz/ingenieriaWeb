<?php
include ("../dll/conexion.php"); // incluidos el archivo de conexion para poder conectarnos a la db
include ("../dll/class_mysql.php"); // incluidos el archivo de conexion para poder conectarnos a la db
?>
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

<?php
$miConexion= new class_mysqli();
$miConexion->conectar (DBHOST, DBUSER, DBPASS, DBNAME);
$idUser = $_GET ['idUser'];


if (isset($_GET['idUser'])) $idUser;
    $sql = "SELECT * FROM personal WHERE id=$idUser";
    $stmt->bindParam(":id",$idUser);
    $stmt->execute();
    $count= $stmt->rowCount();
if ($count > 0){
    $datos=$stmt->fetch();
}
?>
<body>
   <div class="contenedor">
    <main>
         <secction class="actualizarPersonal">
             <h2>Actualizar Datos</h2>
             <form action="updateUser.php" method="post" class="formularioActualizar">
                <div class="grupoinputF">
                    <label for="nombres">Nombres</label> 
                    <input class= "form-control" id="nombres"type="text" name="nombres" placeholder="Ingrese nombres" value="<?=$datos['nombres']?>">
                </div>
                <div class="grupoinputF">
                    <label for="apellidos">Apellidos</label> 
                    <input  class= "form-control" id="apellidos"type="text" name="apellidos" placeholder="Ingrese sus apellidos"value="<?=$datos['apellidos']?>">
                </div>
                <div class="grupoinputF">
                    <label for="cedula">Cédula</label> 
                    <input  class= "form-control" id="cedula"type="text" name="cedula" placeholder="Ingrese su cedula"value="<?=$datos['cedula']?>">
                </div>
                <div class="grupoinputF">
                    <label for="telefono">Teléfono</label> 
                    <input  class= "form-control" id="telefono"type="text" name="telefono" placeholder="Ingrese su telefono"value="<?=$datos['correo']?>">
                </div>
                <div class="grupoinputF">
                    <label for="correo">Correo</label> 
                    <input id="correo"type="mail" name="correo" placeholder="Ingrese su correo"value="<?=$datos['']?>">
                </div>
                <button class ="button"type="submit"> Actualizar</button>

             </form>
         </secction>
    </main>
    <?php include ("../footer.php"); ?>
   </div >
</body>