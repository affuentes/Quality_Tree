-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-07-2015 a las 18:26:53
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `riesgo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `riesgo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fases` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `accion` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish_ci NOT NULL,
  `responsable` varchar(100) CHARACTER SET ucs2 COLLATE ucs2_spanish_ci NOT NULL,
  `seguimiento` varchar(100) CHARACTER SET ucs2 COLLATE ucs2_spanish_ci NOT NULL,
  `nivel` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish_ci NOT NULL,
  `probabilidad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(100) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL,
  `impacto` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
