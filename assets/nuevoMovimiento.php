<?php 
//conexion
require ("connect_db.php");

// Insertar nuevo moviento
$query="insert into ecohome.movimientos (monto, fecha, descripcion, tipo, cuenta) 
values ('".$_POST["monto"]."','".$_POST["fecha"]."','".$_POST["descripcion"]."','".$_POST["tipo"]."','".$_POST["cuenta"]."');"	;  
//Suma/resta monto del movimiento de la cuenta
$query.="update cuentas set saldo=saldo+".$_POST["monto"]."*".$_POST["tipo"]." where idcuenta='".$_POST["cuenta"]."';";
$link->multi_query($query) or die('Consulta fallida: ' . mysqli_error());
//redireccion
header("Location: ../movimientos.php");
?>