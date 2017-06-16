<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<link rel="icon" type="image/png" href="img/favicon-03.png"/>
	<title>Luisina Fernández Long</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="AOS/aos.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/layout.css">
	<link rel="stylesheet" type="text/css" href="css/fernandez_long.css">
	<link rel="stylesheet" href="css/responsive-chico.css" media="handheld, screen and (min-width:230px) and (max-width:768px)"/>  
	<link rel="stylesheet" href="css/responsive-medio.css" media="handheld, screen and (min-width:769px) and (max-width:1370px)"/> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	<script src="js/fernandezlong.js" type="text/javascript"></script>	
</head>
<body class="contacto">
		<a name="contacto">
	</a>
		<div class="contenido_contacto contacto">
		<?php

			include('conectar.php');

			
			
			$nombre=$_POST['nombre'];
			$email=$_POST['email'];
			$pais=$_POST['pais'];
			$comentarios=$_POST['comentarios'];

			$resultado=mysqli_query($conexion, "INSERT INTO fernandez_long VALUES (NULL, '$nombre',
				'$email', '$pais', '$comentarios')");


			$remitente="From: $nombre <$email>";
			$destino='luisina.fl@hotmail.com';
			$asunto=$nombre . ' envio una consulta a traves de la web';
			$contenido ="Nombre: " . $nombre ."\r\n";
			$contenido.="Mail: " . $email . "\r\n";
			$contenido.="Pais: " . $pais . "\r\n";
			$contenido.="Mensaje: " . $comentarios;


			$remitente_usuario="From:sitio web <www.luisinafernandezlong.com>";
			$asunto_remitente='Recibimos tu consulta';
			$contenido_usuario = $nombre . ' Enviaste el siguiente mensaje '.$comentarios . "\r\n";
			$contenido_usuario.= 'A la brevedad responderé tu mensaje';

			mail($destino,$asunto,$contenido,$remitente);
			mail($email, $asunto_remitente, $contenido_usuario, $remitente_usuario);

			header('location:index.php?envio=ok#contacto');

			echo 'Tu mensaje se ha enviado correctamente'


			?>
	<footer>
		<span class="sp_foot">¿Queres otra forma para contactarme?</span><br>
		<div class="botones_footer">
			
			
			<a class="boton_footer icon-celular">(+54) 15 2645- 5369</a>
			<a href="https://www.behance.net/luisinafl" target="_blank" class="boton_footer icon-behance">/luisinafl</a>
			<a href="https://www.linkedin.com/in/luisinafl-disenadora/" class="boton_footer icon-linkedin" target="_blank">/luisinafl-disenadora</a>
			<a href="https://github.com/luifernandezlong" class="boton_footer icon-github" target="_blank">/luifernandezlong</a>
		</div>
		<br>
		<span class="copyright">© Luisina Fernández Long 2017</span>
	</footer>




</body>
</html>