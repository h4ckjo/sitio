<!DOCTYPE html>
<html lang="es">
<head>
	<title><?php echo $tituloPagina; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
	<meta name="description" content="Los Mejores Productos de la Web"/>
	<meta name="keywords" content="tienda, online, Burgos, burgos, España"/>
	<!--links del favico-->
	<link rel="apple-touch-icon" sizes="57x57" href="../img/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../img/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../img/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../img/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../img/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../img/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../img/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../img/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../img/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="../img/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
	<link rel="manifest" href="../img/manifest.json">
	<!--link de los estilos y de bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/estilo.css">
	<!--script de bootstrap y de jquery-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="productosABC.php" class="navbar-brand">Administrador Mi Sitio</a>
			</div>
			<div class="collapse navbar-collapse" id="menu">
				<ul class="nav navbar-nav">
					<li <?php if ($pagina=="Futbol") {echo "class='active'";} ?>><a href="futbolABC.php">Fútbol</a></li>
					<li <?php if ($pagina=="Baloncesto") {echo "class='active'";} ?>><a href="baloncestoABC.php">Baloncesto</a></li>
					<li <?php if ($pagina=="Ciclismo") {echo "class='active'";} ?>><a href="ciclismoABC.php">Ciclismo</a></li>
					<li <?php if ($pagina=="Surf") {echo "class='active'";} ?>><a href="surfABC.php">Surf</a></li>
					<li <?php if ($pagina=="Running") {echo "class='active'";} ?>><a href="runningABC.php">Running</a></li>
					<li <?php if ($pagina=="Outdoor") {echo "class='active'";} ?>><a href="outdoorABC.php">Outdoor</a></li>
					<li <?php if ($pagina=="Tenis") {echo "class='active'";} ?>><a href="tenisABC.php">Tenis</a></li>
					<li <?php if ($pagina=="Outlet") {echo "class='active'";} ?>><a href="outletABC.php">Outlet</a></li>
					<li <?php if ($pagina=="Usuarios") {echo "class='active'";} ?>><a href="usuariosABC.php">Usuarios</a></li>
					<li <?php if ($pagina=="Pedidos") {echo "class='active'";} ?>><a href="pedidosABC.php">Pedidos</a></li>
					<li <?php if ($pagina=="Históricos") {echo "class='active'";} ?>><a href="historicosABC.php">Históricos</a></li>
					<li <?php if ($pagina=="Cambiar Clave") {echo "class='active'";} ?>><a href="cambiarclave.php">Cambiar Clave</a></li>
					
					
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php require "php/navbar.php"; ?>
				</ul>
			</div>
		</div>
	</nav>