-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2020 a las 04:05:17
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
-- Base de datos: `db_phantom`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arma`
--

CREATE TABLE `arma` (
  `id_arma` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `arma`
--

INSERT INTO `arma` (`id_arma`, `nombre`, `tipo`, `id_tipo`) VALUES
(1, 'Glock-18', 'Pistola', 3),
(2, 'USP-S', 'Pistola', 3),
(3, 'Desert Eagle', 'Pistola', 3),
(4, 'p250', 'Pistola', 3),
(5, 'Five-SeveN', 'Pistola', 3),
(6, 'Berettas Dobles', 'Pistola', 3),
(7, 'Tec-9', 'Pistola', 3),
(8, 'P2000', 'Pistola', 3),
(9, 'MP5-SD', 'Subfusil', 5),
(10, 'MP7', 'Subfusil', 5),
(11, 'UMP-45', 'Subfusil', 5),
(12, 'P90', 'Subfusil', 5),
(13, 'PP-Bizon', 'Subfusil', 5),
(14, 'MP9', 'Subfusil', 5),
(15, 'MAC-10', 'Subfusil', 5),
(16, 'Nova', 'Pesada', 2),
(17, 'XM1014', 'Pesada', 2),
(18, 'Recortada', 'Pesada', 2),
(19, 'MAG-7', 'Pesada', 2),
(20, 'M249', 'Pesada', 2),
(21, 'Negev', 'Pesada', 2),
(22, 'AK-47', 'Rifle', 4),
(23, 'M4-A4', 'Rifle', 4),
(24, 'SSG 08', 'Rifle', 4),
(25, 'SSG 553', 'Rifle', 4),
(26, 'AUG', 'Rifle', 4),
(27, 'AWP', 'Rifle', 4),
(28, 'G3SG1', '', 0),
(29, 'SCAR 20', 'Rifle', 4),
(30, 'FAMAS', 'Rifle', 4),
(31, 'GALIL AR', 'Rifle', 4),
(32, 'Bayoneta', 'Cuchillo', 1),
(33, 'Bayoneta M9', 'Cuchillo', 1),
(34, 'Alfanje', 'Cuchillo', 1),
(35, 'Bowie', 'Cuchillo', 1),
(36, 'Clasico', 'Cuchillo', 1),
(37, 'Supervivencia', 'Cuchillo', 1),
(38, 'Cazador', 'Cuchillo', 1),
(39, 'Destripador', 'Cuchillo', 1),
(40, 'Encordado', 'Cuchillo', 1),
(41, 'Esqueletizado', 'Cuchillo', 1),
(42, 'Mariposa', 'Cuchillo', 1),
(43, 'Nomada', 'Cuchillo', 1),
(44, 'Plegable', 'Cuchillo', 1),
(45, 'Talon', 'Cuchillo', 1),
(46, 'Ursus', 'Cuchillo', 1),
(47, 'Dagas Sombrias', 'Cuchillo', 1),
(48, 'Karambit', 'Cuchillo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skin`
--

CREATE TABLE `skin` (
  `id` int(11) NOT NULL,
  `id_arma` int(30) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `coleccion` varchar(45) DEFAULT NULL,
  `stattrak` tinyint(1) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `skin`
--

INSERT INTO `skin` (`id`, `id_arma`, `nombre`, `tipo`, `estado`, `coleccion`, `stattrak`, `precio`) VALUES
(1, 22, 'Disruptor fantasma', 'clasificado', 'Recién fabricado', 'Colección Prisma 2', 0, 1613),
(2, 22, 'Disruptor fantasma', 'clasificado', 'Recién fabricado', 'Colección Prisma 2', 1, 3825),
(3, 2, 'Córtex', 'clasificado', 'Recién fabricado', 'Colección Clutch', 0, 1198);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arma`
--
ALTER TABLE `arma`
  ADD PRIMARY KEY (`id_arma`);

--
-- Indices de la tabla `skin`
--
ALTER TABLE `skin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_arma` (`id_arma`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arma`
--
ALTER TABLE `arma`
  MODIFY `id_arma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `skin`
--
ALTER TABLE `skin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `skin`
--
ALTER TABLE `skin`
  ADD CONSTRAINT `skin_ibfk_1` FOREIGN KEY (`id_arma`) REFERENCES `arma` (`id_arma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
