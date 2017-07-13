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
		$id=$_GET['id'];
	?>

	<div class="extras_adentro">
		<div class="cycle-slideshow extras_fotos" data-cycle-fx="scrollHorz" data-cycle-timeout="2000">
		
			<?php
				include('conectar.php');
				$sql="SELECT i.imagen FROM `trabajos` AS t JOIN `imagenes` AS i ON t.idtrabajos = i.idtrabajos WHERE t.idtrabajos =".$conexion->real_escape_string($id);
				$result = $conexion->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
					 	echo '<img src="'.$row['imagen'].'" class="foto_extras">';
				 	}
				}
			 	$conexion->close();				
			?> 
		</div>
		<div class="extras_palabras">
			<?php
				include('conectar.php');
				$sql = "SELECT t.nombre, t.descripcion, t.tags, c.nombrecat FROM `trabajos` AS t JOIN `categorias` AS c ON t.idcategoria = c.idcategoria WHERE t.idtrabajos =".$id;
				$result = $conexion->query($sql);
				if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()) {
				    	 echo '<p class="nombre_extras">'.utf8_encode($row['nombre']).'</p>
				    	<p class="descripcion_extras">'.utf8_encode($row['descripcion']).'</p>
						<h3 class="tipo_extras">CATEGORÍA</h3>
							<p class="otros_extras">'.utf8_encode($row['nombrecat']).'</p>
						<h3 class="tipo_extras">TAGS</h3>
							<p class="tags_extras">'.utf8_encode($row['tags']).'</p>
							';
				
				    }
				} else{
					echo 'Ha ocurrido un error, por favor recargue el sitio.';
				}
			 	$conexion->close();

			?>
		</div>

		


			<a class="volver" href="index.php #portfolio">← Volver al portfolio</a>

	</div>
	




	<script>
	var images = [
	    '<img src="http://malsup.github.io/images/p2.jpg">',
	    '<img src="http://malsup.github.io/images/p3.jpg">',
	    '<img src="http://malsup.github.io/images/p4.jpg">'
	];

	$('button').one('click', function() {
	    for (var i=0; i < images.length; i++) {
	        $('.cycle-slideshow').cycle('add', images[i]);
	    }
	    $(this).prop('disabled', true)
	})
	</script>
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/jquery.cycle2.js" type="text/javascript"></script>
</body>
</html>