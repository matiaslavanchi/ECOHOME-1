<?php //Inicio de sesion
session_start();
require("connect_db.php");
$idusuario=$_SESSION["id"]; 

//Borrar usuario
$query="delete from ecohome.usuarios where idusuario='".$idusuario."';"	;  
$result = mysqli_query($query,$link) or die('Consulta fallida: ' . mysqli_error());
//Redireccion
header("Location: ../index.php?borrado");



?>
