<?php 
//Conexxion BD
require("connect_db.php");
//Variables POST
$usuario=$_POST['usuario']; 
$clave=$_POST['clave'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$mail=$_POST['mail'];

//Insertar nueva persona
$query="insert into ecohome.usuarios (nombre, clave, mail, apellido, usuario) 
values ('".$nombre."','".$clave."','".$mail."','".$apellido."','".$usuario."');"	;  
$result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error());
//Redireccion
header("Location: ../index.php?succes");
?>