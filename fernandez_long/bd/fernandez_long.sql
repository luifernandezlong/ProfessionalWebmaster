-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-07-2017 a las 07:56:58
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `fernandez_long`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `idcategoria` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombrecat` varchar(255) NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idcategoria`, `nombrecat`) VALUES
(1, 'Branding'),
(2, 'Editorial'),
(3, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fernandez_long`
--

CREATE TABLE IF NOT EXISTS `fernandez_long` (
  `idcomentario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pais` varchar(255) NOT NULL,
  `comentario` text NOT NULL,
  PRIMARY KEY (`idcomentario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `fernandez_long`
--

INSERT INTO `fernandez_long` (`idcomentario`, `nombre`, `email`, `pais`, `comentario`) VALUES
(1, 'h', 'luisina.fl@hotmail.com', 'Argentina', 'j'),
(2, 'lui', 'luisina.fl@hotmail.com', 'Argentina', 'prueba2'),
(4, 'agus', 'agus@agus', 'MÃ©xico', 'hoal'),
(5, 'agus', 'agus@agus', 'Estados Unidos', 'aaaaa'),
(6, 'holaa', 'luisina.fl@hotmail.com', 'Venezuela', 'asjfl');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `idimagenes` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(255) NOT NULL,
  `idtrabajos` varchar(255) NOT NULL,
  PRIMARY KEY (`idimagenes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`idimagenes`, `imagen`, `idtrabajos`) VALUES
(1, 'img/portfolio/lactum/lactum1.png', '1'),
(2, 'img/portfolio/lactum/lactum2.png', '1'),
(3, 'img/portfolio/lactum/lactum3.png', '1'),
(4, 'img/portfolio/camino/camino1.png', '2'),
(5, 'img/portfolio/camino/camino2.png', '2'),
(6, 'img/portfolio/camino/camino3.png', '2'),
(7, 'img/portfolio/camino/camino4.png', '2'),
(8, 'img/portfolio/camino/camino5.png', '2'),
(9, 'img/portfolio/camino/camino6.png', '2'),
(10, 'img/portfolio/camino/camino7.png', '2'),
(11, 'img/portfolio/camino/camino8.png', '2'),
(12, 'img/portfolio/canada/canada1.png', '3'),
(13, 'img/portfolio/canada/canada2.png', '3'),
(14, 'img/portfolio/canada/canada3.png', '3'),
(15, 'img/portfolio/canada/canada4.png', '3'),
(16, 'img/portfolio/zenitram/zenitram1.png', '4'),
(17, 'img/portfolio/zenitram/zenitram2.png', '4'),
(18, 'img/portfolio/zenitram/zenitram3.png', '4'),
(19, 'img/portfolio/zenitram/zenitram4.png', '4'),
(20, 'img/portfolio/polina/polina1.png', '5'),
(21, 'img/portfolio/polina/polina2.png', '5'),
(22, 'img/portfolio/polina/polina3.png', '5'),
(23, 'img/portfolio/polina/polina4.png', '5'),
(24, 'img/portfolio/polina/polina5.png', '5'),
(25, 'img/portfolio/polina/polina6.png', '5'),
(26, 'img/portfolio/grito/grito1.png', '6'),
(27, 'img/portfolio/grito/grito2.png', '6'),
(28, 'img/portfolio/grito/grito3.png', '6'),
(29, 'img/portfolio/grito/grito4.png', '6'),
(30, 'img/portfolio/grito/grito5.png', '6'),
(31, 'img/portfolio/grito/grito6.png', '6'),
(32, 'img/portfolio/camino/camino1.png', '7'),
(33, 'img/portfolio/camino/camino2.png', '7'),
(34, 'img/portfolio/camino/camino3.png', '7'),
(35, 'img/portfolio/camino/camino4.png', '7'),
(36, 'img/portfolio/camino/camino5.png', '7'),
(37, 'img/portfolio/camino/camino6.png', '7'),
(38, 'img/portfolio/camino/camino7.png', '7'),
(39, 'img/portfolio/camino/camino8.png', '7'),
(40, 'img/portfolio/tvp/tvp1.png', '8'),
(41, 'img/portfolio/tvp/tvp2.png', '8'),
(42, 'img/portfolio/tvp/tvp3.png', '8'),
(43, 'img/portfolio/tvp/tvp4.png', '8'),
(44, 'img/portfolio/tvp/tvp5.png', '8'),
(45, 'img/portfolio/fotos/foto1.png', '9'),
(46, 'img/portfolio/fotos/foto2.png', '9'),
(47, 'img/portfolio/afiches/afiches1.png', '10'),
(48, 'img/portfolio/afiches/afiches2.png', '10'),
(49, 'img/portfolio/ilus/ilus1.png', '11'),
(50, 'img/portfolio/ilus/ilus2.png', '11'),
(51, 'img/portfolio/ilus/ilus3.png', '11'),
(52, 'img/portfolio/canada/canada1.png', '12'),
(53, 'img/portfolio/canada/canada2.png', '12'),
(54, 'img/portfolio/canada/canada3.png', '12'),
(55, 'img/portfolio/canada/canada4.png', '12'),
(56, '', ''),
(57, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajos`
--

CREATE TABLE IF NOT EXISTS `trabajos` (
  `idtrabajos` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `tags` text NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`idtrabajos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `trabajos`
--

INSERT INTO `trabajos` (`idtrabajos`, `nombre`, `descripcion`, `tags`, `idcategoria`, `logo`) VALUES
(1, 'Lactum', 'El diseño fue realizado para Lactum, una empresa ficticia de productos lácteos. Comenzando por el logotipo basado en la simplificación del concepto de ubre como productor de lácteos, hasta llegar al punto donde se comprendiera el chiste tipográfico y el concepto en el mismo momento. Luego se prosiguió con la identidad corporativa, formada por una carpeta de tipo tríptico y papelería interna y externa.', 'branding', 1, 'img/portfolio/lactum-chico.png'),
(2, 'Camino de los Jesuitas', 'Camino de los Jesuitas tiene como función brindar un recorrido turístico de tipo histórico a personas que deseen conocer la historia de la comunidad jesuítica en el sector que abarca el sur de Paraguay, la provincia de Misiones en Argentina, y una pequeña zona de Brasil. Los principales conceptos de la marca fueron la cruz y los caminos, que se muestran con el estiramiento exagerado de los caracteres, y el desgaste en el cual se encuentran las distintas Ruinas. Luego se pasó a diseñar un panel informativo y un afiche promocional de 50x70cm, una guía informativa junto con un sistema de 3 postales y un video promocional de corta duración .', 'Branding y diseño editorial', 1, 'img/portfolio/camino-chico.png'),
(3, 'Cañada', 'Se realizó el diseño integral de un periódico de la capital cordobesa, tomando como concepto un ícono de la ciudad que es el encauzamiento entre dos cuerpos de agua de la zona, que en la cultura popular es llamado Cañada.', 'Branding y diseño editorial', 1, 'img/portfolio/canada-chico.png'),
(4, 'Zenitram', 'Realizado en ambiente universitario, este trabajo partió de la película homónima, de la cual se tomaron los conceptos de choque, luces, devastación y efectos alucinógenos provocados por la ingesta de estupefacientes para crear una marca que contara resumidamente la historia del film. Se realizaron 3 paneles cuadrados que nacieron de distintas escenas claves, un afiche cinematográfico de gran escala, un libro informativo y un video con los títulos de la pieza hecho con stop motion .', 'Branding, logos, identidad, piezas promocionales, producción analógica.', 1, 'img/portfolio/zenitram-chico.png'),
(5, 'Polina Ivanova', 'Este libro, realizado sin fines comerciales, se basó en los dibujos de la artista Polina Ivanova, en los cuales suelen verse patrones y figuras humanas realizadas con distintas técnicas, muchas veces fusionadas de diversas maneras. La pieza fue realizada tanto de manera manual en caso de algunos dibujos, como con edición de los trabajos originales y la utilización de herramientas de diseño editorial como Adobe Indesign.', 'Diseño editorial, diseño de libro, producción analógica, edición fotográfica.', 2, 'img/portfolio/polina-chico.png'),
(6, 'Grito!', 'El proyecto universitario consistió en el diseño en pareja del nombre, marca y estructura de una revista con la temática de arte urbano.', 'Branding, logos, diseño editorial, diseño de revista, producción analógica.', 2, 'img/portfolio/grito-chico.png'),
(7, 'Camino de los Jesuitas', 'Camino de los Jesuitas tiene como función brindar un recorrido turístico de tipo histórico a personas que deseen conocer la historia de la comunidad jesuítica en el sector que abarca el sur de Paraguay, la provincia de Misiones en Argentina, y una pequeña zona de Brasil. Los principales conceptos de la marca fueron la cruz y los caminos, que se muestran con el estiramiento exagerado de los caracteres, y el desgaste en el cual se encuentran las distintas Ruinas. Luego se pasó a diseñar un panel informativo y un afiche promocional de 50x70cm, una guía informativa junto con un sistema de 3 postales y un video promocional de corta duración.', 'Branding, marcas, identidad, piezas promocionales, producción analógica, videos.', 2, 'img/portfolio/camino-chico.png'),
(8, 'Televisión Pública', 'Este trabajo universitario tuvo como principales conceptos la emisión generada por una señal televisiva y lo público. Se creó toda una identidad formada por distintas piezas de papelería, gráfica vehicular, el diseño de una página web y una aplicación móvil, y un corto video temático.', 'Branding, logos, identidad, papelería, piezas varias, videos.', 1, 'img/portfolio/tvp-chico.png'),
(9, 'Fotografías', 'Presento algunas de mis fotografías', 'Fotografía, edición', 3, 'img/portfolio/fotografia-chico.png'),
(10, 'Afiches', 'Estos son algunos de los afiches que he realizado en los últimos años.', 'Gráfica, Afiche, Cartel, Poster', 3, 'img/portfolio/afiches-chico.png'),
(11, 'Ilustraciones', '¡Acá presento algunas de mis ilustraciones! Todas fueron realizadas de manera libre con distintos conceptos que imaginé.', 'Ilustración, edición, dibujos', 3, 'img/portfolio/ilus-chico.png'),
(12, 'Cañada', 'Se realizó el diseño integral de un periódico de la capital cordobesa, tomando como concepto un ícono de la ciudad que es el encauzamiento entre dos cuerpos de agua de la zona, que en la cultura popular es llamado Cañada.', 'Branding, logos, identidad, diseño editorial, diseño de diario.', 2, 'img/portfolio/canada-chico.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
