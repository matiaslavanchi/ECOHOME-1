
<html>

<head>
<meta charset="utf-8">
	<title> Registro  </title>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
</head>
<body>
  <!-- Fromulario-->
	<form id="form-login" action="assets/nuevo.php" method="post">
                      <!-- Campo de Usuario-->
                    <p style="font-size:20px"><label >Usuario:</label></p>
                        <input name="usuario" type="text" id="usuario" placeholder="Usuario"></p>
                      <!-- Campo de password-->
                    <p style="font-size:20px"><label>Clave:</label></p>
                        <input name="contrasenia" type="password" id="clave" placeholder="Clave"></p>
                        <!-- cAMPO DE NOMBRE-->
  					         <p style="font-size:20px"><label >Nombre:</label></p>
                        <input name="nombre" type="text" id="nombre" placeholder="Nombre"></p>
                        <!-- Campo de aplellido-->
                    <p style="font-size:20px"><label >Apellido:</label></p>
                        <input name="apellido" type="text" id="Apellido" placeholder="Apellido"></p>
                        <!-- Camo de mail-->
					           <p style="font-size:20px"><label >Mail:</label></p>
                        <input name="mail" type="text" id="mail" placeholder="ejemplo@etc.com"></p>
                        <!-- Boton de ingreso-->
                    <p id="bot"><input type="submit" id="submit" name="submit" value="Registrarme" class="boton"></p>
            </form>	
</body>
</html>