
<!DOCTYPE html>


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>EcoHome</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  	<div class="container">
    	<div class="card card-login mx-auto mt-5">
          <!--ENcabeado-->
      		<div class="card-header">Bienvenido</div>
      			<div class="card-body">
              <!-- MSJ de usuario creado-->
              <?php if (isset($_GET['succes'])){
              echo ('<div class="alert alert-success alert-dismissable">');
              echo ('<button type="button" class="close" data-dismiss="alert">&times;</button>');
              echo ('<strong>¡AVISO!</strong> Usuario Creado</div>');} ?>
              <!-- Formulario de ingreso-->
        			<form action="assets/login.php" method="post">
                <!-- Campo usuario-->
          				<div class="form-group">
            				<label>Usuario</label>
				            <input class="form-control" name="usuario" type="text" id="usuario" placeholder="Ingrese Usuario">
				        </div>
                <!-- Campo de password-->
				        <div class="form-group">
				            <label>Clave</label>
				            <input class="form-control" name="contrasenia" type="password" id="clave" placeholder="Ingrese Clave">
				        </div>
                <!-- MSJ de error-->
				        <?php if (isset($_GET['error'])){
											   echo ('<div class="alert alert-danger alert-dismissable">');
				  							 echo ('<strong>¡ERROR!</strong> Usuario/Contraseña incorrecto. </div>');}?>
                         <!--Boton de ingreso-->
				        <input class="btn btn-primary btn-block" type="submit" id="submit" name="submit" value="Ingresar">
					     <div class="text-center">
                <!--Boton de registrarse-->
			        	<a class="d-block small mt-3" href='site/registro.php'>Registrarse</a>
                <!-- Boton de fotget-->
				   		 <a class="d-block small" href="#">Olvido su clave??</a>
					</div>
				</div>
			
		</div>
	</div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/popper/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>

