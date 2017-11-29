<?php //Inicio de sesion
session_start();
require("../assets/connect_db.php");
//Datos POST
$idusuario=$_SESSION["id"]; 
$usuario=$_POST['usuario']; 
$clave=$_POST['clave'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$mail=$_POST['mail'];

//Query de update
$query="update ecohome.usuarios SET nombre='".$nombre."', clave='".$clave."', mail='".$mail."', apellido='".$apellido."', usuario='".$usuario."'
 where idusuario='".$idusuario."';";
$result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error()); 
//Redireccion
header("Location: ../index2.php?succes");
?>