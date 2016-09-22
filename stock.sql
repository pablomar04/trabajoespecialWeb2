-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2016 a las 01:19:33
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `stock`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campanias`
--

CREATE TABLE IF NOT EXISTS `campanias` (
  `id_campania` int(11) NOT NULL,
  `codigo` varchar(11) NOT NULL,
  `titulo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `id_imagen` int(11) NOT NULL,
  `path` varchar(100) NOT NULL,
  `fk_id_pieza` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piezas`
--

CREATE TABLE IF NOT EXISTS `piezas` (
  `id` int(11) NOT NULL,
  `codigo` varchar(17) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fk_id_campania` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campanias`
--
ALTER TABLE `campanias`
  ADD PRIMARY KEY (`id_campania`), ADD KEY `fk_id_repuesto` (`codigo`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id_imagen`), ADD KEY `fk_id_pieza` (`fk_id_pieza`);

--
-- Indices de la tabla `piezas`
--
ALTER TABLE `piezas`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_id_campania` (`fk_id_campania`), ADD KEY `campania` (`fk_id_campania`), ADD KEY `campania_2` (`fk_id_campania`), ADD KEY `campania_3` (`fk_id_campania`), ADD KEY `campania_4` (`fk_id_campania`), ADD KEY `campania_5` (`fk_id_campania`), ADD KEY `campania_6` (`fk_id_campania`), ADD KEY `campania_7` (`fk_id_campania`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campanias`
--
ALTER TABLE `campanias`
  MODIFY `id_campania` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `piezas`
--
ALTER TABLE `piezas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
ADD CONSTRAINT `imagenes_ibfk_1` FOREIGN KEY (`fk_id_pieza`) REFERENCES `piezas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `piezas`
--
ALTER TABLE `piezas`
ADD CONSTRAINT `piezas_ibfk_1` FOREIGN KEY (`fk_id_campania`) REFERENCES `campanias` (`id_campania`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
