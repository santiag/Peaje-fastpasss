-- phpMyAdmin SQL Dump
-- version 2.11.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-05-2011 a las 05:15:54
-- Versión del servidor: 5.0.91
-- Versión de PHP: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `peaje`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE IF NOT EXISTS `vehiculos` (
  `id` int(20) NOT NULL auto_increment,
  `codigo` varchar(20) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `nombre_pro` varchar(20) NOT NULL,
  `apellido_pro` varchar(20) NOT NULL,
  `saldo` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `codigo`, `marca`, `modelo`, `nombre_pro`, `apellido_pro`, `saldo`) VALUES
(1, '1004734387', 'nissan', '350z', 'Santiago', 'Bernal', 84000),
(2, '123', 'mazda', 'rx8', 'mauricio', 'molina', 0);
