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
	<link rel="stylesheet" href="css/responsive-chico.css" media="handheld, screen and (min-width:230px) and (max-width:768px)"/>  
	<link rel="stylesheet" href="css/responsive-medio.css" media="handheld, screen and (min-width:769px) and (max-width:1360px)"/> 
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
		$foto2=$_GET['foto2'];
		$foto3=$_GET['foto3'];
		$foto4=$_GET['foto4'];
		$tags=$_GET['tags'];
			
	?>

	<div class="extras_adentro">
		<img class="foto_extras" src="<?php echo $foto; ?>">
		<img class="foto_extras" src="<?php echo $foto2; ?>">
		<img class="foto_extras" src="<?php echo $foto3; ?>">
		<img class="foto_extras" src="<?php echo $foto4; ?>">
		<div class="extras_palabras">
			<p class="nombre_extras"><?php echo $nombre; ?></p>
			<p class="descripcion_extras"><?php echo $descripcion; ?></p>
			<h3 class="tipo_extras">CATEGORÍA</h3>
				<p class="otros_extras"><?php echo $tipo; ?></p>
			<h3 class="tipo_extras">TAGS</h3>
				<p class="tags_extras"><?php echo $tags; ?></p>
		</div>
		
		<a href="index.php #portfolio" class="volver">← Volver al portfolio</a>
	</div>
	
</body>
</html>