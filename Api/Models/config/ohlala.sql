-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-10-2019 a las 00:10:29
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ohlala`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oh_Contacto`
--

CREATE TABLE `oh_Contacto` (
  `idContacto` int(11) NOT NULL,
  `Nombre` varchar(40) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `Mensaje` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oh_Incripcion`
--

CREATE TABLE `oh_Incripcion` (
  `idIncripción` int(11) NOT NULL,
  `NombreMarca` varchar(20) DEFAULT NULL,
  `NombreResponsable` varchar(45) DEFAULT NULL,
  `Cedula_Nit` varchar(45) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `Correo` varchar(45) DEFAULT NULL,
  `IdCiudad` varchar(50) DEFAULT NULL,
  `IdCategoria` varchar(45) DEFAULT NULL,
  `LinkMarca` varchar(45) DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `DescripcionMarca` text DEFAULT NULL,
  `ProductosRelacionados` text DEFAULT NULL,
  `ProductoMayorValor` int(11) DEFAULT NULL,
  `ProductoMenorValor` int(11) DEFAULT NULL,
  `IdMedio` varchar(245) DEFAULT NULL,
  `portafolio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `oh_Incripcion`
--
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `oh_Contacto`
--
ALTER TABLE `oh_Contacto`
  ADD PRIMARY KEY (`idContacto`);

--
-- Indices de la tabla `oh_Incripcion`
--
ALTER TABLE `oh_Incripcion`
  ADD PRIMARY KEY (`idIncripción`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `oh_Contacto`
--
ALTER TABLE `oh_Contacto`
  MODIFY `idContacto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `oh_Incripcion`
--
ALTER TABLE `oh_Incripcion`
  MODIFY `idIncripción` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
