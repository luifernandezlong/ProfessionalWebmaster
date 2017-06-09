<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<link rel="icon" type="image/png" href="img/favicon-03.png"/>
	<title>Luisina Fernández Long</title>
	<link rel="stylesheet" type="text/css" href="css/fernandez_long.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/portfolio_extras.css">
</head>
<body class="portfolio_extras">
	<?php
		include('inc/nav_sitio.php');
	?>
	<?php

		$nombre=$_GET['nombre'];
		$tipo=$_GET['tipo'];
		$descripcion=$_GET['descripcion'];	
		$foto=$_GET['foto'];

	
	?>

	<div class="extras_adentro">

		<p class="nombre_extras"><?php echo $nombre; ?></p>
		<h3 class="tipo_extras"><?php echo $tipo; ?></h3>
		<img src="<?php echo $foto; ?>">
	</div>
	
</body>
</html>