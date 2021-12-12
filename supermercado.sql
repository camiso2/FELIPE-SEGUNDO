-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2020 a las 02:13:11
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ganafs`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supermercado`
--

CREATE TABLE `supermercado` (
  `id` int(255) NOT NULL,
  `nombres` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `supermercado`
--

INSERT INTO `supermercado` (`id`, `nombres`) VALUES
(1, 'Aguada'),
(2, 'Aguadilla'),
(3, 'Aguadilla Gate 5'),
(4, 'Aguas Buenas'),
(5, 'Aibonito'),
(6, 'Arecibo'),
(7, 'Barceloneta'),
(8, 'Barranquitas'),
(9, 'Bayamon Santa Juanita'),
(10, 'Bayamon Sierra'),
(11, 'Cabo Rojo'),
(12, 'Caguas Bairoa'),
(13, 'Cauas Condado'),
(14, 'Caguas Plaza del Carmen'),
(15, 'Camuy'),
(16, 'Canovanas'),
(17, 'Carolina Campo Rico'),
(18, 'Carolina Los Colobos'),
(19, 'Carolina Plaza Carolina'),
(20, 'Carolina Villa Carolina'),
(21, 'Catano'),
(22, 'Cayey'),
(23, 'Coamo'),
(24, 'Comer?o\r'),
(25, 'Fajardo'),
(26, 'Florida'),
(27, 'Gu?nica'),
(28, 'Hatillo'),
(29, 'Hato Rey'),
(30, 'Humacao'),
(31, 'Isabela'),
(32, 'Jayuya'),
(33, 'Juana Diaz'),
(34, 'Lares'),
(35, 'Las Piedras'),
(36, 'Levittown'),
(37, 'Manati'),
(38, 'Mayaguez'),
(39, 'Morovis ? Barahona'),
(40, 'Naguabo'),
(41, 'Naranjito'),
(42, 'Ponce Caobos'),
(43, 'Ponce Morel Campos'),
(44, 'Rincon'),
(45, 'Rio Grande'),
(46, 'Salinas'),
(47, 'San German'),
(48, 'San Juan Altamira'),
(49, 'San Juan Borinquen'),
(50, 'San Juan Bucar?\r\nSan Juan Los Maestros'),
(51, 'San Lorenzo'),
(52, 'San Sebastian'),
(53, 'Toa Alta'),
(54, 'Toa Baja ? Campanillas'),
(55, 'Toa Baja ? La Mina'),
(56, 'Trujillo Alto Expreso'),
(57, 'Trujillo Alto Quebrada Grande'),
(58, 'Trujillo Alto Saint Just'),
(59, 'Utuado'),
(60, 'Vega Baja Playa'),
(61, 'Vega Baja Plaza'),
(62, 'Yauco');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `supermercado`
--
ALTER TABLE `supermercado`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `supermercado`
--
ALTER TABLE `supermercado`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
