-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2014 a las 01:39:12
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `game_online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consejo_semana`
--

CREATE TABLE IF NOT EXISTS `consejo_semana` (
  `id_consejos` varchar(10) NOT NULL DEFAULT '',
  `consejo` varchar(1500) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id_consejos`),
  KEY `consejo` (`consejo`(767))
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `consejo_semana`
--

INSERT INTO `consejo_semana` (`id_consejos`, `consejo`) VALUES
('1', 'Controla tus impulsos fuera del juego. Claro que a todos nos gusta jugar, y que llegar a ver el final de un juego en el cual hemos invertido tiempo y esfuerzo es LA GLORIA. Es un instante en el que sientes que tienes la fuerza de Hulk con el martillo de thor, sos tan recio como wolverine y quedaras en la historia de la humanidad asi como lo hizo Mahatama Gandhi por su mensaje de paz.... aunque tu mensaje es ", SOY EL PUTO AMO DEL UNIVERSO DE LOS VIDEOJUEGOS!!!! " Ahi es donde interviene mi consejo. Se discreto con tus logros, controla tus impulsos...');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE IF NOT EXISTS `consultas` (
  `id_consulta` int(11) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(20) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) NOT NULL DEFAULT '',
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `direccion` varchar(220) DEFAULT NULL,
  `consulta` varchar(220) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_consulta`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id_consulta`, `cedula`, `nombre`, `apellido`, `telefono`, `email`, `direccion`, `consulta`) VALUES
(1, '20697009', 'Roberto', 'Fernandez', '04244679642', 'rober_fcm@hotmail.com', 'prebo', 'quiero mas informacion de productos'),
(2, '20654978', 'Diego', 'Viloria', '29667987456', 'diego@hotmail.com', 'Tinaquillo', 'Hola soy DIEGO'),
(3, '23468796', 'Edgar', 'Gonzales', '5649879', 'edgar@hotmail.com', 'Sandiego', 'Hola Soy Edgar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(200) NOT NULL DEFAULT '',
  `noticia` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id_noticia`,`imagen`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `imagen`, `noticia`) VALUES
(1, 'images/templatemo_image_03.jpg', 'Empezaremos con esta noticia, que es esto? , bueno aqui nos divertimos mantando y mostrando publicaciones para ustedes'),
(2, 'images\\templatemo_header.jpg', 'NEW LOGO: Esto queridos usuarios es el nuevo logo present en las mejores situaciones como un lobo solitario.'),
(19, 'images/Slide.jpg', 'gfdffg'),
(32, 'images/agendaNEW.jpg', 'jtgjjtdrjgd'),
(33, 'images/IMG evento pekeÃ±o.jpg', ''),
(34, 'images/agendaNEW.jpg', ''),
(35, 'images/agendaNEW.jpg', ''),
(36, 'images/agendaNEW.jpg', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `swowandlol`
--

CREATE TABLE IF NOT EXISTS `swowandlol` (
  `id_img` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(200) NOT NULL,
  `tipo_img` varchar(200) NOT NULL,
  PRIMARY KEY (`id_img`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `swowandlol`
--

INSERT INTO `swowandlol` (`id_img`, `img`, `tipo_img`) VALUES
(1, 'images\\bajhera.jpg', 'wow'),
(3, 'images\\swifty.jpg', 'wow'),
(4, 'images\\SirhcEz.jpg', 'lol'),
(7, 'images\\Sp4zie.jpg', 'lol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` varchar(10) NOT NULL,
  `clave` varchar(8) DEFAULT NULL,
  `nivel` varchar(4) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `cedula` varchar(30) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(15) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `genero` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `clave`, `nivel`, `nombre`, `apellido`, `cedula`, `telefono`, `email`, `direccion`, `genero`) VALUES
('diego', '123', '2', 'diego', 'cortes', '14185885', '04121990609', 'diego', 'eltrigal', 'dddddddddd'),
('rober', '2069', '1', 'Roberto ', 'Fernandez', '20697009', '04244679642', 'rober_fcm@horma', 'Prebo', 'Masculino'),
('yisus', '1234', '2', 'Jesus', 'Prieto', '13456789', '04126753564', 'yisus@gmail.com', 'Trigal', 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id_video` varchar(10) DEFAULT NULL,
  `linkvideo` varchar(200) NOT NULL,
  PRIMARY KEY (`linkvideo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id_video`, `linkvideo`) VALUES
('1', '//www.youtube.com/embed/BKqWxkKw8VI');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
