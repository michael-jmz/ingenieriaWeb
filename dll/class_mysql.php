<?php
/**
 * class msyqli
 */
class class_mysqli{
  
        var $BaseDatos;
        var $Servidor;
        var $Usuario;
        var $Clave;

        //vasriables de erro

        var $Error="";
        var $Errorno=0;

        var $Conexion_ID=0;
        var $Consulta_ID=0;
        
        function __construct($host="", $user="", $pass="", $db=""){
            $this->BaseDatos=$db;
            $this->Service=$host;
            $this->Usuario=$user;
            $this->Clave=$pass;
        }
function conectar ($host, $user,$pass, $db){

    if ($host !="") $this -> Servidor=$host;
    if ($user !="") $this -> Usuario=$user;
    if ($pass !="") $this -> Clave=$pass;
    if ($db !="") $this -> BaseDatos=$db;
    
    //parametros de conexion

    $this->Conexion_ID =new mysqli ($this->Servidor, $this->Usuario, $this->Clave, $this->BaseDatos);
    if (!$this->Conexion_ID){
        $this->Error="No hay sql";
        return 0;
    }
    return $this->Conexion_ID;

}
function consulta($sql=""){
    if($sql==""){
        $this->Error="No hay ninguna sentencia sql";
        return 0;
    }
    /*Ejecutar la cunsulta*/
    $this->Consulta_ID=mysqli_query($this->Conexion_ID, $sql);

    if(!$this->Consulta_ID){
        print $this->Conexion_ID->error;
        return 0;
    }
    return $this->Conexion_ID;
}
//retorna numero de campos
function numCampos (){
    return mysqli_num_fields($this->Consulta_ID);
}
function numRegistros (){
    return mysqli_num_rows ($this->Consulta_ID);
}

function verConsulta(){
    echo "<table border='1'>";
    echo "<tr>";
    //la primera fila de nuestra tabla
    for ($i=0; $i< $this->numCampos(); $i++){
        echo "<td>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</td>";
    }
    echo "</tr>";
    //sacamos todo el registro
    while ($row=mysqli_fetch_array($this->Consulta_ID)){
        echo "<tr>";
        for ($i=0; $i<$this->numCampos(); $i++){
            echo "<td>".$row[$i]."</td>";
        }
        echo "</tr>"; 
    }

    echo "</table>";
}
function borrarRegistro(){
    echo "<table border='1px'>";
    echo "<tr class='table'>";
    //la primera fila de nuestra tabla
    for ($i=0; $i< $this->numCampos(); $i++){
        echo "<td>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</td>";
    }
    echo "<td>Actualizar</td>";
	echo "<td>Borrar</td>";
    echo "</tr>";
    //sacamos todo el registro
  
    while ($row=mysqli_fetch_array($this->Consulta_ID)){
       
        echo "<tr>";
        for ($i=0; $i<$this->numCampos(); $i++){
            echo "<td>".$row[$i]."</td>";
        }
        echo "<td><a href='updateUser.php?idUser=$row[0]'>Actualizar</a></td>";
		echo "<td><a href='deletUser.php?idUser=$row[0]'>Borrar</a></td>";
		echo "</tr>";
		}
		echo "</table>";
}
function verMascotas(){
    echo "<option selected disabled=''>Seleccione mascota:</option>";
    while ($row=mysqli_fetch_array($this->Consulta_ID)){
        
            //value='.$row[0].' deveulve el valor al selecionar la opcion en este caso el id de mascota
            echo "<option value='$row[0]'>".$row[1]."</option>";         
    }
}
function verLsitaPostulaciones(){
    echo "<table border='1px'>";
    echo "<tr class='table'>";
    //la primera fila de nuestra tabla
    for ($i=0; $i< $this->numCampos(); $i++){
        echo "<td>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</td>";
    }
    echo "<td>Actualizar</td>";
	echo "<td>Borrar</td>";
    echo "</tr>";
    //sacamos todo el registro
  
    while ($row=mysqli_fetch_array($this->Consulta_ID)){
        echo "<tr>";
        for ($i=0; $i<$this->numCampos(); $i++){
            echo "<td>".$row[$i]."</td>";
        }
        echo "<td><a href='updateUser.php?idUser=$row[0]'>Actualizar</a></td>";
		echo "<td><a href='deletUser.php?idUser=$row[0]'>Borrar</a></td>";
		echo "</tr>";
		}
		echo "</table>";
}
function consulta_lista(){
    while ($row = mysqli_fetch_array($this->Consulta_ID)) {
        for ($i=0; $i < $this->numcampos(); $i++) {
            $row[$i];
        }
        return $row;
    }
}
   
}

?>