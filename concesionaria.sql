-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 22-09-2022 a las 20:04:15
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `concesionaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autos`
--

DROP TABLE IF EXISTS `autos`;
CREATE TABLE IF NOT EXISTS `autos` (
  `patente` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `modelo` text COLLATE utf8_spanish_ci NOT NULL,
  `color` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`patente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `autos`
--

INSERT INTO `autos` (`patente`, `nombre`, `modelo`, `color`) VALUES
('45A29F', 'Citroen', 'C4', 'Gris'),
('54AF8T', 'Renault', '12', 'Rpjo'),
('BCF54A', 'Fiat', '1', 'rojo'),
('TY922F', ']Renault', '19', 'Blanco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE IF NOT EXISTS `imagenes` (
  `IDfoto` int(11) NOT NULL AUTO_INCREMENT,
  `patente` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `foto1` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `foto2` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `foto3` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`IDfoto`),
  KEY `patente` (`patente`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`IDfoto`, `patente`, `foto1`, `foto2`, `foto3`) VALUES
(1, 'BCF54A', 'public/coches/Fiat/fiatuno.jpg', 'public/coches/Fiat/fiatuno2.jpg', 'public/coches/Fiat/fiatuno3.jpg'),
(15, '45A29F', 'public/coches/Citroen/citroenC4.jpg', 'public/coches/Citroen/CitroenC4-2.jpg', 'public/coches/Citroen/CitroenC4-3.jpg'),
(16, '54AF8T', 'public/coches/Renault/renault12.jpg', 'public/coches/Renault/renault12-2.jpg', 'public/coches/Renault/renault12-3.jpg'),
(17, 'TY922F', 'public/coches/]Renault/renault19-1.jpg', 'public/coches/]Renault/renault19-2.jpg', 'public/coches/]Renault/renault19-3.jpg');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`patente`) REFERENCES `autos` (`patente`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
