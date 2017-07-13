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
	<link rel="stylesheet" type="text/css" href="css/fernandez_long.css">
	<link rel="stylesheet" href="css/responsive-chico.css" media="handheld, screen and (min-width:230px) and (max-width:768px)"/>  
	<link rel="stylesheet" href="css/responsive-medio.css" media="handheld, screen and (min-width:769px) and (max-width:1370px)"/> 
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	<script src="js/fernandezlong.js" type="text/javascript"></script>
	<script>
	$(document).ready(function() {
		$('.nav_active').click(function(e) {	
			$('.nav_active').removeClass('bold');
			$("."+this.className.split(/\s+/)[0]).addClass('bold');});
	});
	



	</script>    

    
			
</head>


<body><!-- 					INICIO 						-->
	<a name="home"> </a>
	<div class="fotofondo" ></div> <!-- esta es mi foto --> 
	<a name="home_responsive">
		<div class="fondo_inicio">
			<center><img src="img/logo-01.png" alt="logo" class="logo_chico" /><!-- este mi logo --></center>
			<div class="holder"> 
				<div class="frase">
					<span class="cita"> “El diseño es el embajador silencioso de una marca”</span>
					<span class="autor"> -Paul Rand</span>
				</div>
				<a href="#home_responsive"></a><nav class="nav_home">
				<ul>
					<li><a href="#portfolio" title="" class=" foc_port nav_izquierda nav_active">PORTFOLIO<hr class="portfolio"></a></li><li><a href="#quien_soy" class="foc_qs  nav_centro nav_active">QUIEN SOY<hr class="quien_soy"></a></li><li><a href="#servicios" title="" class="foc_s nav_centro nav_active">SERVICIOS<hr class="servicios2"></a></li><li><a href="#contacto" title="" class="foc_con nav_derecha nav_active">CONTACTO<hr class="contacto"></a></li>
				</ul>
			</nav>
		</div>
	</div>
</a>


<!-- 					FIN DE INICIO  				-->

<!--			HEAD 							-->
<?php
include('inc/nav_sitio.php');
?>
<!--			HEAD 							-->


<section class="contenido_portfolio portfolio">
	<a name="portfolio"></a>
	<div class="holder">
		<div class="portolfio_completo">
			
		
		<div class="adentro_portfolio">
			<ul id="filters">				
				<li class="circulo"><span href="#portfolio" class="filter active serv4" data-filter=".branding, .editorial, .otros">TODOS</span></li>
				<li class="circulo"><span href="#portfolio" class="filter serv1" data-filter=".branding"><a name="branding"></a>BRANDING</span></li>
				<li class="circulo"><span href="#portfolio" class="filter serv2" data-filter=".editorial">EDITORIAL</span></li>
				<li class="circulo"><span href="#portfolio" class="filter serv3" data-filter=".otros">OTROS</span></li>
			</ul>	
		</div>
		<div id ="portfoliolist">	
			<?php
			include('conectar.php');
			$sql = "SELECT t.idtrabajos,t.nombre,t.logo,c.nombrecat FROM `trabajos` AS t JOIN `categorias` AS c ON t.idcategoria=c.idcategoria";
			$result = $conexion->query($sql);

			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo '<a href="portfolio_extras.php?id='.$row['idtrabajos'].'">
					<div class="portfolio item '.strtolower($row['nombrecat']).'" data-cat="'.strtolower($row['nombrecat']).'" style="background:url('.$row['logo'].') no-repeat center blue;background-size:cover"> '
					."<h3>".utf8_encode($row['nombre']).' - Ver más</h3></div></a>';
					
				}
			} else{
				echo 'Ha habido un error, por favor vuelva a cargar la página.';
			}

			$conexion->close();
			?> 
		</div>
		</div>
	</div>
</section>

<!-- 																			QUIEN SOY 						--> 
<a name="quien_soy"></a>
<div class="holder quien_soy">
	<div class="contenido_qs">
		<div class="descripcionpropia">
			<!-- <div class="forma_textoqs" -->
			<h3 class="titulo_qs_chico">¡Hola!</h3>
			<h3 class="titulo_qs">Desde que recuerdo amo dibujar, expresarme por medio del arte gráfica. Muchas veces pinté paredes, hice collages e inventé historias.Así me convertí en una apasionada por el diseño, amante de la fotografía y del arte en general.</h3>

			<img src="img/quien_soy/quien_soy.png" alt="Quien soy" class="foto_qs">
			<p class="texto_qs">Soy estudiante de la <span class="bolditalic"> Licenciatura en Diseño y Comunicación Visual</span>, actualmente me encuentro realizando el Trabajo Integrador Final.
				Mis pilares son la <span class="bold">responsabilidad</span>, la<span class="bold"> simpleza</span>, la <span class="bold">funcionalidad </span>y la <span class="bold">diversión</span>. Una pieza bien diseñada debería llamar la atención y divertir, ¿no?
			</p>
			<div class="botones">
				<div class="botoncontactame">
					<a href="#contacto" title="" class="contactame">¡CONTACTAME!</a>
					<div class="fondocontactame">
						<div class="boton_circulo"></div>
					</div>	
				</div>
				<div class="botoncv">
					<a href="#" title="" class="cv">¿Querés ver mi CV?</a>
					<div class="fondo_botoncv">
						<div class="boton_circulo2"></div>
					</div>
				</div>
			</div>
		</div>
		<img src="img/quien_soy/cuerpocompleto-07.png" class="dibujoentero" alt="">	
	</div>
</div>

<a name="servicios"></a>
<div class="holder servicios">

	<section class="contenido_servicios">
		<div class="descripcion_servicios">
			<h1 class="servs">SERVICIOS</h1>
			<h2>Estos son algunos de los servicios que puedo ofrecerte, <span>¡pero hay más!</span> Siempre estaré dispuesta a realizar los trabajos que me requieras, para darles una mejor alternativa a los problemas de diseño. </h2>
		</div>
		<div class="trabajos"  data-aos="fade-up">
			<div class="trabajo ">
				<img src="img/servicios/branding.png" class="img_servicios">
				<h3>BRANDING</h3>
				<ul>
					<li>Diseño de marca</li>
					<li>Identidad corporativa</li>
					<li>Rediseños</li>
				</ul>
			</div>

			<div class="trabajo">
				<img src="img/servicios/editorial.png" alt=""class="img_servicios">
				<h3>GRÁFICA</h3>
				<ul>
					<li>Diseño de catálogos</li>
					<li>Posters</li>
					<li>Diseño editorial</li>
				</ul>
			</div>

			<div class="trabajo">
				<img src="img/servicios/digital.png" alt="" class="img_servicios">
				<h3>DIGITAL</h3>
				<ul>
					<li>Diseño web</li>
					<li>Responsive Design</li>
					<li>Integración con redes</li>
				</ul>

			</div>

			<div class="trabajo">
				<img src="img/servicios/com_visual.png" alt="" class="img_servicios">
				<h3>COMUNICACIÓN VISUAL</h3>
				<ul>
					<li>Diseño gráfico</li>
					<li>Ilustración</li>
					<li>Fotografía</li>
				</ul>
			</div>		
		</div>
			<div class="descripcion_servicios soft">
				<h1 class="servs">SOFTWARE</h1>
				<h2>¡Las herramientas! Te presento mis aptitudes con distintas tecnologías tanto de diseño gráfico, como de programación web y edición de video.</h2>
			</div>


			<div class="software">			
	<!-- 				<div class="programa">
						<div id="activeBorder" class="active-border">
							<div id="circle" class="circle">
								<span class="prec 320" id="prec">Ps</span>
							</div>
						</div>
						<span class="nombre_programa"> Photoshop</span>
					</div>
					<div class="programa">
						<div id="activeBorder" class="active-border">
							<div id="circle" class="circle">
								<span class="prec 340" id="prec">Ai</span>
							</div>
						</div>
						<span class="nombre_programa"> Illustrator</span>
					</div>
					<div class="programa">
						<div id="activeBorder" class="active-border">
							<div id="circle" class="circle">
								<span class="prec 270" id="prec">Id</span>
							</div>
						</div>
						<span class="nombre_programa"> InDesign</span>
					</div>
					<div class="programa">
						<div id="activeBorder" class="active-border">
							<div id="circle" class="circle">
								<span class="prec 100" id="prec">Pr</span>
							</div>
						</div>
						<span class="nombre_programa"> Premiere</span>
					</div>
					<div class="programa">
						<div id="activeBorder" class="active-border">
							<div id="circle" class="circle">
								<span class="prec 320" id="prec">Ae</span>
							</div>
						</div>
						<span class="nombre_programa">After Effects</span>
					</div>
					<div class="programa">
							<div id="activeBorder" class="active-border">
								<div id="circle" class="circle">
									<span class="prec 320" id="prec">Dw</span>
								</div>
							</div>
							<span class="nombre_programa">Dreamweaver</span>
						</div>
						<div class="programa">
							<div id="activeBorder" class="active-border">
								<div id="circle" class="circle">
									<span class="prec 320" id="prec">S</span>
								</div>
							</div>
							<span class="nombre_programa">Sublime</span>
						</div>
						<div class="programa">
							<div id="activeBorder" class="active-border">
								<div id="circle" class="circle">
									<span class="prec 320" id="prec">GH</span>
								</div>
							</div>
							<span class="nombre_programa">GitHub</span>
						</div>
						<div class="programa">
							<div id="activeBorder" class="active-border">
								<div id="circle" class="circle">
									<span class="prec 320" id="prec">Html</span>
								</div>
							</div>
							<span class="nombre_programa">HTML5</span>
						</div>
						<div class="programa">
							<div id="activeBorder" class="active-border">
								<div id="circle" class="circle">
									<span class="prec 320" id="prec">Css</span>
								</div>
							</div>
							<span class="nombre_programa">CSS3</span>
						</div>
						<div class="programa">		
							<div id="activeBorder" class="active-border">
								<div id="circle" class="circle">
									<span class="prec 320" id="prec">JS</span>
								</div>
							</div>
							<span class="nombre_programa">JavaScript</span>
						</div>
						<div class="programa">
							<div id="activeBorder" class="active-border">
								<div id="circle" class="circle">
									<span class="prec 320" id="prec">JQ</span>
								</div>
							</div>
							<span class="nombre_programa">JQuery</span>
						</div>
						<div class="programa">
							<div id="activeBorder" class="active-border">
								<div id="circle" class="circle">
									<span class="prec 320" id="prec">PHP</span>
								</div>
							</div>
							<span class="nombre_programa">PHP</span>
						</div>
						<div class="programa">
							<div id="activeBorder" class="active-border">
								<div id="circle" class="circle">
									<span class="prec 320" id="prec">MySQL</span>
								</div>
							</div>
							<span class="nombre_programa">MySQL</span>
						</div>
						<div class="programa">
							<div id="activeBorder" class="active-border">
								<div id="circle" class="circle">
									<span class="prec 320" id="prec">W</span>
								</div>
							</div>
							<span class="nombre_programa">WordPress</span>
						</div>
						<div class="programa">
							<div id="activeBorder" class="active-border">
								<div id="circle" class="circle">
									<span class="prec 320" id="prec">B</span>
								</div>
							</div>
							<span class="nombre_programa">Bootstrap</span>
						</div> -->
						<img src="img/software/Layout sitio-14.png" alt=""><img src="img/software/Layout sitio-21.png" alt=""><img src="img/software/Layout sitio-06.png" alt=""><img src="img/software/Layout sitio-15.png" alt=""><img src="img/software/Layout sitio-20.png" alt=""><img src="img/software/Layout sitio-08.png" alt=""><img src="img/software/Layout sitio-09.png" alt=""><img src="img/software/Layout sitio-07.png" alt=""><img src="img/software/Layout sitio-19.png" alt=""><img src="img/software/Layout sitio-16.png" alt=""><img src="img/software/Layout sitio-10.png" alt=""><img src="img/software/Layout sitio-11.png" alt=""><img src="img/software/Layout sitio-18.png" alt=""><img src="img/software/Layout sitio-17.png" alt=""><img src="img/software/Layout sitio-13.png" alt=""><img src="img/software/Layout sitio-12.png" alt=""> 
					</div>

			</section>

</div>
<section class="blanco">

</section>
<a name="contacto">
</a>
<div class="contenido_contacto">

	<center>
		<div class="formulario">
			<h2 id="contacto">Contacto</h2>
			<form action="form_procesador.php" method="post" name="formulario" id="section_formulario">
				<p>
					<label for="Nombre">Nombre y apellido: <br></label> 
					<input name="nombre" type="text" required class="campos">
				</p>
				<p>
					<label for="email">Mail:<br></label>
					<input name="email" type="email" required class="campos" id="email">
				</p>

				<p>
					<label for="Pais">País:<br></label>
					<select name="pais" class="campos" id="pais" placeholder="Elige un país">
						<option>Argentina</option>
						<option>Bolivia</option>
						<option>Chile</option>
						<option>Estados Unidos</option>
						<option>Peru</option>
						<option>Uruguay</option>
						<option>Otro país</option>
					</select>
				</p>
				<p>
					<label for="comentarios">Comentarios:<br></label></td>
					<textarea name="comentarios" id="comentarios" placeholder="Escribe tu comentario..."></textarea></td>
				</p>
				<input type="submit" value="Enviar" class="boton1" />
				<input type="submit" value="Restablecer" class="boton2" />

			</form>
		</div>
	</center>	
</div>


<footer>
	<span class="sp_foot">¿Queres otra forma para contactarme?</span><br>
	<div class="botones_footer">


		<a class="boton_footer"><img src="img/Layout sitio-25.png" alt="Mail"> luisina.fl@hotmail.com</a>
		<a href="https://www.behance.net/luisinafl" target="_blank" class="boton_footer"><img src="img/Layout sitio-24.png" alt="Behance"> /luisinafl</a>
		<a href="https://www.linkedin.com/in/luisinafl-disenadora/" class="boton_footer" target="_blank"><img src="img/Layout sitio-23.png" alt="LinkedIn"> /luisinafl-disenadora</a>
		<a href="https://github.com/luifernandezlong" class="boton_footer" target="_blank"><img src="img/Layout sitio-22.png" alt="GitHub"> /luifernandezlong</a>
	</div>
	<br>
	<span class="copyright">© Luisina Fernández Long 2017</span>
</footer>

<script src="AOS/aos.js"></script>
<script>

AOS.init();

</script>

</body>
</html>
