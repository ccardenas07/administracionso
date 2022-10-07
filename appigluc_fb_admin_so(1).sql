-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2014 a las 22:58:38
-- Versión del servidor: 5.6.11
-- Versión de PHP: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `appigluc_fb_admin_so`
--
CREATE DATABASE IF NOT EXISTS `appigluc_fb_admin_so` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `appigluc_fb_admin_so`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `idc` int(11) NOT NULL AUTO_INCREMENT,
  `namec` varchar(100) NOT NULL,
  PRIMARY KEY (`idc`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion`
--

CREATE TABLE IF NOT EXISTS `descripcion` (
  `idd` int(11) NOT NULL AUTO_INCREMENT,
  `idc` varchar(100) NOT NULL,
  `texto1` varchar(100) NOT NULL,
  `fecha1` date NOT NULL,
  `texto2` varchar(100) NOT NULL,
  `fecha2` date NOT NULL,
  `texto3` varchar(100) NOT NULL,
  `fecha3` date NOT NULL,
  `texto4` varchar(100) NOT NULL,
  `fecha4` date NOT NULL,
  `imagen1` varchar(100) NOT NULL,
  `imagen2` varchar(100) NOT NULL,
  `imagen3` varchar(100) NOT NULL,
  `fechas` datetime NOT NULL,
  `usuario` varchar(100) NOT NULL,
  PRIMARY KEY (`idd`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `descripcion`
--

INSERT INTO `descripcion` (`idd`, `idc`, `texto1`, `fecha1`, `texto2`, `fecha2`, `texto3`, `fecha3`, `texto4`, `fecha4`, `imagen1`, `imagen2`, `imagen3`, `fechas`, `usuario`) VALUES
(16, 'Running', 'Ecudor 15k raffffffce', '2014-05-16', 'ecuador 15k mujeres', '2014-10-12', 'erter', '2014-05-18', 'estados unidos marathon', '2014-05-15', 'consejo.jpg', 'yaki.jpg', 'timido.jpg', '2014-05-21 21:33:50', 'joy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idu` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `pass_v` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`idu`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idu`, `user`, `pass`, `pass_v`, `name`, `email`) VALUES
(1, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(2, 'ricardo', '0F759DD1EA6C4C76CEDC299039CA4F23', '65df7f6009fcceddb2ae4c68e18d50be', 'Christian', 'dragjohn@hotmail.com'),
(3, 'ricardo', '5C443B2003676FA5E8966030CE3A86EA', 'cd605ae4359b76c5958f817e1c766bad', 'ricardo', 'dragjohn@hotmail.com'),
(4, 'ricardo', '5C443B2003676FA5E8966030CE3A86EA', 'cd605ae4359b76c5958f817e1c766bad', 'ricardo', 'dragjohn@hotmail.com'),
(5, 'sofi', '87CB8CC8B2F8FD52E2C3C0A4D8E8185F', 'ebf1ec7c82771892620bed5c0518e2b7', 'sofia', 'sofia@go.com'),
(6, 'ricardo', '0F759DD1EA6C4C76CEDC299039CA4F23', '65df7f6009fcceddb2ae4c68e18d50be', 'Christian', 'dragjohn@hotmail.com'),
(7, 'joy', 'C2C8E798AECBC26D86E4805114B03C51', '79fae441216069eb55018ce07e9b3f45', 'johana', 'johana.altamirano@aaconsulting.com.ec'),
(8, 'joselandia', '662EAA47199461D01A623884080934AB', 'a89ed4f4cb7c99eade97d26190a88b89', 'jose', 'jose.algo@aa.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
