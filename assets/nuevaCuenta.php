<?php 
//Conexion BD
require ("connect_db.php");

//Insertar cuenta
$query="insert into ecohome.cuentas (nombre,idusuario,saldo) 
values ('".$_POST["nombre"]."','".$_POST["usuario"]."','".$_POST["saldo"]."');"	;  
$link->multi_query($query) or die('Consulta fallida: ' . mysqli_error());
//Redireccion
header("Location: ../cuentas.php");
?>