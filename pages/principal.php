<?php 
@session_start();  
if($_SESSION["autentica"] != "OK")
{ 
  header("Location: ../program/login.php"); 
  exit(); 
} 
include "../program/funciones.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="../images/Modulo jurídico Icono.png"/>

    <title>Mobile</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
	 <!-- ESTILO PERSONAL -->
    <link href="../css/estilo.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header" style="padding: 5px;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span><a href="principal.php" style="padding-left: 50px; font-size:24px"> Mobile </a></span>
                
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
				<li>
					<?php
						echo "Bienvenido(a) <span>".$_SESSION["username"]."</span>";	
					?>
               </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuración</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../program/cerrar.php"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                         <li>
                            <a href="principal.php"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                        </li>
                        <li>
                            <a href="inventario.php"><i class="fa fa-refresh fa-spin fa-fw"></i> Inventario</a>
                        </li>
                        <li>
                            <a href="ventas.php"><i class="fa fa-table fa-fw"></i> Ventas</a>
                        </li>
                        <li>
                            <a href="usuarios.php"><i class="fa fa-group fa-fw"></i> Usuarios</a>
                        </li>
                          <li>
                            <a href="empleados.php"><i class="fa fa-edit fa-fw"></i> Empleados</a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Inicio</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
              <div class="row">
               
                <div class="col-lg-6 col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-body">
                            <div>
                            	Hola, Bienvenido al Módulo Mobile
                            </div> <br>
                            <div>
                            	En este aplicativo el usuario tendrá la posibilidad de hacer inventario, ingresos y salidas de dispositivos mobiles en la tienda determinada.
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!--- <div class="col-lg-6 col-md-12">
					<img src="../images/Módulo jurídico_horizontal.png" width="50%" alt="" class="text-right">
                </div> -->
            </div>
            <hr>
            <div class="nav-divider">Accesos Rápidos</div>
            <hr>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-history fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php count_inventario(); ?></div>
                                    <div>Inventario</div>
                                </div>
                            </div>
                        </div>
                        <a href="inventario.php">
                            <div class="panel-footer">
                                <span class="pull-left">Ver detalles</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-university fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php count_ventas(); ?></div>
                                    <div>Ventas</div>
                                </div>
                            </div>
                        </div>
                        <a href="ventas.php">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Detalles</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php count_usuarios(); ?></div>
                                    <div>Usuarios</div>
                                </div>
                            </div>
                        </div>
                        <a href="usuarios.php">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Detalles</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php count_empleados(); ?></div>
                                    <div>Empleados</div>
                                </div>
                            </div>
                        </div>
                        <a href="empleados.php">
                            <div class="panel-footer">
                                <span class="pull-left">Ver Detalles</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- juan -->

<!-- Grafica por años -->
            <div class="row">
                  <div class="card mb-3">
                        <div class="card-header">
                          <i class="fa fa-area-chart"></i><h2>Ventas anuales de la tienda</h2>
                                    <div class="form-group">
                                            <label>Seleccione año:</label>
                                            <select name="consulta_a" id="consulta_a" class="form-control">
                                                <!-- Se llena por ajax desde ../Json/procesar.php -->
                                            </select>
                                        </div>
                          </div>
                        <div class="card-body">
                          <canvas id="ventasanuales" width="100%" height="30"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
<!-- Grafica por años -->

<!-- Grafica por meses -->
            <div class="row">
                  <div class="card mb-3">
                        <div class="card-header">
                          <i class="fa fa-area-chart"></i><h2>Ventas Mensuales de la tienda</h2>
                                    <div class="form-group">
                                            <label>Seleccione mes:</label>
                                            <select name="consulta_m" id="consulta_m" class="form-control">
                                                <!-- Se llena por ajax desde ../Json/procesar.php -->
                                            </select>
                                        </div>
                          </div>
                        <div class="card-body">
                          <canvas id="ventasmensuales" width="100%" height="30"></canvas>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
<!-- Grafica por meses -->


        <div class="row">
                        <div class="col-lg-12">
                                  <div class="card mb-12">
                                <div class="card-header">
                                  <i class="fa fa-bar-chart"></i><h2>Celular mas vendido por ciudad</h2></div>
                                <div class="card-body">
                                  <div class="row">

                                      <canvas id="myBarChart" width="100" height="50"></canvas>

                                  </div>
                                </div>
                                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                              </div>
                    </div>
----
                    <div class="col-lg-6">
                                  <div class="card mb-3">
                                <div class="card-header">
                                  <i class="fa fa-pie-chart"></i><h2>Celular mas vendido en Colombia TOP 10 </h2></div>
                                <div class="card-body">
                                  <canvas id="myPieChart" width="100%" height="100"></canvas>
                                </div>
                                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                              </div>
                    </div>
        </div>

            <!-- juan -->



        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery-3.1.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../js/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../js/raphael-min.js"></script>
    <script src="../js/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/sb-admin-2.js"></script>

    <!-- Custom scripts for this page-->
    
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../js/sb-admin-charts.js"></script>

</body>

</html>