-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2018 a las 01:57:33
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdejemplo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbcategoria`
--

CREATE TABLE `tbcategoria` (
  `idCategoria` int(11) NOT NULL,
  `nombreCategoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Truncar tablas antes de insertar `tbcategoria`
--

TRUNCATE TABLE `tbcategoria`;
--
-- Volcado de datos para la tabla `tbcategoria`
--

INSERT INTO `tbcategoria` (`idCategoria`, `nombreCategoria`) VALUES
(8, 'Comida'),
(9, 'Tiquetes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbexpense`
--

CREATE TABLE `tbexpense` (
  `idExpense` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `dateExpense` date NOT NULL,
  `merchantExpense` varchar(50) NOT NULL,
  `amountExpense` decimal(10,0) NOT NULL,
  `descriptionExpense` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncar tablas antes de insertar `tbexpense`
--

TRUNCATE TABLE `tbexpense`;
--
-- Volcado de datos para la tabla `tbexpense`
--

INSERT INTO `tbexpense` (`idExpense`, `idCategoria`, `dateExpense`, `merchantExpense`, `amountExpense`, `descriptionExpense`) VALUES
(1, 8, '2018-11-17', 'Hood Grill', '5000', 'Chifrijo'),
(2, 9, '2018-11-17', 'Paso Ancho - San JosÃ©', '450', 'Pago del bus'),
(5, 8, '2018-11-17', 'Mc Donalds', '1000', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncar tablas antes de insertar `tbuser`
--

TRUNCATE TABLE `tbuser`;
--
-- Volcado de datos para la tabla `tbuser`
--

INSERT INTO `tbuser` (`id`, `user`, `password`, `fullName`) VALUES
(1, 'admin', 'admin', 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbcategoria`
--
ALTER TABLE `tbcategoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `tbexpense`
--
ALTER TABLE `tbexpense`
  ADD PRIMARY KEY (`idExpense`),
  ADD KEY `idCategoria` (`idCategoria`);

--
-- Indices de la tabla `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbcategoria`
--
ALTER TABLE `tbcategoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tbexpense`
--
ALTER TABLE `tbexpense`
  MODIFY `idExpense` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbexpense`
--
ALTER TABLE `tbexpense`
  ADD CONSTRAINT `tbexpense_ibfk_1` FOREIGN KEY (`idCategoria`) REFERENCES `tbcategoria` (`idCategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
