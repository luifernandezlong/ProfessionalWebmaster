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
	<script>
		$(document).ready(function() {
		$('.nav_active').click(function(e) {	
			$('.nav_active').removeClass('bold');
				$("."+this.className.split(/\s+/)[0]).addClass('bold');});
	});


	// 	function(){
	// 		$('.filter').click(function(e){
	// 			$('.filter').removeClass('item');
	// 		$("."+this.className.split(/\s+/)[0]).addClass('itemgrande');
	
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
			<div class="adentro_portfolio">
				<ul id="filters">

					<li class="circulo"><span href="#portfolio" class="filter active serv4" data-filter=".branding, .editorial, .webotros">TODOS</span></li>
					<li class="circulo"><span href="#portfolio" class="filter serv1" data-filter=".branding"><a name="branding"></a>BRANDING</span></li>
					<li class="circulo"><span href="#portfolio" class="filter serv2" data-filter=".editorial">EDITORIAL</span></li>
					<li class="circulo"><span href="#portfolio" class="filter serv3" data-filter=".webotros">WEB Y OTROS</span></li>
				</ul>	
			</div>
						
			<div id ="portfoliolist">		  
				<a href="portfolio_extras.php?nombre=Lactum&tipo=Identidad corporativa&tags=Branding, logos, identidad, papelería.&descripcion=El diseño fue realizado para Lactum, una empresa ficticia de productos lácteos. Comenzando por el logotipo basado en la simplificación del concepto de ubre como productor de lácteos, hasta llegar al punto donde se comprendiera el chiste tipográfico y el concepto en el mismo momento. Luego se prosiguió con la identidad corporativa, formada por una carpeta de tipo tríptico y papelería interna y externa.&foto=img/portfolio/lactum/lactum1.png&foto2=img/portfolio/lactum/lactum2.png&foto3=img/portfolio/lactum/lactum3.png&foto4=">    
				    <div class="portfolio item branding lact" data-cat="branding">
				    	<h3>Lactum - Ver más</h3>
				    </div>
				</a>
			    <a href="portfolio_extras.php?nombre=Camino de los Jesuitas&tipo=Branding y diseño editoriales&tags=Branding, marcas, identidad, piezas promocionales, producción analógica, videos.&descripcion=Camino de los Jesuitas tiene como función brindar un recorrido turístico de tipo histórico a personas que deseen conocer la historia de la comunidad jesuítica en el sector que abarca el sur de Paraguay, la provincia de Misiones en Argentina, y una pequeña zona de Brasil. Los principales conceptos de la marca fueron la cruz y los caminos, que se muestran con el estiramiento exagerado de los caracteres, y el desgaste en el cual se encuentran las distintas Ruinas. Luego se pasó a diseñar un panel informativo y un afiche promocional de 50x70cm,  una guía informativa junto con un sistema de 3 postales y un video promocional de corta duración . &foto=img/portfolio/camino/camino1.png&foto2=img/portfolio/camino/camino2.png&foto3=img/portfolio/camino/camino3.png&foto4=img/portfolio/camino/camino4.png" title="">
				    <div class="portfolio  item branding camino"  data-cat="branding">
				    	<h3>Camino de los...</h3>
				    </div>
				</a>
			    <a href="portfolio_extras.php?nombre=Camino de los Jesuitas&tipo=Branding y diseño editoriales&tags=Branding, logos, identidad, diseño editorial, diseño de diario.&descripcion=Se realizó el diseño integral de un periódico de la capital cordobesa, tomando como concepto un ícono de la ciudad que es el encauzamiento entre dos cuerpos de agua de la zona, que en la cultura popular es llamado Cañada.&foto=&foto2=&foto3=&foto4=">
				    <div class="portfolio item  branding canada"  data-cat="branding">
				 	    	<h3>Cañada - Ver más</h3>
				    </div>
				</a>
			    <a href="portfolio_extras.php?nombre=Zenitram&tipo=Branding y piezas gráficas&tags=Branding, logos, identidad, piezas promocionales, producción analógica.&descripcion=Realizado en ambiente universitario, este trabajo partió de la película homónima, de la cual se tomaron los conceptos de choque, luces, devastación y efectos alucinógenos provocados por la ingesta de estupefacientes para crear una marca que contara resumidamente la historia del film. Se realizaron 3 paneles cuadrados que nacieron de distintas escenas claves, un afiche cinematográfico de gran escala,  un libro informativo y un video con los títulos de la pieza hecho con stop motion .&foto=&foto2=&foto3=&foto4=" title="">
				    <div class="portfolio item  branding item4 zenitram"  data-cat="branding">
				 	      <h3>Zenitram - Ver más</h3>
				    </div>
				</a>
			     <a href="portfolio_extras.php?nombre=Cañada&tipo=Diseño editorial&tags=Branding, logos, identidad, diseño editorial, diseño de diario.&descripcion=Se realizó el diseño integral de un periódico de la capital cordobesa, tomando como concepto un ícono de la ciudad que es el encauzamiento entre dos cuerpos de agua de la zona, que en la cultura popular es llamado Cañada.&foto=&foto2=&foto3=&foto4=" title="">
				    <div class="portfolio item  editorial canada"  data-cat="editorial">
				 	      <h3>Cañada - Ver más</h3>
				    </div>
				</a>
			    <a href="portfolio_extras.php?nombre=Polina Ivanova&tipo=Diseño editorial&tags=Diseño editorial, diseño de libro, producción analógica, edición fotográfica.&descripcion=Este libro, realizado sin fines comerciales, se basó en los dibujos de la artista Polina Ivanova, en los cuales suelen verse patrones y figuras humanas realizadas con distintas técnicas, muchas veces fusionadas de diversas maneras. La pieza fue realizada tanto de manera manual en caso de algunos dibujos, como con edición de los trabajos originales y la utilización de herramientas de diseño editorial como Adobe Indesign.&foto=&foto2=&foto3=&foto4=" title="">
				    <div class="portfolio item  editorial polina"  data-cat="editorial">
				 	      <h3>Polina Ivanova</h3>
				    </div>
				</a>
			    <a href="portfolio_extras.php?nombre=Grito!&tipo=Branding y Diseño editorial&tags=Branding, logos, diseño editorial, diseño de revista, producción analógica.&descripcion=El proyecto universitario consistió en el diseño en pareja del nombre, marca y estructura de una revista con la temática de arte urbano.&foto=&foto2=&foto3=&foto4=" title="">
					<div class="portfolio item  editorial grito" data-cat="editorial">
				     		<h3>Grito! - Ver más</h3>
				    </div>
				</a>
			    <a href="portfolio_extras.php?nombre=Camino de los Jesuitas&tipo=Branding y diseño editoriales&tags=Branding, marcas, identidad, piezas promocionales, producción analógica, videos.&descripcion=Camino de los Jesuitas tiene como función brindar un recorrido turístico de tipo histórico a personas que deseen conocer la historia de la comunidad jesuítica en el sector que abarca el sur de Paraguay, la provincia de Misiones en Argentina, y una pequeña zona de Brasil. Los principales conceptos de la marca fueron la cruz y los caminos, que se muestran con el estiramiento exagerado de los caracteres, y el desgaste en el cual se encuentran las distintas Ruinas. Luego se pasó a diseñar un panel informativo y un afiche promocional de 50x70cm,  una guía informativa junto con un sistema de 3 postales y un video promocional de corta duración .&foto=img/portfolio/camino/camino1.png&foto2=img/portfolio/camino/camino2.png&foto3=img/portfolio/camino/camino3.png&foto4=img/portfolio/camino/camino4.png" title="">
			    	<div class="portfolio item  editorial item4 camino" data-cat="editorial">
			       		<h3>Camino de los...</h3>
				    </div>
			    </a>
			    <a href="portfolio_extras.php?nombre=Televisión Pública&tipo=Branding e identidad corporativa&tags=Branding, logos, identidad, papelería, piezas varias, videos.&descripcion=Este trabajo universitario tuvo como principales conceptos la emisión generada por una señal televisiva y lo público. Se creó toda una identidad formada por distintas piezas de papelería, gráfica vehicular, el dise{o de una página web y una aplicación móvil, y un corto video temático.&foto=&foto2=&foto3=&foto4=" title="">
					<div class="portfolio item  webotros tvp" data-cat="webotros">
					     <h3>TVP - Ver más</h3>
				    </div>
				</a>
			    <a href="portfolio_extras.php?nombre=Ilustraciones&tipo=Fotografía y edición&tags=&descripcion=¡Acá presento algunas de mis ilustraciones! Todas fueron realizadas de manera libre con distintos conceptos que imaginé.&foto=&foto2=&foto3=&foto4=" title="">
				    <div class="portfolio item  webotros fotografias" data-cat="webotros">
					    	<h3>Fotografías</h3>
					</div>
				</a>
				<a href="portfolio_extras.php?nombre=&tipo=Afiches de distintas temáticas&tags=&descripcion=...&foto=&foto2=&foto3=&foto4=" title="">
				    <div class="portfolio item webotros afiches" data-cat="webotros">
					   		 <h3>Afiches - Ver más</h3>
				    </div>
				</a>
			    <a href="portfolio_extras.php?nombre=&tipo=Fotografías de distintas temáticas&tags=&descripcion=...&foto=&foto2=&foto3=&foto4=" title="">
				    <div class="portfolio  item webotros item4 ilus" data-cat="webotros">
					     <h3>¡Mis ilustraciones!</h3>
				    </div>
			    </a>	    
			</div> 
		</div>
	</section>

<!-- 																			QUIEN SOY 						--> 
	<a name="quien_soy"></a>
		<div class="holder quien_soy">
			<div class="contenido_qs">
				<div class="descripcionpropia">
					<!-- <div class="forma_textoqs" -->
					<h3 class="titulo_qs">Desde que recuerdo amo dibujar, expresarme por medio del arte gráfica. Muchas veces pinté paredes, hice collages e inventé historias.Así me convertí en una apasionada por el diseño, amante de la fotografía y del arte en general.</h3>
					<img src="img/quien_soy/quien_soy.png" alt="Quien soy" class="foto_qs">
					<p class="texto_qs">Soy estudiante de la <span class="bolditalic"> Licenciatura en Diseño y Comunicación Visual</span>, actualmente me encuentro realizando el Trabajo Integrador Final.
					Mis pilares son la <span class="bold">responsabilidad</span>, la<span class="bold"> simpleza</span>, la <span class="bold">funcionalidad </span>y la <span class="bold">diversión</span>. Una pieza bien diseñada debería llamar la atención y divertir, ¿no?
					</p>
				</div>
				<img src="img/quien_soy/cuerpocompleto-07.png" class="dibujoentero" alt="">	
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
							<h1 class="servs ">SOFTWARE</h1>
							<h2>¡Las herramientas! Te presento mis aptitudes con distintas tecnologías tanto de diseño gráfico, como de programación web y edición de video.</h2>
						</div>
						<center>
						
						<div class="software">
							<div class="soft_graficos1">
								<img src="img/software/1-06.png" alt="">
								<img src="img/software/2-07.png" alt="">
								<img src="img/software/3-08.png" alt="">
								<img src="img/software/Layout sitio-09.png" alt="">
								<img src="img/software/Layout sitio-10.png" alt="">
								<img src="img/software/Layout sitio-11.png" alt="">
								<img src="img/software/Layout sitio-12.png" alt="">

							</div>
							<div class="soft_graficos2">
								<img src="img/software/Layout sitio-13.png" alt="">
								<img src="img/software/Layout sitio-14.png" alt="">
								<img src="img/software/Layout sitio-15.png" alt="">
								<img src="img/software/Layout sitio-16.png" alt="">
								<img src="img/software/Layout sitio-17.png" alt="">
								<img src="img/software/Layout sitio-18.png" alt="">
								<img src="img/software/Layout sitio-19.png" alt="">
								<img src="img/software/Layout sitio-20.png" alt="">
							</div>
						</div>
					</center>
				</section>
		
		</div>

	<a name="contacto">
	</a>
		<div class="contenido_contacto contacto">
		
			<center>
				<div class="formulario">
					<h2 id="contacto">Contacto</h2>
					<form action="mailto:luisina.fl@hotmail.com?" method="post" name="formulario" id="section_formulario">
						<p>
							<label for="Nombre">Nombre y apellido: <br></label> 
							<input name="Nombre" type="text" required class="campos">
						</p>
						<p>
							<label for="email">Mail:<br></label>
							<input name="email" type="email" required class="campos" id="email">
						</p>

						<p>
							<label for="Pais">País:<br></label>
							<select name="Pais" class="campos" id="pais">
								<option>Argentina</option>
								<option>Brasil</option>
								<option>Bolivia</option>
								<option>Chile</option>
								<option>Estados Unidos</option>
								<option>México</option>
								<option>Paraguay</option>
								<option>Peru</option>
								<option>Uruguay</option>
								<option>Venezuela</option>
								<option>Otro estado americano</option>
								<option> Otro continente </option>
							</select>
						</p>
						<p>
							<label for="comentarios">Comentarios:<br></label></td>
							<textarea name="comentarios" id="comentarios" placeholder="Escribime tu comentario..."></textarea></td>
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
			
			
			<a class="boton_footer icon-celular">(+54) 15 2645- 5369</a>
			<a href="https://www.behance.net/luisinafl" target="_blank" class="boton_footer icon-behance">/luisinafl</a>
			<a href="https://www.linkedin.com/in/luisinafl-disenadora/" class="boton_footer icon-linkedin" target="_blank">/luisinafl-disenadora</a>
			<a href="https://github.com/luifernandezlong" class="boton_footer icon-github" target="_blank">/luifernandezlong</a>
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
