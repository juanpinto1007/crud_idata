-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-12-2020 a las 14:17:33
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `prinombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `segnombre` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `priapellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `segapellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `identidad_id` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `tel` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`identidad_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`prinombre`, `segnombre`, `priapellido`, `segapellido`, `identidad_id`, `ciudad`, `tel`, `email`, `direccion`) VALUES
('Santiago ', 'A', 'Sossa', 'J', '123456', 'Medellin', '321547854', 'santiago@hotmail', 'kjhh'),
('hannn', '', 'B', 'H', '4', 'H', '778', 'k@gmail.com', 'HGG'),
('gahag', 'gg', 'gg', 'holahola', '44', 'jhh', '54', 'k@gmail.com', 'jhg'),
('hshsh', 'hhshh', 'hh', 'jjj', '4555', '6kk', '455', 'k@gmail.com', 'jjj');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

DROP TABLE IF EXISTS `historial`;
CREATE TABLE IF NOT EXISTS `historial` (
  `identidad_id` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `identidad_cliente` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `accion` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`identidad_id`, `fecha`, `identidad_cliente`, `accion`) VALUES
('admin', '2020-12-17', '4555', 'Crear Cliente'),
('101', '2020-12-17', '78', 'Crear Cliente'),
('101', '2020-12-17', '44', 'Crear Cliente'),
('101', '2020-12-17', '4', 'Crear Cliente'),
('101', '2020-12-17', '4', 'Actualizó Cliente'),
('101', '2020-12-17', '4', 'Actualizó Cliente'),
('101', '2020-12-17', '44', 'Eliminó Cliente'),
('101', '2020-12-17', '78', 'Eliminó Cliente'),
('101', '2020-12-17', '45', 'Eliminó Cliente'),
('101', '2020-12-17', '123', 'Eliminó Cliente'),
('101', '2020-12-17', '123', 'Eliminó Cliente'),
('101', '2020-12-17', '123456', 'Creó Cliente'),
('101', '2020-12-17', '123456', 'Actualizó Cliente'),
('104', '2020-12-17', '44', 'Actualizó Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `idrol` int(2) NOT NULL,
  `nomrol` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idrol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `nomrol`) VALUES
(1, 'admin'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `identidad_id` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `idrol` int(2) NOT NULL,
  `pass` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`identidad_id`),
  KEY `idrol` (`idrol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`identidad_id`, `nombre`, `apellido`, `idrol`, `pass`) VALUES
('101', 'Juan ', 'Pinto ', 1, '123'),
('102', 'Duglas', 'Martinez', 2, '1234'),
('104', 'Santiago', 'Sossa', 1, '123');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
