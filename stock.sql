-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2016 a las 16:35:26
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
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `campanias`
--

INSERT INTO `campanias` (`id_campania`, `codigo`, `titulo`) VALUES
(1, '10D8', 'S-Numero de Motor'),
(2, '15E7', 'S-Sustitución del variador del árbol de'),
(3, '20I4', 'A-Inspección de manguera de suministro d'),
(4, '20K9', 'A-Bomba Tandem'),
(5, '20T6', 'A-Conducto de retorno de combustible'),
(6, '20W5', 'S-Comprobación de la unidad de alimentac'),
(7, '20X9', 'S-Tubo de desagüe'),
(8, '21D6', 'S-Duosensor'),
(9, '23H8', 'W-Unidad de control del motor'),
(10, '23K8', 'W-Unidad de control del motor'),
(11, '23L8', 'S-Unidad de control del motor'),
(12, '23T9', 'W-Detección de agua'),
(13, '24AN', 'W-Revolución de ralentí en el arranque d'),
(14, '28F5', 'W-Bobina de encendido'),
(15, '34F6', 'S-Sustitución aceite para engranajes'),
(16, '40J3', 'W-Espirales de suspension delantera - SU'),
(17, '42F7', 'A-5U1 5U2 - 4259 - Falta Grasa en los ro'),
(18, '42G8', 'A-Instalación de placas "inlay" en el ej'),
(19, '44L3', 'A-Llantas de Suran / SuranCross'),
(20, '44L4', 'V-Reemplazo de llantas de FOX'),
(21, '45B1', 'A-Sustitución unidad de control del ABS'),
(22, '47M2', 'A-Unión atornillada del soporte de la pi'),
(23, '48E5', 'A-Sustituir rótulas de la barra de direc'),
(24, '48L8', 'A-Volante de dirección multifunción'),
(25, '55I5', 'W-Bloques soporte amortiguador portón/ca'),
(26, '66G4', 'W-CrossFox - Sustitución del recubrimien'),
(27, '69I6', 'A-Cinturon de seguridad laterales traser'),
(28, '69K6', 'A-Campaña de llamada Unidad de Control d'),
(29, '72C6', 'A-5Z* - 7255 - Asiento trasero Fox'),
(30, '72D8', 'W-Sistema de ajuste de la altura del asi'),
(31, '85A5', 'W-5U* - Reemplazar el electro ventilador'),
(32, '87B4', 'A-Elemento calefactor de la calefacción'),
(33, '87E3', 'W-Unidad de control del climatizador (Cl'),
(34, '90G4', 'W-Reprogramación del cuadro de instrumen'),
(35, '92B6', 'A-Cubierta motor limpiaparabrisas'),
(36, '92D4', '5Z* - Cobertura del tornillo de fijaci'),
(37, '94D5', 'A-94D5 5W1 9A3 9B3 5Z6 5U1 5U2 - Luz tra'),
(38, '94I6', 'A-5U* - Luces Traseras'),
(39, '97V2', 'W-Cable de masa del cambio'),
(40, '97X1', 'W-9774 - 5Z3* - Funciones de la radio si'),
(41, '97Z9', 'S-Sustitución del fusible de cinta F16');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `piezas`
--

INSERT INTO `piezas` (`id`, `codigo`, `descripcion`, `cantidad`, `fk_id_campania`) VALUES
(3, '5Z0-945-448-A', 'Chapa motor', 10, 1);

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
  MODIFY `id_campania` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `piezas`
--
ALTER TABLE `piezas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
