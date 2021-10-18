-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-10-2021 a las 23:47:02
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `centrocomercialsl`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consumo_energia`
--

CREATE TABLE `consumo_energia` (
  `ID` int(3) NOT NULL,
  `NumStand` varchar(20) NOT NULL,
  `DueStand` varchar(20) NOT NULL,
  `NoPagoLuz` varchar(20) NOT NULL,
  `ConEner` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consumo_energia`
--

INSERT INTO `consumo_energia` (`ID`, `NumStand`, `DueStand`, `NoPagoLuz`, `ConEner`) VALUES
(22, '1001', 'Quispe Quispe Secund', '2 mes', 150),
(23, '1002', 'Valenzuela Ignacio L', '0 meses', 0),
(24, '1003', 'Huayta Mesa Juan ', '2 meses', 230),
(25, '1004', 'Salasar Sol Juana', '1 mes', 135),
(26, '1006', 'Halata Ynca Sofia', '0 meses', 0),
(27, '1005', 'Torrez Huaraz Rosa', '0', 0),
(28, '1007', 'Paz Mesa Juliana', '2 meses', 145),
(29, '1008', 'Espinoza Casco Rosio', '1 mes', 120);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `defensacivil_indeci`
--

CREATE TABLE `defensacivil_indeci` (
  `ID` int(3) NOT NULL,
  `NumStand` varchar(20) NOT NULL,
  `DueStand` varchar(80) NOT NULL,
  `DefCivil` int(5) NOT NULL,
  `CabInd` int(5) NOT NULL,
  `ReiInd` int(5) NOT NULL,
  `Ind` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multas_asamblea`
--

CREATE TABLE `multas_asamblea` (
  `ID` int(3) NOT NULL,
  `NumStand` varchar(20) NOT NULL,
  `DueStand` varchar(80) NOT NULL,
  `CantidadMulAsam` varchar(20) NOT NULL,
  `MulAsam` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrar_stand`
--

CREATE TABLE `registrar_stand` (
  `ID` int(3) NOT NULL,
  `NumStand` varchar(20) NOT NULL,
  `DueStand` varchar(80) NOT NULL,
  `NumCelular` varchar(20) NOT NULL,
  `EstStand` varchar(20) NOT NULL,
  `UbiStand` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registrar_stand`
--

INSERT INTO `registrar_stand` (`ID`, `NumStand`, `DueStand`, `NumCelular`, `EstStand`, `UbiStand`) VALUES
(23, '1001', 'Quispe Quispe Secundino', '984514255', 'Alquilado', 'Pasiillo1'),
(24, '1002', 'Valenzuela Ignacio Luis', '954783548', 'Alquilado', 'Pasillo2'),
(25, '1003', 'Huayta Mesa Juan  ', '948782547', 'Alquilado', 'Pasillo3'),
(26, '1004', 'Salasar Sol Juana', '954258745', 'Alquilado', 'Pasillo4'),
(27, '1005', 'Torrez Huaraz Rosa', '965241544', 'Alquilado', 'Pasillo5'),
(28, '1006', 'Halata Ynca Sofia', '985475444', 'Alquilado', 'pasillo6'),
(29, '1007', 'Paz Mesa Juliana', '954521478', 'No esta alquilado', 'pasillo7'),
(30, '1008', 'Espinoza Casco Rosio', '954885147', 'Alquilado', 'Pasillo8'),
(31, '1009', 'Quispe Sulcaray Lidia', '948782654', 'Alquilado', 'pasillo9'),
(32, '1010', 'Rosales Sala Jhasmyn', '965665254', 'Alquilado', 'pasillo10'),
(33, '1011', 'Huayta Ramos Jhony', '954778545', 'Alquilado', 'pasiillo11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguridadlimpieza`
--

CREATE TABLE `seguridadlimpieza` (
  `ID` int(3) NOT NULL,
  `NumStand` varchar(20) NOT NULL,
  `DueStand` varchar(80) NOT NULL,
  `CantSegLim` varchar(20) NOT NULL,
  `TotSegLim` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consumo_energia`
--
ALTER TABLE `consumo_energia`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `defensacivil_indeci`
--
ALTER TABLE `defensacivil_indeci`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `multas_asamblea`
--
ALTER TABLE `multas_asamblea`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `registrar_stand`
--
ALTER TABLE `registrar_stand`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `seguridadlimpieza`
--
ALTER TABLE `seguridadlimpieza`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consumo_energia`
--
ALTER TABLE `consumo_energia`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `defensacivil_indeci`
--
ALTER TABLE `defensacivil_indeci`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `multas_asamblea`
--
ALTER TABLE `multas_asamblea`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `registrar_stand`
--
ALTER TABLE `registrar_stand`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `seguridadlimpieza`
--
ALTER TABLE `seguridadlimpieza`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
