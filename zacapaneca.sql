-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 25-03-2020 a las 18:15:30
-- Versión del servidor: 8.0.18
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
-- Base de datos: `zacapaneca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `combos`
--

DROP TABLE IF EXISTS `combos`;
CREATE TABLE IF NOT EXISTS `combos` (
  `idCombo` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCombo` varchar(128) NOT NULL,
  `TiempoRealizacion` varchar(32) NOT NULL,
  `PrecioU` decimal(6,0) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  PRIMARY KEY (`idCombo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `combos`
--

INSERT INTO `combos` (`idCombo`, `NombreCombo`, `TiempoRealizacion`, `PrecioU`, `Descripcion`) VALUES
(1, 'Combo Wrap Menor', '10 minutos', '35', 'Una tortilla de Harina Sencilla con una porcion de Papas y una Coca-Cola Tamaño Personal.'),
(2, 'Combo Wrap Mayor', '20 minutos', '40', 'Tortilla de Harina Especial con una Porcion de Papas Fritas y una Coca-Cola tamaño Personal.'),
(3, 'Combo Deluxe', '25 minutos', '50', 'Tortilla de Harina Doble, con una Porcion de Papas Fritas y una Coca-Cola Tamaño Personal.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

DROP TABLE IF EXISTS `estados`;
CREATE TABLE IF NOT EXISTS `estados` (
  `idEstado` int(11) NOT NULL AUTO_INCREMENT,
  `NombreEstado` varchar(64) NOT NULL,
  PRIMARY KEY (`idEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`idEstado`, `NombreEstado`) VALUES
(1, 'Pendiente'),
(2, 'Listo'),
(3, 'Anulado'),
(4, 'Completado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `idPedido` int(11) NOT NULL AUTO_INCREMENT,
  `NombreCliente` varchar(255) NOT NULL,
  `FK_Combos` int(11) NOT NULL,
  `Cantidad` int(4) NOT NULL,
  `Total_Compra` decimal(16,0) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `NumeroTelefonico` varchar(16) NOT NULL,
  `FK_Estados` int(11) NOT NULL,
  PRIMARY KEY (`idPedido`),
  KEY `FK_Pedidos_Combos` (`FK_Combos`),
  KEY `FK_Pedidos_Estados` (`FK_Estados`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idPedido`, `NombreCliente`, `FK_Combos`, `Cantidad`, `Total_Compra`, `Email`, `NumeroTelefonico`, `FK_Estados`) VALUES
(11, 'Mario Enrique', 1, 5, '175', 'marencarlo2112@gmail.com', '+502 4132-6597', 3),
(12, 'Julio Alvarez', 3, 5, '250', 'JulioA@gmail.com', '+502 3223-2212', 3),
(13, 'Mario Enrique', 3, 5, '250', 'marencarlo2112@gmail.com', '+502 4132-6597', 1),
(14, 'Mario Enrique', 1, 2, '70', 'elgauchitoo@gmail.com', '+502 3223-2212', 1),
(15, 'Julio Alvarez', 3, 3, '150', 'JulioA@gmail.com', '+502 5456-3223', 3),
(17, 'Sebastian Antonio Carbajal Lopez', 1, 3, '105', 'sebant@gmail.com', '+502 3223-2212', 3);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `FK_Pedidos_Combos` FOREIGN KEY (`FK_Combos`) REFERENCES `combos` (`idCombo`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_Pedidos_Estados` FOREIGN KEY (`FK_Estados`) REFERENCES `estados` (`idEstado`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
