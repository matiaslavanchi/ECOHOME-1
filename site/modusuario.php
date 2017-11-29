<?php 
session_start();
require("../assets/connect_db.php");
$idusuario=$_SESSION["id"]; 
$query="select * from ecohome.usuarios where idusuario='$idusuario'";   
$result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error()); 
$row=mysqli_fetch_row($result);
?>

<form id="form-login" action="../assets/cambio.php" method="post">
                    <p style="font-size:20px"><label >Usuario:</label></p>
                        <input name="usuario" type="text" id="usuario" placeholder="Usuario" value=" <?php echo $row[3]; ?> "></p>
 
                    <p style="font-size:20px"><label>Clave:</label></p>
                        <input name="clave" type="password" id="clave" placeholder="Clave" value=" <?php echo $row[2]; ?> "></p>
          					<p style="font-size:20px"><label >Nombre:</label></p>
                                <input name="nombre" type="text" id="nombre" placeholder="Nombre" value=" <?php echo $row[1]; ?>"></p>
                            <p style="font-size:20px"><label >Apellido:</label></p>
                                <input name="apellido" type="text" id="apellido" placeholder="Apellido" value=" <?php echo $row[4]; ?>"></p>
        					<p style="font-size:20px"><label >Mail:</label></p>
                                <input name="mail" type="text" id="mail" placeholder="ejemplo@etc.com" value=" <?php echo $row[5]; ?>"></p>
                    <p id="bot"><input type="submit" id="submit" name="submit" value="Modificar" class="boton"></p>
            </form>	