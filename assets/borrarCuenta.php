<!--conectar a BD-->
<?php require ("connect_db.php");



//borrar
$query="delete from ecohome.cuentas where idcuenta=".$_GET['id'];  
$link->multi_query($query) or die('Consulta fallida: ' . mysqli_error());
//Redireccion
header("Location: ../cuentas.php");

