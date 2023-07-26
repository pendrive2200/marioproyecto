-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-04-2023 a las 14:07:19
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `centroasclepio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `Loc_ID` int(11) NOT NULL,
  `Loc_Des` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`Loc_ID`, `Loc_Des`) VALUES
(1, 'capital'),
(2, 'buenos aires'),
(3, 'avellaneda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `Pac_id` int(11) NOT NULL,
  `Nombre` varchar(32) NOT NULL,
  `Apellido` varchar(32) DEFAULT NULL,
  `DNI` decimal(8,0) DEFAULT NULL,
  `Nº_Tramite` decimal(11,0) NOT NULL,
  `Mail` varchar(50) DEFAULT NULL,
  `Telefono` tinyint(10) DEFAULT NULL,
  `Direccion` varchar(35) NOT NULL,
  `Fecha_Nacimiento` date DEFAULT NULL,
  `loc_id` int(11) DEFAULT NULL,
  `genero` char(1) DEFAULT NULL,
  `Contraseña` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`Pac_id`, `Nombre`, `Apellido`, `DNI`, `Nº_Tramite`, `Mail`, `Telefono`, `Direccion`, `Fecha_Nacimiento`, `loc_id`, `genero`, `Contraseña`) VALUES
(1, 'gabriela', 'scholetanberger', '43556789', '190', 'gabriela@gmail.com', 127, 'los montes 1234', '1999-03-04', 3, 'F', 'elmascapito'),
(2, 'gabriel', 'scholetanberger', '43556789', '190', 'gabriel@gmail.com', 127, 'los montes 1234', '1995-02-02', 3, 'F', 'elmascapito'),
(3, 'jorge', 'scholetanberger', '43556789', '190', 'jorge@gmail.com', 127, 'los montes 1234', '0000-00-00', 1, 'F', 'elmascapito');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`Loc_ID`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`Pac_id`),
  ADD KEY `loc_id` (`loc_id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `pacientes_ibfk_1` FOREIGN KEY (`loc_id`) REFERENCES `localidades` (`Loc_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
