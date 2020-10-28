<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Encargado del mercado</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/static/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css"  href="{{ asset('/static/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css"  href="{{ asset('/static/css/datepicker3.css') }}">
	<link rel="stylesheet" type="text/css"  href="{{ asset('/static/css/styles.css') }}">
	@yield('stilos')
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	@yield('scripts')
	<style>
    .boton_personalizado-enviar{
        margin-top: 25px;
  text-decoration: none;

  font-weight: 200;
  font-size: 18px;
  color: #212121;
  background-color: #b3e5fc;
  border-radius: 6px;
  border: 2px solid #4fc3f7;
  width:100px;
}
.boton_personalizado-enviar:hover{
  color: #1883ba;
  background-color: #e1f5fe;
}

.titulos{
    font-weight: 600;
}
</style>
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>MERCADO ITTG </span></a>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">fulanito de tal</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>

		<form action="buscar" method="POST">
			@csrf
				<input type="text" name="cadena" class="form-control" placeholder="Buscar....">
			
			<input type="submit" value="enviar">
		</form>

		<ul class="nav menu">
			@yield('menu')
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				@yield('breadcumb')
			</ol>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			@yield('content')
		</div>
		
 	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	@yield('scripts2')
</body>
</html>