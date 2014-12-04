<html style="min-height: 1519px;">
<head>
	<meta charset="UTF-8">
	<title>GDF | Panel de control</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link href="<?php echo base_url();?>statics/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>statics/css/ionicons.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>statics/css/AdminLTE.css" rel="stylesheet" type="text/css">
		<!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
	<style type="text/css">
		.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}
	</style>
</head>
<body class="skin-blue wysihtml5-supported  pace-done" style="min-height: 1519px;"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
 
<header class="header">
	<a href="index.html" class="logo">
	 <img src="<?php echo base_url();?>statics/img/logo.png" width="40"/>
	</a>
	<nav class="navbar navbar-static-top" role="navigation">
		<a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
		<span class="sr-only">Navegador</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</a>
		<div class="navbar-right">
			<ul class="nav navbar-nav">
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="ion-person"></i>
						<span>Juan López <i class="caret"></i></span>
					</a>
					<ul class="dropdown-menu">
				 
						<li class="user-header bg-light-blue">
							<img src="<?php echo base_url();?>statics/img/avatar5.png" class="img-circle" alt="User Image">
							<p>
								Juan López - Director Ejecutivo
							</p>
						</li>
						<li class="user-footer">
							<div class="pull-left">
								<a href="#" class="btn btn-default btn-flat">Perfil</a>
							</div>
							<div class="pull-right">
								<a href="#" class="btn btn-default btn-flat">Cerrar sesión</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left" style="min-height: 749px;">
 
<aside class="left-side sidebar-offcanvas" style="min-height: 1519px;">
 
	<section class="sidebar">
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Buscar...">
				<span class="input-group-btn">
					<button type="submit" name="seach" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</form>
		<ul class="sidebar-menu">
			<li class="active">
				<a href="index.php">
					<i class="fa fa-dashboard"></i> <span>Panel de control</span>
				</a>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-bar-chart-o"></i>
					<span>Reportes</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> RegistroCDMX</a></li>
					<li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> MonitoreoCDMX</a></li>
					<li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> SSAC</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
				<i class="fa fa-envelope"></i> <span>Mensajes</span>
				<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
				<li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Bandeja Entrada</a></li>
				<li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Bandeja Salida</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#">
					<i class="fa fa-table"></i> <span>Tablas</span>
					<i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> RegistroCDMX</a></li>
					<li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> MonitoreoCDMX</a></li>
					<li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> SSAC</a></li>
				</ul>
			</li>
			<li>
				<a href="pages/calendar.html">
					<i class="fa fa-calendar"></i> <span>Calendario</span>
					<small class="badge pull-right bg-red">3</small>
				</a>
			</li>
		</ul>
	</section>
</aside>
 
<aside class="right-side">
	<section class="content-header">
		<h1>
			Panel de Control
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
			<li class="active">Panel de Control</li>
		</ol>
	</section>
	 
	<section class="content">
		<div class="row">
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3>
							44
						</h3>
						<p>
							Trámites y servicios publicados
						</p>
					</div>
					<div class="icon">
						<i class="ion ion-clipboard"></i>
					</div>
					<a href="#" class="small-box-footer">
						Más información <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div> 
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3>
						1000
						</h3>
						<p>
						Solicitudes diarias. VUC
						</p>
					</div>
					<div class="icon">
						<i class="ion ion-ios7-people"></i>
					</div>
					<a href="#" class="small-box-footer">
						Más información <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div> 
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-green">
					<div class="inner">
						<h3>
						10<sup style="font-size: 20px">%</sup>
						</h3>
						<p>
						Avance de indicadores PGDDF.
						</p>
					</div>
					<div class="icon">
						<i class="ion ion-pie-graph"></i>
					</div>
					<a href="#" class="small-box-footer">
						Más información <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div> 
			
			<div class="col-lg-3 col-xs-6">			 
				<div class="small-box bg-red">
					<div class="inner">
						<h3>
						5005
						</h3>
						<p>
						Personal de estructura en el GDF.
						</p>
					</div>
					<div class="icon">
						<i class="ion ion-stats-bars"></i>
					</div>
					<a href="#" class="small-box-footer">
						Más información <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div> 
		</div> 
		 
		<div class="row">
			<section class="col-lg-7 connectedSortable ui-sortable">
				<div class="nav-tabs-custom" style="cursor: move;">
					<ul class="nav nav-tabs pull-right ui-sortable-handle">
						<li class=""><a href="#ssac" data-toggle="tab">Atención Ciudadana</a></li>
						<li class=""><a href="#manuales" data-toggle="tab">Manuales y procedimientos</a></li>
						<li class=""><a href="#monitoreo" data-toggle="tab">Monitoreo</a></li>
						<li class="active"><a href="#tramites" data-toggle="tab">Trámites</a></li>						
						<li class="pull-left header"><i class="fa ion-android-arrow-up-right"></i>Avance</li>
					</ul>
					<div class="tab-content no-padding">					 
						<div class="chart tab-pane active" id="monitoreo" style="position: relative; height: 300px;">
						</div>
						<div class="chart tab-pane" id="tramites" style="position: relative; height: 300px;">
						</div>
						<div class="chart tab-pane" id="ssac" style="position: relative; height: 300px;">
						</div>
						<div class="chart tab-pane" id="manuales" style="position: relative; height: 300px;">
						</div>
					</div>
				</div> 				
			</section> 
			 
			<section class="col-lg-5 connectedSortable ui-sortable">
			 
				<div class="box box-solid bg-light-blue-gradient">
					<div class="box-header ui-sortable-handle" style="cursor: move;">
						<div class="pull-right box-tools">
							<button class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
						</div> 
						<i class="fa fa-map-marker"></i>
						<h3 class="box-title">
						Visitors
						</h3>
					</div>
					<div class="box-body">
					
					</div> 
					<div class="box-footer no-border">
						
					</div>
				</div>
				<div class="box box-solid bg-teal-gradient">
					<div class="box-header ui-sortable-handle" style="cursor: move;">
						<i class="fa fa-th"></i>
						<h3 class="box-title">Sales Graph</h3>
						<div class="box-tools pull-right">
							<button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body border-radius-none">
					
					</div> 
				</div> 
				<div class="box box-solid bg-green-gradient">
					<div class="box-header ui-sortable-handle" style="cursor: move;">
						<i class="fa fa-calendar"></i>
						<h3 class="box-title">Calendario</h3>						 
						<div class="pull-right box-tools">
							<div class="btn-group">
							<button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="#">Agregar evento</a></li>
								<li><a href="#">Limpiar eventos</a></li>
								<li class="divider"></li>
								<li><a href="#">Ver calendario</a></li>
							</ul>
							</div>
							<button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
						</div> 
					</div> 
					<div class="box-body no-padding">
					 
					</div> 
					<div class="box-footer text-black">
					
					</div>
				</div> 
			</section> 
		</div> 
	</section> 
</aside> 
</div> 
 
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>statics/js/AdminLTE/app.js" type="text/javascript"></script>
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>
 
<script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
 
<script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
<script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
 
<script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
 
<script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
 
<script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
 
<script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
 
<script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
 

 
<script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>
 
<script src="js/AdminLTE/demo.js" type="text/javascript"></script>-->

</body>
</html>