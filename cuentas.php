<!--Inicio de sesion-->
<?php session_start();
//Si no esta logueado, lo vuelve al index
if (empty($_SESSION["id"]))
  header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">

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
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">EcoHome</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index2.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Inicio</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="cuentas.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Cuentas</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Movimientos</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="ingresos.php">Ingresos</a>
            </li>
            <li>
              <a href="egresos.php">Egresos</a>
            </li>
            <li>
              <a href="movimientos.php">Todos</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Grupo Familiar</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Estadisticas</span>
          </a>
        </li>
        
      </ul>
      <!--************************************************************************************Nav Arriba*******************-->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link">Bienvenido a EcoHome <?php echo ($_SESSION["nombre"]." ".$_SESSION["apellido"]); ?>!</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link " href="##">
            <i class="fa fa-fw fa-user"></i>
          </a>
        </li>
        
        
        <li class="nav-item">
          <a class="nav-link" href="assets/salir.php">
            <i class="fa fa-fw fa-sign-out"></i>Salir!</a>
        </li>
      </ul>
    </div>
  </nav>
  <!--****************************************************************************************Contenedor************-->
  <div class="content-wrapper">
    <div class="container-fluid ">
      <!--*************************-->
        <!-- Example DataTables Card-->
      <div class="card mb-3 ">
        <!--Encabezado-->
        <div class="card-header bg-success">
           Cuentas</div>
        <div class="card-body">
          <!--coneccion BD -->
          <?php require("assets/connect_db.php");
                //Consulta a BD
                $query='SELECT * FROM ecohome.cuentas where idusuario='.$_SESSION["id"].';';  
                $result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysqli_error()); 
                echo ("<lu>");

                //Recorrido de los elemontos obtenidos
                while ($row=mysqli_fetch_object($result)){
                    
                        //Listado de los elementos
                        echo("<li><a href='movimientos.php?id=$row->idcuenta'>$row->nombre</a>
                          $row->saldo<pre>
                            </li>");
                        //<a href='assets/borrarCuenta.php?id=$row->idcuenta'>Borrar</a>


                }         
                 echo ("</lu>");?>
                <!-- Boton de crear-->
                 <a href='crearCuenta.php'>Crear cuenta</a>





        </div>
      </div>
      <!--*************************-->
      </div>
    </div>
  </div>
  Desarrollado por

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
</body>

</html>
