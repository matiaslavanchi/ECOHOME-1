<?php //Inicio de sesion
session_start();
require("connect_db.php");
//DAtos POST
$usuario=$_POST['usuario']; 
$clave=$_POST['contrasenia'];

//COnsulta para verificar usuario
$query="SELECT nombre, clave, idusuario, apellido, usuario FROM ecohome.usuarios
where  BINARY usuario='".$usuario."' and  clave='".$clave."';"	;  
$result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error());

$numero=mysqli_num_rows($result);
$row=mysqli_fetch_object($result);
//CUantos resultados volvieron?
if ($numero==1){ 
	//Iniciar valores de session
$_SESSION['id']=$row->idusuario;
$_SESSION['nombre']=$row->nombre;
$_SESSION['apellido']=$row->apellido;
//Redireccion
header("Location: ../index2.php");
}
else
	//Redireccion con error
	header('location: ../index.php?error');

?>
